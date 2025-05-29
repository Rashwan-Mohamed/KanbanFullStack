import React from 'react';
import type {column, task} from "@/features/board/boardSlice";
import DndMainContext from "@/features/board/components/Columns/DnDContext.tsx";
import SortableColumnContext from "@/features/board/components/Columns/SortableColumnContext.tsx";
import SortableTask from "@/features/board/components/Columns/SortableTask.tsx";
import DroppableColumn from "@/features/board/components/Columns/DroppableColumn.tsx";


interface propTypes {
    columns: column[]
    dark: boolean
    setTaskShow: React.Dispatch<React.SetStateAction<boolean>>
    setSelectedTask: React.Dispatch<React.SetStateAction<task | null>>
}

const DisplayColumns: React.FC<propTypes> = ({columns, dark, setTaskShow, setSelectedTask}) => {
        return (
            <>
                <DndMainContext>
                    {columns.map((item, index) => {
                        const {id, name, tasks} = item
                        if (!tasks) return null
                        const sortedTasks = [...tasks]
                        sortedTasks.sort((a, b) => a.order - b.order)
                        return (

                            <SortableColumnContext key={id ?? index} tasks={tasks?.map((task) => task.id) ?? [0]}
                                                   id={id ?? index}>
                                <DroppableColumn id={id ?? index}>
                                            <span>
                <div style={{backgroundColor: `var(--circle${index})`}}></div>
                <p>
                  {name} ({tasks?.length})
                </p>
              </span>
                                    <ul
                                        className={`${!tasks?.length ? 'emptyColumn' : 'undefined'}`}
                                    >
                                        {sortedTasks.map((task) => {
                                            return (
                                                <SortableTask key={task.id ?? index} dark={dark}
                                                              setTaskShow={setTaskShow}
                                                              setSelectedTask={setSelectedTask} task={task}>
                                                </SortableTask>
                                            )
                                        })}
                                    </ul>

                                </DroppableColumn>
                            </SortableColumnContext>


                        )
                    })}
                </DndMainContext>
            </>
        )
            ;
    }
;

export default DisplayColumns;