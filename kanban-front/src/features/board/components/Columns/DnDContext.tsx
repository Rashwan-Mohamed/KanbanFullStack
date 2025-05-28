import React, {useState} from 'react';
import {
    closestCenter,
    KeyboardSensor,
    PointerSensor,
    type DragEndEvent, DndContext,
    MouseSensor,
    TouchSensor,
    useSensor,
    useSensors,
} from '@dnd-kit/core';
import {
    arrayMove,
    sortableKeyboardCoordinates,
} from '@dnd-kit/sortable';

const DndMainContext = ({children}: { children: React.ReactNode }) => {
    const mouseSensor = useSensor(MouseSensor, {
        // Require the mouse to move by 10 pixels before activating
        activationConstraint: {
            distance: 10,
        },
    });
    const touchSensor = useSensor(TouchSensor, {
        // Press delay of 250ms, with tolerance of 5px of movement
        activationConstraint: {
            delay: 250,
            tolerance: 5,
        },
    });
    const keyboardSensor = useSensor(KeyboardSensor);

    const sensors = useSensors(
        mouseSensor,
        touchSensor,
        keyboardSensor,
    );

// here we want to alter the tasks for a specific column, so we need that column id and get its tasks then dispatch the appropriate reducer function
    function handleDragEnd(event: DragEndEvent) {
        const {active, over} = event;
        const {
            id, data
        } = active
        if (!over) return
        const {id: overId, data: overData} = over
        const prevStatus = data.current?.sortable.containerId
        const status = overData.current?.sortable.containerId
        console.log('taskId', id, 'isOver', overId, 'prevColumn', prevStatus, 'newColumn', status)

        // if prevStatus!==status then the task status needs to be changed and being arranged in the new status
        // if prevStatus===status then it will be just arranged in the existing status
        // the DB tasks table now has to have a new column called index to hold the new order in the DB
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