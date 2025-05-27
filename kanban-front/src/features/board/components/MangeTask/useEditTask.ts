import React, {useState, useRef} from 'react'
import {addTask, editTask, type subtask} from '../../boardSlice'
import {UseAppContext} from '@/context'
import {useEffect} from 'react'
import {ADD_TASK, EDIT_TASK} from '@/queries'
import {useMutation} from '@apollo/client'
import {useAppDispatch} from "@/app/hooks";

import type {task, board} from "../../boardSlice";
import {useGetBoard} from "@/features/board/components/hooks/useGetBoard";

export type states = 'used' | 'valid' | 'required';

type UseEditTaskReturn = {
    formRef: React.RefObject<HTMLFormElement | null>
    entries: { title: string, desc: string };
    setEntries: React.Dispatch<React.SetStateAction<{
        title: string
        desc: string
    }>>;
    subTasks: subtask[];
    setSubTasks: React.Dispatch<React.SetStateAction<subtask[]>>;
    used: states[];
    setUsed: React.Dispatch<React.SetStateAction<states[]>>;
    status: { status: string; statusId: number };
    setStatus: React.Dispatch<React.SetStateAction<{
        status: string
        statusId: number
    }>>;
    usedBoard: string;
    handleOutsideClick: (e: MouseEvent | React.MouseEvent) => void;
    handleSubmit: (e: React.FormEvent<HTMLFormElement>) => Promise<void>;
    theOne: board;
};

export function useEditTask(setEditTask: React.Dispatch<React.SetStateAction<boolean>>, selectedTask: task | null): UseEditTaskReturn | null {
    const {selected} = UseAppContext()
    const [editTaskFunc] = useMutation(EDIT_TASK)
    const [addTF] = useMutation(ADD_TASK)

    const theOne = useGetBoard()
    const initialStatus = theOne.columns[0]
    const initialTask = theOne?.columns.flatMap(c => c.tasks).find(t => t?.id === selectedTask?.id) ?? {
        id: 0,
        title: '',
        description: ''
        , subtasks: [],
        status: initialStatus.name,
        statusId: initialStatus.id ?? 0
    };
    const [current, setCurrent] = useState(() => initialTask);
    const {id} = current
    const [subTasks, setSubTasks] = useState(() => current.subtasks);
    const formRef = useRef<HTMLFormElement>(null)
    const [entries, setEntries] = useState({
        title: current.title ?? '',
        desc: current.description ?? '',
    })
    const [usedBoard, setUsedBoard] = useState<states>('valid')
    const [used, setUsed] = useState<states[]>(() => subTasks.map(() => 'valid'));
    const [status, setStatus] = useState({
        status: current.status,
        statusId: current.statusId,
    })
    const dispatch = useAppDispatch()


    useEffect(() => {
        const task = theOne?.columns.flatMap(column => column.tasks).find(task => task?.id === id);
        if (task) setCurrent(task);
    }, [theOne, id]);

    const handleOutsideClick = (e: MouseEvent | React.MouseEvent) => {
        if (formRef.current && !formRef.current.contains(e.target as Node)) {
            setEditTask(false)
        }
    }

    const validate = (): boolean => {
        let isValid = true;

        // Title validation
        const currentCol = theOne?.columns.find(col => col.name === status.status);
        const duplicate = currentCol?.tasks?.some(t => t.title === entries.title && t.id !== selectedTask?.id);

        if (!entries.title) {
            setUsedBoard('required');
            isValid = false;
        } else if (duplicate) {
            setUsedBoard('used');
            isValid = false;
        } else {
            setUsedBoard('valid');
        }

        // Subtask validation
        const titles: string[] = [];
        const updatedUsed = subTasks.map(sub => {
            if (!sub.title) {
                isValid = false;
                return 'required';
            }
            if (titles.includes(sub.title)) {
                isValid = false;
                return 'used';
            }
            titles.push(sub.title);
            return 'valid';
        });
        setUsed(updatedUsed);

        return isValid;
    };
    const handleAddNewTask = async (baseTask: {
        title: string
        description: string
        status: string
        statusId: number
        subtasks: subtask[]
    }) => {
        const {data} = await addTF({variables: {inputTask: baseTask}})
        const {subTasksIds, taskId} = data.addTask;
        if (taskId) {
            dispatch(addTask({
                selected, ...status,
                title: entries.title,
                description: entries.desc,
                tasks: subTasks,
                subTasksIds,
                taskId
            }))
        }
    }

    const handleSubmit = async (e: React.FormEvent<HTMLFormElement>) => {
        e.preventDefault();

        //newSubIds
        if (validate()) {

            const baseTask = {
                title: entries.title,
                description: entries.desc ?? '',
                status: status.status,
                statusId: status.statusId,
                subtasks: subTasks,
            };
            const taskPayload = selectedTask ? {...baseTask, taskId: id} : baseTask;
            if (selectedTask) {
                try {
                    const {data} = await editTaskFunc({variables: {inputTask: taskPayload}});
                    const newSubIds = data.editTask.newSubIds
                    dispatch(
                        editTask({
                            prevStatus: current.status.toString(),
                            id,
                            selected,
                            status: status.status.toString(),
                            statusId: status.statusId,
                            title: entries.title.toString(),
                            description: (entries.desc).toString() ?? ''
                            , tasks: subTasks, newSubIds
                        })
                    )
                } catch (error) {
                    console.log(error);
                }
            } else {
                await handleAddNewTask(baseTask)
            }
            setSubTasks([])
            setEntries({title: '', desc: ''})
            setEditTask(false)
        }
    }

    return {
        formRef,
        entries,
        setEntries,
        subTasks,
        setSubTasks,
        used,
        setUsed,
        status,
        setStatus,
        usedBoard,
        handleOutsideClick,
        handleSubmit,
        theOne
    };

}