import React, {useState, useRef, useEffect} from 'react'
import {addNewBoard, editBoard} from './boardSlice'
import {UseAppContext} from '@/context'
import useCloseEscape from './components/hooks/useCloseEscape.tsx'
import {useMutation} from '@apollo/client'
import {ADD_BOARD, EDIT_BOARD, EDIT_COLUMN} from '@/queries'
import {useAppDispatch, useAppSelector} from '@/app/hooks'
import NewItemInput from './components/Columns/NewItemInput.tsx'
import AddNewColumn from "@/features/board/components/Columns/AddNewColumn";
import {useGetBoard} from "@/features/board/components/hooks/useGetBoard";
import type {column} from "./boardSlice";
import useCheckColumns from "@/features/board/components/hooks/useCheckColumns.ts";
import useClickOutside from "@/features/board/components/hooks/useClickOutside.ts";
import ChangeTitle from "@/features/board/components/MangeTask/ChangeTitle.tsx";
import {ModalFormWrapper} from "@/features/board/ModalFormComponent.tsx";

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
    const [used, setUsed] = useState(columns.map(() => "valid"))
    const [usedBoard, setUsedBoard] = useState('valid')
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
        if (boardOkay && usedBoard !== 'valid') {
            setUsedBoard('valid')
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

    useEffect(() => {
        if (close) {
            setBoardShow(false)
        }
    }, [close])

    useClickOutside({
        elements: [formRef],
        handler: () => setBoardShow(false),
        active: true
    })
    ;

    return (
        <>
            <ModalFormWrapper formRef={formRef}
                              title={`${operation === 'edit' ? operation : `${operation} new`} Board`}
                              onSubmit={handleSubmit}
                              submitLabel={`${operation === 'edit' ? 'save changes' : `create new`} Board`}
            >
                <ChangeTitle value={name} usedBoard={usedBoard}
                             onChange={(val) => setName(val)}
                />
                <NewItemInput items={columns} setItems={setColumns} used={used} setUsed={setUsed}
                              fromBoard={true}/>
                {columns.length < 6 &&
                    <AddNewColumn onAddNewItem={() => setColumns((old) => [...old, {name: ''}])} setUsed={setUsed}
                                  type={'column'}/>
                }
            </ModalFormWrapper>

        </>
    )
}

export default MangeBoard