import {useDroppable} from '@dnd-kit/core';
import React from "react";

const DroppableColumn = ({id, children, name}: { id: number, children: React.ReactNode, name: string }) => {
    const {setNodeRef} = useDroppable({
        id, data: {name}
    });

    return (
        <article  ref={setNodeRef} className='boardColumn'
                 key={id}>
            {children}
        </article>
    );
};

export default DroppableColumn;

