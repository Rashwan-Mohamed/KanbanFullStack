import React from 'react';
import {
    arrayMove,
    SortableContext,
    sortableKeyboardCoordinates,
    verticalListSortingStrategy,
} from '@dnd-kit/sortable';

const SortableColumnContext = ({children, tasks, id}: { children: React.ReactNode, tasks: number[], id: number }) => {
    return (
        <SortableContext
            items={tasks}
            strategy={verticalListSortingStrategy}
            id={String(id)}
        >
            {children}
        </SortableContext>
    );
};

export default SortableColumnContext;