import React, {useEffect} from 'react';
import {type column, editTask, type task} from "@/features/board/boardSlice";
import DroppableColumn from "@/features/board/components/Columns/DroppableColumn.tsx";
import DraggableTask from "@/features/board/components/Columns/DraggableTask.tsx";
import {useMutation} from "@apollo/client";
import {EDIT_TASK_STATUS} from "@/queries.ts";
import {UseAppContext} from "@/context.tsx";
import {useAppDispatch} from "@/app/hooks.ts";
import {
    DndContext,
    KeyboardSensor,
    MouseSensor,
    TouchSensor,
    useSensor,
    useSensors, type DragEndEvent
} from '@dnd-kit/core';

interface propTypes {
    columns: column[]
    dark: boolean
    setTaskShow: React.Dispatch<React.SetStateAction<boolean>>
    setSelectedTask: React.Dispatch<React.SetStateAction<task | null>>
}

const DisplayColumns: React.FC<propTypes> = ({columns, dark, setTaskShow, setSelectedTask}) => {
        const [editTSF] = useMutation(EDIT_TASK_STATUS);
        const {selected} = UseAppContext()


        const dispatch = useAppDispatch()
        useEffect(() => {
        }, []);
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
            touchSensor, keyboardSensor
        );

        function handleDragEnd(event: DragEndEvent) {
            const taskId = event.active.id
            const columnId = event.over?.id
            const task = event.active.data?.current?.task
            const status = event.over?.data?.current?.name

            const {id, title, description, subtasks, status: prevStatus} = task
            console.log(status)
            editTSF({variables: {taskId, statusID: columnId}})
                .then((res) => {
                    console.log("Task status updated:", res);
                })
                .catch((err) => {
                    console.error("Error updating task status:", err);
                });

            dispatch(
                editTask({
                    prevStatus: prevStatus,
                    id,
                    selected,
                    status: status.toString(),
                    statusId: Number(columnId),
                    title: title,
                    description: description,
                    tasks: subtasks,
                })
            )

        }

        return (
            <>
                <DndContext onDragEnd={handleDragEnd} sensors={sensors}>
                    {columns.map((item, index) => {
                        const {id, name, tasks} = item
                        return (
                            <DroppableColumn key={id ?? index} id={id ?? index} name={name}>
                          <span>
                <div style={{backgroundColor: `var(--circle${index})`}}></div>
                <p>
                  {name} ({tasks?.length})
                </p>
              </span>
                                <ul
                                    className={`${!tasks?.length ? 'emptyColumn' : 'undefined'}`}
                                >
                                    {tasks?.map((task) => {
                                        const {id, title, subtasks} = task
                                        const len = subtasks.length
                                        const com = subtasks.filter(sub => sub.isCompleted).length;
                                        return (
                                            <DraggableTask key={id ?? index} id={id} dark={dark} setTaskShow={setTaskShow}
                                                           setSelectedTask={setSelectedTask} task={task}>
                                                {title}
                                                <p>{`${com} of ${len} subtasks`}</p>

                                            </DraggableTask>

                                        )
                                    })}
                                </ul>
                            </DroppableColumn>
                        )
                    })}
                </DndContext>
            </>
        )
            ;
    }
;

export default DisplayColumns;