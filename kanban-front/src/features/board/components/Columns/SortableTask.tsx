import React from 'react';
import {CSS} from '@dnd-kit/utilities';
import type {task} from "@/features/board/boardSlice";
import {useSortable} from '@dnd-kit/sortable';

interface propTypes {
    dark: boolean
    setTaskShow: React.Dispatch<React.SetStateAction<boolean>>
    setSelectedTask: React.Dispatch<React.SetStateAction<task | null>>
    task: task
}

const SortableTask = ({dark, setTaskShow, setSelectedTask, task}: propTypes) => {
    const {id, title, subtasks} = task
    const {
        attributes,
        listeners,
        setNodeRef,
        transform,
        transition,
    } = useSortable({id});

    const len = subtasks.length
    const com = subtasks.filter(sub => sub.isCompleted).length;


    const style = {
        transform: CSS.Translate.toString(transform),
        transition,

        backgroundColor: !dark ? 'white' : '',
        color: !dark ? 'black' : '',
        border: !dark ? '1px solid var(--second)' : '',
    }

    return (
        <li ref={setNodeRef} style={style} {...listeners} {...attributes}
            onClick={() => {
                setTaskShow(true)
                setSelectedTask(task)
            }}>
            {title}
            <p>{`${com} of ${len} subtasks`}</p>
        </li>
    );
};

export default SortableTask;