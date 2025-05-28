// DroppableColumn.tsx
import {useDroppable} from '@dnd-kit/core';
import React from "react";



const DroppableColumn = ({id, children}: { id: number; children: React.ReactNode }) => {
    const {setNodeRef} = useDroppable({id});

    return (
        <article className='boardColumn' key={id} ref={setNodeRef}>
            {children}
        </article>
    );
};

export default DroppableColumn;
