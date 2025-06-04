import React from 'react';
import {
    SortableContext,
    verticalListSortingStrategy,
} from '@dnd-kit/sortable';
import {useDroppable} from "@dnd-kit/core";

const SortableColumnContext = ({children, tasks, id}: {
    children: React.ReactNode,
    tasks: number[],
    id: number
}) => {
    const {setNodeRef} = useDroppable({id});
    return (
        <SortableContext
            items={tasks}
            strategy={verticalListSortingStrategy}
            id={String(id)}
        >
            <article className='boardColumn' ref={setNodeRef}>
                {children}
            </article>
        </SortableContext>
    )
        ;
};

export default SortableColumnContext;