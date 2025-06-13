import React, {useState, useRef} from 'react'
import {addTask, editTask, type subtask} from '../../boardSlice'
import {UseAppContext} from '@/context'
import {useEffect} from 'react'
import {useMutation} from '@apollo/client'
import {useAppDispatch} from "@/app/hooks";

import type {task, board} from "../../boardSlice";
import {useGetBoard} from "@/features/board/components/hooks/useGetBoard";
import useClickOutside from "@/features/board/components/hooks/useClickOutside.ts";

import {ADD_TASK, EDIT_TASK} from "@/GraphQL Queries/TasksQueries.ts";
import {notifySuccess} from "@/generalComponents/toastService.ts";


type UseEditTaskReturn = {
    formRef: React.RefObject<HTMLFormElement | null>
    entries: { title: string, desc: string };
    setEntries: React.Dispatch<React.SetStateAction<{
        title: string
        desc: string
    }>>;
    subTasks: subtask[];
    setSubTasks: React.Dispatch<React.SetStateAction<subtask[]>>;
    used: string[];
    setUsed: React.Dispatch<React.SetStateAction<string[]>>;
    status: { status: string; statusId: number };
    setStatus: React.Dispatch<React.SetStateAction<{
        status: string
        statusId: number
    }>>;
    usedBoard: string;
    handleSubmit: (e: React.FormEvent) => Promise<void>;
    theOne: board;
    loading: boolean;
};

export function useEditTask(setEditTask: React.Dispatch<React.SetStateAction<boolean>>, selectedTask: task | null): UseEditTaskReturn | null {
    const {selected} = UseAppContext()
    const [editTaskFunc, {loading: editLoading}] = useMutation(EDIT_TASK)
    const [addTF, {loading}] = useMutation(ADD_TASK)

    const theOne = useGetBoard()
    const initialStatus = theOne.columns[0]
    const initialTask = theOne.columns.flatMap(c => c.tasks).find(t => t?.id === selectedTask?.id) ?? {
        id: -1,
        title: '',
        description: ''
        , subtasks: [],
        status: initialStatus.name,
        statusId: initialStatus.id,
        order: initialStatus.tasks?.length ? initialStatus.tasks?.length + 1 : 0,
    };
    const [current, setCurrent] = useState(() => initialTask);
    const {id} = current
    const [subTasks, setSubTasks] = useState(() => current.subtasks);
    const formRef = useRef<HTMLFormElement>(null)
    const [entries, setEntries] = useState({
        title: current.title,
        desc: current.description,
    })
    const [usedBoard, setUsedBoard] = useState<string>('valid')
    const [used, setUsed] = useState<string[]>(() => subTasks.map(() => 'valid'));
    const [status, setStatus] = useState({
        status: current.status,
        statusId: current.statusId,
    })
    const dispatch = useAppDispatch()
    const getOrderForNewTask = (): number => {
        return theOne.columns.find((col) => col.id === status.statusId)?.tasks?.length ?? 1;
    }

    useEffect(() => {
        const task = theOne.columns.flatMap(column => column.tasks).find(task => task?.id === id);
        if (task) setCurrent(task);
    }, [theOne, id]);


    const validate = (): boolean => {
        let isValid = true;

        // Title validation
        const currentCol = theOne.columns.find(col => col.name === status.status);
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
        order: number
    }) => {
        const {data} = await addTF({variables: {inputTask: baseTask}})
        if (!data || !data.addTask) throw new Error('Mutation did not returned data')
        const {subTasksIds, taskId} = data.addTask;
        notifySuccess("Task Added Successfully")
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

    useClickOutside({
        elements: [formRef],
        handler: () => setEditTask(false),
        active: true
    })
    ;
    const handleSubmit = async (e: React.FormEvent) => {
        e.preventDefault();

        //newSubIds
        if (validate()) {
            const baseTask = {
                title: entries.title,
                description: entries.desc,
                status: status.status,
                statusId: status.statusId,
                subtasks: subTasks,
                order: getOrderForNewTask(),
            };
            const taskPayload = selectedTask ? {...baseTask, taskId: id, order: selectedTask.order} : baseTask;
            if (selectedTask) {
                try {
                    const {data} = await editTaskFunc({variables: {inputTask: taskPayload}});
                    if (!data || !data.editTask) {
                        console.error("Error: Mutation returned undefined data.");
                        return;
                    }
                    const newSubIds = data.editTask.newSubIds
                    notifySuccess("Task Edited Successfully")
                    dispatch(
                        editTask({
                            prevStatus: current.status,
                            id,
                            selected,
                            status: status.status,
                            statusId: status.statusId,
                            title: entries.title,
                            description: (entries.desc)
                            , tasks: subTasks, newSubIds, order: selectedTask.order
                        })
                    )

                } catch (error) {
                    console.error(error);
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
        handleSubmit,
        theOne, loading: loading || editLoading
    };

}