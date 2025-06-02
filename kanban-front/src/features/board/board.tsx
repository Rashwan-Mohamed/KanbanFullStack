import {useState} from 'react'
import {UseAppContext} from '@/context'
import NewColumn from './components/Columns/newColumn'
import MangeTask from '@/features/board/components/MangeTask/MangeTask'
import Task from './components/Task/task'
import NoBoardFound from './components/NoBoardFound'
import type {task} from './boardSlice'
import DisplayColumns from "@/features/board/components/Columns/DisplayColumns";
import {useGetBoard} from "@/features/board/components/hooks/useGetBoard.ts";
import {useDroppable} from "@dnd-kit/core";
import {ApolloError} from "@apollo/client";

const Board = ({error, loading}: { error: ApolloError | undefined, loading: boolean }) => {
    const {dark, hideSide, setHideSide} = UseAppContext()
    const [column, setColumn] = useState(false) // to display new column creation
    const [boardShow, setBoardShow] = useState(false) // to display a new board creation when there are no boards
    const [taskShow, setTaskShow] = useState(false) // to display task
    const [editTask, setEditTask] = useState(false) // to display task editing
    const [selectedTask, setSelectedTask] = useState<task | null>(null);
    const board = useGetBoard()
    const {setNodeRef} = useDroppable({
        id: 'unique-id',
    });

    if (!board) {
        return (
            <>
                <NoBoardFound setBoardShow={setBoardShow} boardShow={boardShow} error={error}
                              loading={loading}></NoBoardFound>
                {hideSide && (
                    <div className='reverseHide' onClick={() => setHideSide(false)}>
                        {svg1}
                    </div>
                )}
            </>
        )
    }
    const {columns, id} = board
    return (
        <>
            <section
                ref={setNodeRef}
                style={{
                    backgroundColor: !dark ? 'var(--whiteFirst)' : '',
                    left: hideSide ? '-300px' : '0',
                }}
                className='board-container'
            >
                {column && <NewColumn setColumn={setColumn}/>}
                {taskShow && selectedTask && (
                    <Task
                        selectedTask={selectedTask}
                        setTaskShow={setTaskShow}
                        setEditTask={setEditTask}
                    />
                )}
                {editTask && (
                    <MangeTask setEditTask={setEditTask} selectedTask={selectedTask}/>
                )}
                {hideSide && (
                    <div className='reverseHide' onClick={() => setHideSide(false)}>
                        {svg1}
                    </div>
                )}
                <DisplayColumns columns={columns} dark={dark} setTaskShow={setTaskShow}
                                setSelectedTask={setSelectedTask}/>
                <article className='boardColumn' key={id}>
                    <ul onClick={() => setColumn(true)} className='addNewColumn'>
                        + New Column
                    </ul>
                </article>
            </section>
        </>
    )
}

export default Board
const svg1 = <svg width='16' height='11' xmlns='http://www.w3.org/2000/svg'>
    <path
        d='M15.815 4.434A9.055 9.055 0 0 0 8 0 9.055 9.055 0 0 0 .185 4.434a1.333 1.333 0 0 0 0 1.354A9.055 9.055 0 0 0 8 10.222c3.33 0 6.25-1.777 7.815-4.434a1.333 1.333 0 0 0 0-1.354ZM8 8.89A3.776 3.776 0 0 1 4.222 5.11 3.776 3.776 0 0 1 8 1.333a3.776 3.776 0 0 1 3.778 3.778A3.776 3.776 0 0 1 8 8.89Zm2.889-3.778a2.889 2.889 0 1 1-5.438-1.36 1.19 1.19 0 1 0 1.19-1.189H6.64a2.889 2.889 0 0 1 4.25 2.549Z'
        fill='#FFF'
    />
</svg>