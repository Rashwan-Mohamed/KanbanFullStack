import React, {useState, useRef, useEffect} from 'react'
import {editBoard} from '../../boardSlice'
import {UseAppContext} from '@/context'
import useCloseEscape from '../hooks/useCloseEscape.tsx'
import {useMutation} from '@apollo/client'
import {useAppDispatch} from "@/app/hooks";
import {useGetBoard} from "@/features/board/components/hooks/useGetBoard";
import NewItemInput from "@/features/board/components/Columns/NewItemInput.tsx";
import useCheckColumns from '../hooks/useCheckColumns'
import AddNewColumn from "@/features/board/components/Columns/AddNewColumn";
import useClickOutside from "@/features/board/components/hooks/useClickOutside.ts";
import {ModalFormWrapper} from "@/features/board/ModalFormComponent.tsx";
import {ADD_COLUMN} from "@/GraphQL Queries/ColumnQueries.ts";

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
    }, [close, setColumn])

    const resetForm = () => {
        setColumns([{name: '', id: -1}])
        setName('')
        setColumn(false)
        setSelected(name)
    }
    const [columnOkay, usedState] = useCheckColumns(columns)
    const handleSubmit = async (e: React.FormEvent) => {
        setUsed(() => usedState)
        e.preventDefault()
        if (columnOkay) {
            const colNames = columns.filter(item => item.id === -1).map(item => item.name);
            try {
                const {data} = await addCF({variables: {columnName: colNames, boardId: (theOne.id)}})
                if (!data || !data.addColumn) {
                    console.log('addColumn Mutation return Failed')
                    return
                }
                const colIds = data.addColumn.map(col => Number(col));
                dispatch(editBoard({
                    id: theOne.id, name, columns, colIds: colIds
                }))
            } catch (error) {
                console.error("Error adding columns:", error);
            } finally {
                resetForm()
            }
        }
    }


    useClickOutside({elements: [formRef], handler: () => setColumn(false), active: Boolean(name)});

    return (
        <>
            <ModalFormWrapper formRef={formRef} submitLabel={'save changes'} onSubmit={handleSubmit}
                              title={'Add New Column'}>
                <div className='inputWrapper'>
                    <label htmlFor='nameeee'>name</label>
                    <input className={'inputFormMain'} readOnly disabled={true} value={name} type='text' id='nameeee'/>
                </div>

                <NewItemInput items={columns} setItems={setColumns} used={used} setUsed={setUsed}/>
                {columns.length < 6 &&
                    <AddNewColumn onAddNewItem={() => setColumns((old) => [...old, {name: '', id: -1}])}
                                  setUsed={setUsed}
                                  type={'column'}/>}
            </ModalFormWrapper>
        </>
    )
}

export default NewColumn
