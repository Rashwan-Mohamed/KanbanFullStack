import React, {useState} from 'react';
import {
    closestCenter,
    KeyboardSensor,
    PointerSensor,
    type DragEndEvent, DndContext,
    MouseSensor,
    TouchSensor,
    useSensor,
    useSensors, type DragOverEvent, closestCorners,
} from '@dnd-kit/core';
import {
    arrayMove,
    sortableKeyboardCoordinates,
} from '@dnd-kit/sortable';
import useTaskStatusUpdater from "@/features/board/components/Task/useTaskStatusUpdater.ts";
import {useGetBoard} from "@/features/board/components/hooks/useGetBoard.ts";
import {editTask, type task} from "@/features/board/boardSlice.ts";
import {UseAppContext} from "@/context.tsx";
import {useAppDispatch} from "@/app/hooks.ts";

const DndMainContext = ({children}: { children: React.ReactNode }) => {
    const {selected} = UseAppContext()
    const [move, setMove] = useState({id: 0, order: -1, prevStatus: 'add', status: 'add', statusId: 0});
    const board = useGetBoard()
    useTaskStatusUpdater(move)
    const dispatch = useAppDispatch();

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
        const prevStatus: number = data.current?.sortable.containerId
        const status: number = overData.current?.sortable.containerId ?? prevStatus
        // Call Backend via the custom hook and tell it is changed with the new statusId and the new order
        // so we need to get that status and get its tasks and see the order of overId task
        Number(overId)
        const isSameColumn = prevStatus === status
        const isOverlap = id === overId
        // console.log('taskId', id, 'isOver', Number(overId), 'prevColumn', prevStatus, 'newColumn', status)
        if (id === overId || (Number(overId) == prevStatus && prevStatus === status)) {
            return
        }

        // if (active.id !== over?.id) {
        //     setItems((items) => {
        //         const oldIndex = items.indexOf(active.id);
        //         const newIndex = items.indexOf(over.id);
        //
        //         return arrayMove(items, oldIndex, newIndex);
        //     });
        // }
    }

    const handleDragOver = (event: DragOverEvent) => {
        const {active, over} = event;
        const {
            id, data
        } = active
        if (!over) return
        const {id: overId, data: overData} = over
        const prevStatus: number = data.current?.sortable.containerId
        const status: number = overData.current?.sortable.containerId ?? overId
        // console.log('taskId', id, 'isOver', Number(overId), 'prevColumn', prevStatus, 'newColumn', status)
        // console.log(prevStatus, status)
        if (prevStatus !== status) {
            let foundTask: task | undefined;
            board.columns.forEach((col) => {
                const task = col.tasks?.find((task) => task.id === id);
                if (task) foundTask = task; // Store the found task
            });
            const prevStatusColumn = board.columns.find((col) => col.id === Number(prevStatus));
            const statusColumn = board.columns.find((col) => col.id === Number(status));
            console.log(prevStatusColumn, statusColumn)
            if (!foundTask || !statusColumn || !prevStatusColumn) return
            console.log('css')
            setMove({
                id: foundTask.id,
                order: statusColumn.tasks?.length ?? 0,
                prevStatus: prevStatusColumn.name,
                status: statusColumn.name,
                statusId: statusColumn.id
            })
            dispatch(editTask({
                prevStatus: prevStatusColumn.name,
                selected,
                ...foundTask,
                tasks: foundTask.subtasks,
                newSubIds: [],
                status: statusColumn.name,
                statusId: statusColumn.id
            }))

        }
    }

    return (
        <>
            <DndContext
                sensors={sensors}
                onDragEnd={handleDragEnd}
                onDragOver={handleDragOver}
                collisionDetection={closestCorners}
            >
                {children}
            </DndContext>
        </>
    );
};

export default DndMainContext;