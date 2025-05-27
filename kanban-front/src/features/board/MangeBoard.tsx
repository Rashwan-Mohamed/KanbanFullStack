import React, {useState, useRef, useEffect} from 'react'
import {addNewBoard, editBoard} from './boardSlice'
import {UseAppContext} from '@/context'
import useCloseEscape from './components/hooks/useCloseEscape.tsx'
import {useMutation} from '@apollo/client'
import {ADD_BOARD, EDIT_BOARD, EDIT_COLUMN} from '@/queries'
import {useAppDispatch, useAppSelector} from '@/app/hooks'
import NewColumnInput from './components/Columns/NewColumnInput'
import AddNewColumn from "@/features/board/components/Columns/AddNewColumn";
import {useGetBoard} from "@/features/board/components/hooks/useGetBoard";
import type {column} from "./boardSlice";
import useCheckColumns from "@/features/board/components/hooks/useCheckColumns.ts";

function MangeBoard({setBoardShow, operation}: {
    setBoardShow: React.Dispatch<React.SetStateAction<boolean>>,
    operation: 'edit' | 'add'
}) {
    const {setSelected} = UseAppContext()
    const theOne = useGetBoard()
    const [name, setName] = useState(() => operation === 'edit' ?
        theOne.name
        :
        ''
    )
    const [columns, setColumns] = useState<column[]>(() => operation === 'edit' ? theOne.columns : [{name: ''}])
    const [used, setUsed] = useState(columns.map(() => "trial"))
    const [usedBoard, setUsedBoard] = useState('trial')
    const [addNB] = useMutation(ADD_BOARD)
    const [editDF] = useMutation(EDIT_BOARD)
    const [editCF] = useMutation(EDIT_COLUMN)
    const boards = useAppSelector((state) => state.boards)
    const close = useCloseEscape()
    const dispatch = useAppDispatch()
    const formRef = useRef<HTMLFormElement>(null)
    const checkBoard = () => {
        let proceed = true
        if (!name) {
            proceed = false
            setUsedBoard('required')
        }
        let boardIndex = boards.findIndex(board => board.name === theOne.name) ?? -1
        if (operation !== 'edit')
            boardIndex = -1
        const repeatedBoard = boards.some((board, index) => board.name === name && index !== boardIndex)
        if (repeatedBoard) {
            setUsedBoard('used')
        }
        return !repeatedBoard ? proceed : false
    }
    const resetForm = () => {
        setColumns([{name: ''}])
        setName('')
        setBoardShow(false)
        setSelected(name)
    }

    const [columnOkay, usedState] = useCheckColumns(columns)

    const handleSubmit = async (e: React.FormEvent) => {
        e.preventDefault()
        setUsed(() => usedState)
        const boardOkay = checkBoard()
        if (boardOkay && usedBoard !== 'trial') {
            setUsedBoard('trial')
        }
        // check columns
        if (columnOkay && boardOkay) {
            const mutateFunction = operation === 'edit' ? handleEditBoard : handleAddNewBoard;
            await mutateFunction();
        }
    }
    const handleEditBoard = async () => {
        setSelected(name)
        editDF({variables: {boardID: theOne.id, boardName: name}})
        const colName = columns.map((col) => col.name)
        const colId = columns.map((col) => col.id)
        try {
            const {data} = await editCF({variables: {columnID: colId, columnName: colName, boardID: theOne.id}})
            const colIds = data.editColumn.colIds
            dispatch(editBoard({id: theOne.id, name, columns, colIds}))
        } catch (error) {
            console.log(error);
        } finally {
            resetForm()
        }
    }
    const handleAddNewBoard = async () => {
        try {
            const {data} = await addNB({
                variables: {
                    boardName: name, boardColumnsId: columns.map((item) => item.name)
                }
            });

            const {boardId, columnIds} = data.addBoard;
            if (boardId) {
                dispatch(addNewBoard({name, columns, boardId, columnIds}))
            }
        } catch (error) {
            console.error("Failed to add board", error);
        } finally {
            resetForm()
        }
    }
    const unShow = (e: React.MouseEvent) => {
        if (formRef.current && !formRef.current.contains(e.target as Node)) {
            setBoardShow(false)
        }
    }
    useEffect(() => {
        if (close) {
            setBoardShow(false)
        }
    }, [close])

    return (
        <div onClick={unShow} className='modalOverlay'>
            <form onSubmit={handleSubmit} ref={formRef} className='newBoard'>
                <h3>{operation === 'edit' ? operation : `${operation} new`} Board</h3>
                <div>
                    <label htmlFor='name'>name</label>
                    <input
                        style={{
                            border: usedBoard !== 'trial' ? '2px solid #EA5555' : '',
                        }}
                        onChange={(e) => setName(e.target.value)}
                        value={name}
                        type='text'
                        id='name'
                    />
                    {usedBoard !== 'trial' && (
                        <span className='dangerSpan'>{usedBoard}</span>
                    )}
                </div>
                <NewColumnInput columns={columns} setColumns={setColumns} used={used} setUsed={setUsed}
                                fromBoard={true}/>
                {columns.length < 6 &&
                    <AddNewColumn setColumns={setColumns} setUsed={setUsed}/>
                }
                <button type='submit'>{operation === 'edit' ? 'save changes' : `create new`} board</button>
            </form>
        </div>
    )
}

export default MangeBoard