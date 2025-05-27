import React, {useState, useRef, useEffect} from 'react'
import {editBoard} from '../../boardSlice'
import {UseAppContext} from '@/context'
import useCloseEscape from '../hooks/useCloseEscape.tsx'
import {ADD_COLUMN} from '@/queries'
import {useMutation} from '@apollo/client'
import {useAppDispatch} from "@/app/hooks";
import {useGetBoard} from "@/features/board/components/hooks/useGetBoard";
import NewItemInput from "@/features/board/components/Columns/NewItemInput.tsx";
import useCheckColumns from '../hooks/useCheckColumns'
import AddNewColumn from "@/features/board/components/Columns/AddNewColumn";
import useClickOutside from "@/features/board/components/hooks/useClickOutside.ts";

function NewColumn({setColumn}: { setColumn: React.Dispatch<React.SetStateAction<boolean>> }) {
    const {setSelected} = UseAppContext()
    const [addCF] = useMutation(ADD_COLUMN)
    const theOne = useGetBoard()
    const [name, setName] = useState(theOne.name)
    const [columns, setColumns] = useState(theOne.columns)
    const [used, setUsed] = useState<string[]>(() => theOne.columns.map(() => "valid"));
    const dispatch = useAppDispatch()
    const close = useCloseEscape()
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
    const [columnOkay, usedState] = useCheckColumns(columns)
    const handleSubmit = async (e: React.FormEvent) => {
        setUsed(() => usedState)
        e.preventDefault()
        if (columnOkay) {
            const colNames = columns.filter(item => !item.id).map(item => item.name);
            try {
                const {data} = await addCF({variables: {columnName: colNames, boardId: theOne.id}})
                const colIds = data.addColumn;
                dispatch(editBoard({id: theOne.id, name, columns, colIds}))
            } catch (error) {
                console.error("Error adding columns:", error);
            } finally {
                resetForm()
            }
        }
    }


    useClickOutside({elements: [formRef], handler: () => setColumn(false), active: Boolean(name)});
    return (
        <div className='modalOverlay'>
            <form onSubmit={handleSubmit} ref={formRef} className='newBoard'>
                <h3>Add New Column</h3>
                <div>
                    <label htmlFor='nameeee'>name</label>
                    <input readOnly value={name} type='text' id='nameeee'/>
                </div>
                <NewItemInput items={columns} setItems={setColumns} used={used} setUsed={setUsed}/>
                {columns.length < 6 &&
                    <AddNewColumn onAddNewItem={() => setColumns((old) => [...old, {name: ''}])} setUsed={setUsed}
                                  type={'column'}/>}
                <button type='submit'>save changes</button>
            </form>
        </div>
    )
}

export default NewColumn
