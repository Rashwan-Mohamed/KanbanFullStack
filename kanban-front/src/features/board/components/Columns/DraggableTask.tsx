import React from 'react';
import {useDraggable} from "@dnd-kit/core";
import {CSS} from '@dnd-kit/utilities';
import type {task} from "@/features/board/boardSlice";

interface propTypes {
    id: number,
    children: React.ReactNode,
    dark: boolean
    setTaskShow: React.Dispatch<React.SetStateAction<boolean>>
    setSelectedTask: React.Dispatch<React.SetStateAction<task | null>>
    task: task
}

const DraggableTask = ({id, dark, setTaskShow, setSelectedTask, task, children}: propTypes) => {
    const {attributes, listeners, setNodeRef, transform} = useDraggable({
        id,
        data: {
            task
        }, attributes: {
            role: 'activationConstraint',
            roleDescription: 's'
        }
    });

    const style = {
        transform: CSS.Translate.toString(transform),
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
            {children}
        </li>
    );
};

export default DraggableTask;

/*   activationConstraint={{
      delay: 250,
      distance: 3,
      tolerance: 10,
    }}*/