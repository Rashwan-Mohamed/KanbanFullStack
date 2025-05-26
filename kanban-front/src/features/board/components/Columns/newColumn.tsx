import React, {useState, useRef, useEffect} from 'react'
import {editBoard} from '../../boardSlice'
import {UseAppContext} from '@/context'
import useCloseEscape from '../useCloseEscape'
import {ADD_COLUMN} from '@/queries'
import {useMutation} from '@apollo/client'
import {useAppDispatch} from "@/app/hooks";
import {useGetBoard} from "@/features/board/components/hooks/useGetBoard";
import NewColumnInput from "@/features/board/components/Columns/NewColumnInput";
import useCheckColumns from '../hooks/useCheckColumns'
import AddNewColumn from "@/features/board/components/Columns/AddNewColumn";

function NewColumn({setColumn}: { setColumn: React.Dispatch<React.SetStateAction<boolean>> }) {
    const {setSelected} = UseAppContext()
    const [addCF] = useMutation(ADD_COLUMN)
    let theOne = useGetBoard()
    const [name, setName] = useState(theOne.name)
    const [columns, setColumns] = useState(theOne.columns)
    const [used, setUsed] = useState<string[]>(() => theOne.columns.map(() => "trial"));
    const dispatch = useAppDispatch()
    let close = useCloseEscape()
    const formRef = useRef<HTMLFormElement>(null)

    useEffect(() => {
        if (close) {
            setColumn(false)
        }
    }, [close])

    const resetForm = () => {
        setColumns([{name: ''}])
        setName('')
        setColumn(false)
        setSelected(name)
    }
    const handleSubmit = async (e: React.FormEvent) => {
        e.preventDefault()
        let [columnOkay, usedState] = useCheckColumns(columns)
        setUsed(usedState)
        if (columnOkay) {
            const colNames = columns.filter(item => !item.id).map(item => item.name);
            try {
                const {data} = await addCF({variables: {columnName: colNames, boardId: theOne.id}})
                let colIds = data.addColumn;
                dispatch(editBoard({id: theOne.id, name, columns, colIds}))
            } catch (error) {
                console.error("Error adding columns:", error);
            } finally {
                resetForm()
            }
        }
    }

    const unShow = (e: React.MouseEvent) => {
        if (formRef.current && !formRef.current.contains(e.target as Node)) {
            setColumn(false)
        }
    }

    return (
        <div onClick={unShow} className='modalOverlay'>
            <form onSubmit={handleSubmit} ref={formRef} className='newBoard'>
                <h3>Add New Column</h3>
                <div>
                    <label htmlFor='nameeee'>name</label>
                    <input readOnly value={name} type='text' id='nameeee'/>
                </div>
                <NewColumnInput columns={columns} setColumns={setColumns} used={used} setUsed={setUsed}/>
                {columns.length < 6 && <AddNewColumn columns={columns} setColumns={setColumns} setUsed={setUsed}/>}
                <button type='submit'>save changes</button>
            </form>
        </div>
    )
}

export default NewColumn
