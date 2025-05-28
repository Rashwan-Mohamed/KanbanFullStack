import React from 'react'
import CustomDrop from '../customDrop'
import ChangeTitle from "@/features/board/components/MangeTask/ChangeTitle";
import type {task} from "../../boardSlice";
import {useEditTask} from "@/features/board/components/MangeTask/useEditTask";
import NewItemInput from "@/features/board/components/Columns/NewItemInput.tsx";
import AddNewColumn from "@/features/board/components/Columns/AddNewColumn.tsx";
import {ModalFormWrapper} from "@/features/board/ModalFormComponent.tsx";

interface propTypes {
    selectedTask: task | null,
    setEditTask: React.Dispatch<React.SetStateAction<boolean>>,
}

function MangeTask({setEditTask, selectedTask}: propTypes) {

    const editTaskState = useEditTask(setEditTask, selectedTask);
    if (!editTaskState) return null
    const {
        formRef,
        entries,
        setEntries,
        subTasks,
        setSubTasks,
        used,
        setUsed,
        status,
        setStatus,
        usedBoard,
        handleSubmit, theOne
    } = editTaskState;

    const title = `${selectedTask ? 'Edit' : 'add new'} Task`
    const submitLabel = `${selectedTask ? 'edit' : 'add'} task`
    return (
        <>
            <ModalFormWrapper formRef={formRef}
                              title={title}
                              onSubmit={handleSubmit}
                              submitLabel={submitLabel}
            >
                <ChangeTitle value={entries.title.toString()} usedBoard={usedBoard}
                             onChange={(val) => setEntries((old) => ({...old, title: val}))}
                />
                <div>
                    <label htmlFor='Description'>Description</label>
                    <textarea
                        onChange={(e) =>
                            setEntries((old) => {
                                return {...old, desc: e.target.value}
                            })
                        }
                        value={entries.desc.toString()}
                        id='Description'
                    />
                </div>
                <NewItemInput items={subTasks} setItems={setSubTasks} used={used} setUsed={setUsed}/>
                {subTasks.length < 6 &&
                    <AddNewColumn
                        onAddNewItem={() => setSubTasks((prevTasks) => [...prevTasks, {
                            title: '',
                            isCompleted: false, id: -1
                        }])
                        } setUsed={setUsed} type={'subtask'}/>}
                <CustomDrop
                    varia={status}
                    setVaria={setStatus}
                    arrcat={theOne.columns}
                    label={'status'}
                />
            </ModalFormWrapper>
        </>

    )
}


export default MangeTask
