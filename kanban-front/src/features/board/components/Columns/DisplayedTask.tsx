import React from 'react';
import type {task} from "@/features/board/boardSlice.ts";

type style
    =
    {
        transform: string | undefined
        transition: string | undefined
        backgroundColor: string
        color: string
        border: string
    }

interface propTypes {
    dark: boolean
    setTaskShow: React.Dispatch<React.SetStateAction<boolean>>
    setSelectedTask: React.Dispatch<React.SetStateAction<task | null>>
    task: task | null
    ref?: (node: (HTMLElement | null)) => void
    style?: style
}

const DisplayedTask = ({
                           ref, setTaskShow,
                           setSelectedTask, task, style, ...props
                       }: propTypes) => {
    if (!task) return;
    const {title, subtasks} = task
    const len = subtasks.length
    const com = subtasks.filter(sub => sub.isCompleted).length;
    return (
        <li ref={ref} style={style} {...props}
            onClick={() => {
                setTaskShow(true)
                setSelectedTask(task)
            }}>
            {title}
            <p>{`${com} of ${len} subtasks`}</p>
        </li>
    );
};

export default DisplayedTask;