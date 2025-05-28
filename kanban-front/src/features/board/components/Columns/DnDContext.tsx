import React, {useState} from 'react';
import {
    DndContext,
    closestCenter,
    KeyboardSensor,
    PointerSensor,
    useSensor,
    useSensors, type DragEndEvent,
} from '@dnd-kit/core';
import {
    arrayMove,
    sortableKeyboardCoordinates,
} from '@dnd-kit/sortable';

const DndMainContext = ({children}: { children: React.ReactNode }) => {
    const sensors = useSensors(
        useSensor(PointerSensor),
        useSensor(KeyboardSensor, {
            coordinateGetter: sortableKeyboardCoordinates,
        })
    );

// here we want to alter the tasks for a specific column, so we need that column id and get its tasks then dispatch the appropriate reducer function
    function handleDragEnd(event: DragEndEvent) {
        const {active, over} = event;
        console.log(event)
        // if (active.id !== over?.id) {
        //     setItems((items) => {
        //         const oldIndex = items.indexOf(active.id);
        //         const newIndex = items.indexOf(over.id);
        //
        //         return arrayMove(items, oldIndex, newIndex);
        //     });
        // }
    }


    return (
        <>
            <DndContext
                sensors={sensors}
                collisionDetection={closestCenter}
                onDragEnd={handleDragEnd}
            >
                {children}
            </DndContext>
        </>
    );
};

export default DndMainContext;