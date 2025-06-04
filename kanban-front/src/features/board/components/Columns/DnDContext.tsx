import React, {useState} from 'react';
import {
    KeyboardSensor,
    type DragEndEvent,
    DndContext,
    MouseSensor,
    TouchSensor,
    useSensor,
    useSensors,
    type DragOverEvent,
    // closestCorners,
    pointerWithin,
    rectIntersection,
    MeasuringStrategy,
    type Active,
    type ClientRect,
    type DroppableContainer,
    // type CollisionDetection, closestCenter, getFirstCollision,
} from '@dnd-kit/core';
import {
    arrayMove,
} from '@dnd-kit/sortable';
import useTaskStatusUpdater from "@/features/board/components/Task/useTaskStatusUpdater.ts";
import {useGetBoard} from "@/features/board/components/hooks/useGetBoard.ts";
import {changeStatusTasks, editTask, type task} from "@/features/board/boardSlice.ts";
import {UseAppContext} from "@/context.tsx";
import {useAppDispatch} from "@/app/hooks.ts";
import {useMutation} from "@apollo/client";
import {CHANGE_TASK_ORDER} from "@/GraphQL Queries/TasksQueries.ts";
import type {RectMap} from '@dnd-kit/core/dist/store';
import type {Coordinates} from '@dnd-kit/core/dist/types';

const DndMainContext = ({children}: { children: React.ReactNode }) => {
    const {selected} = UseAppContext()
    const [move, setMove] = useState({id: 0, order: -1, prevStatus: 'add', status: 'add', statusId: 0});
    const board = useGetBoard()
    useTaskStatusUpdater(move)
    const dispatch = useAppDispatch();
    const [changeTOF] = useMutation(CHANGE_TASK_ORDER)
    const mouseSensor = useSensor(MouseSensor, {
        // Require the mouse to move by 10 pixels before activating
        activationConstraint: {
            distance: 10,
        },
    });
    const touchSensor = useSensor(TouchSensor, {
        // Press delay of 250ms, with tolerance of 5px of movement
        activationConstraint: {
            delay: 1,
            tolerance: 2,
        },
    });
    const keyboardSensor = useSensor(KeyboardSensor);
    const sensors = useSensors(
        mouseSensor,
        touchSensor,
        keyboardSensor,
    );

    function customCollisionDetectionAlgorithm(args: {
        active: Active;
        collisionRect: ClientRect;
        droppableRects: RectMap;
        droppableContainers: DroppableContainer[];
        pointerCoordinates: Coordinates | null;
    }) {
        // First, let's see if there are any collisions with the pointer
        const pointerCollisions = pointerWithin(args);

        // Collision detection algorithms return an array of collisions
        if (pointerCollisions.length > 0) {
            return pointerCollisions;
        }

        // If there are no collisions with the pointer, return rectangle intersections
        return rectIntersection(args);
    }


    // const collisionDetectionStrategy: CollisionDetection = useCallback(
    //     (args) => {
    //         if (activeId && activeId in items) {
    //             return closestCenter({
    //                 ...args,
    //                 droppableContainers: args.droppableContainers.filter(
    //                     (container) => container.id in items
    //                 ),
    //             });
    //         }
    //
    //         // Start by finding any intersecting droppable
    //         const pointerIntersections = pointerWithin(args);
    //         const intersections =
    //             pointerIntersections.length > 0
    //                 ? // If there are droppables intersecting with the pointer, return those
    //                 pointerIntersections
    //                 : rectIntersection(args);
    //         let overId = getFirstCollision(intersections, 'id');
    //
    //         if (overId != null) {
    //
    //
    //             if (overId in items) {
    //                 const containerItems = items[overId];
    //
    //                 // If a container is matched and it contains items (columns 'A', 'B', 'C')
    //                 if (containerItems.length > 0) {
    //                     // Return the closest droppable within that container
    //                     overId = closestCenter({
    //                         ...args,
    //                         droppableContainers: args.droppableContainers.filter(
    //                             (container) =>
    //                                 container.id !== overId &&
    //                                 containerItems.includes(container.id)
    //                         ),
    //                     })[0]?.id;
    //                 }
    //             }
    //
    //             lastOverId.current = overId;
    //
    //             return [{id: overId}];
    //         }
    //
    //         // When a draggable item moves to a new container, the layout may shift
    //         // and the `overId` may become `null`. We manually set the cached `lastOverId`
    //         // to the id of the draggable item that was moved to the new container, otherwise
    //         // the previous `overId` will be returned which can cause items to incorrectly shift positions
    //         if (recentlyMovedToNewContainer.current) {
    //             lastOverId.current = activeId;
    //         }
    //
    //         // If no droppable is matched, return the last match
    //         return lastOverId.current ? [{id: lastOverId.current}] : [];
    //     },
    //     [activeId, items]
    // );


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
        const isSameColumn = prevStatus === status
        const isOverlap = id === overId

        const tasks = board.columns.find((col) => col.id === Number(status))?.tasks ?? []
        if (!tasks[0]) return;
        // console.log('taskId', id, 'isOver', Number(overId), 'prevColumn', prevStatus, 'newColumn', status)
        if (isOverlap || (Number(overId) == prevStatus && isSameColumn)) {
            console.log('No Change')
            return
        }

        if (id !== overId) {
            const oldIndex = tasks.findIndex((task) => task.id === id);
            const newIndex = tasks.findIndex(task => task.id === overId)
            let newTasks = arrayMove(tasks, oldIndex, newIndex);
            newTasks = newTasks.map((tas, index) => {
                return {
                    ...tas, order:
                    index
                }
            })
            const tasksId = newTasks.map((task) => task.id)
            const orders = newTasks.map((task) => task.order)
            changeTOF({variables: {tasksId, orders}})
            dispatch(changeStatusTasks({status, selected, tasks: newTasks}))
        }
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
            if (!foundTask || !statusColumn || !prevStatusColumn) return
            const colTasks = statusColumn.tasks?.length
            const baseParam = {
                order: colTasks ? colTasks + 1 : 0,
                prevStatus: prevStatusColumn.name,
                status: statusColumn.name,
                statusId: statusColumn.id
            }
            setMove({
                id: foundTask.id,
                ...baseParam,
            })
            dispatch(editTask({
                selected,
                ...foundTask,
                tasks: foundTask.subtasks,
                newSubIds: [],
                ...baseParam,

            }))

        }
    }

    return (
        <>
            <DndContext
                sensors={sensors}
                onDragEnd={handleDragEnd}
                onDragOver={handleDragOver}
                // collisionDetection={closestCorners}
                collisionDetection={customCollisionDetectionAlgorithm}
                measuring={{
                    droppable: {
                        strategy: MeasuringStrategy.Always,
                    },
                }}
            >
                {children}
            </DndContext>
        </>
    );
};

export default DndMainContext;