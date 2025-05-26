import React, {useState, useRef} from 'react'
import {editTask, subtask} from '../../boardSlice'
import {UseAppContext} from '@/context'
import {useEffect} from 'react'
import {ADD_TASK, EDIT_TASK} from '@/queries'
import {useMutation} from '@apollo/client'
import {useAppDispatch, useAppSelector} from "@/app/hooks";

import type {task, board} from "../../boardSlice";

export enum ValidationState {
    Valid = "trial",
    Required = "required",
    Duplicate = "used",
}

type UseEditTaskReturn = {
    formRef: React.RefObject<HTMLFormElement | null>
    entries: { title: String, desc: String };
    setEntries: React.Dispatch<React.SetStateAction<{
        title: String
        desc: String
    }>>;
    subTasks: subtask[];
    setSubTasks: React.Dispatch<React.SetStateAction<subtask[]>>;
    used: ValidationState[];
    setUsed: React.Dispatch<React.SetStateAction<ValidationState[]>>;
    status: { status: String; statusId: number };
    setStatus: React.Dispatch<React.SetStateAction<{
        status: String
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

    const boards = useAppSelector((state) => state.boards)
    let theOne = boards.find(item => item.name === selected);
    const initialTask = theOne?.columns.flatMap(c => c.tasks).find(t => t.id === selectedTask?.id);
    const [current, setCurrent] = useState(() => initialTask);
    if (!current || !theOne) return null;
    const {id} = current
    const [subTasks, setSubTasks] = useState(() => current.subtasks);
    const formRef = useRef<HTMLFormElement>(null)
    const [entries, setEntries] = useState({
        title: current.title ?? '',
        desc: current.description ?? '',
    })
    const [usedBoard, setUsedBoard] = useState('trial')
    const [used, setUsed] = useState<ValidationState[]>(() => subTasks.map(() => ValidationState.Valid));
    const [status, setStatus] = useState({
        status: current?.status,
        statusId: current?.statusId,
    })

    const dispatch = useAppDispatch()


    useEffect(() => {
        const task = theOne?.columns.flatMap(column => column.tasks).find(task => task.id === id);
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
        const duplicate = currentCol?.tasks.some(t => t.title === entries.title && t.id !== selectedTask?.id);

        if (!entries.title) {
            setUsedBoard(ValidationState.Required);
            isValid = false;
        } else if (duplicate) {
            setUsedBoard(ValidationState.Duplicate);
            isValid = false;
        } else {
            setUsedBoard(ValidationState.Valid);
        }

        // Subtask validation
        const titles: string[] = [];
        const updatedUsed = subTasks.map(sub => {
            if (!sub.title) {
                isValid = false;
                return ValidationState.Required;
            }
            if (titles.includes(sub.title)) {
                isValid = false;
                return ValidationState.Duplicate;
            }
            titles.push(sub.title);
            return ValidationState.Valid;
        });
        setUsed(updatedUsed);

        return isValid;
    };
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

            try {
                const taskPayload = selectedTask ? {...baseTask, taskId: id} : baseTask;
                let mutationFunc = selectedTask ? editTaskFunc : addTF;
                const {data} = await mutationFunc({variables: {inputTask: taskPayload}});
                let newSubIds = data.editTask.newSubIds
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