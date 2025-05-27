import React from 'react'
import CustomDrop from '../customDrop'
import ChangeTitle from "@/features/board/components/MangeTask/ChangeTitle";
import SubTaskContainer from "@/features/board/components/MangeTask/SubTaskContainer";
import type {task} from "../../boardSlice";
import {useEditTask} from "@/features/board/components/MangeTask/useEditTask";

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
        handleOutsideClick,
        handleSubmit, theOne
    } = editTaskState;


    return (
        <div onClick={handleOutsideClick} className='modalOverlay'>
            <form onSubmit={handleSubmit} ref={formRef} className='newBoard'>
                <h3>{selectedTask ? 'Edit' : 'add new'} Task</h3>
                <ChangeTitle value={entries.title.toString()} usedBoard={usedBoard} setEntries={setEntries}/>
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
                <SubTaskContainer setSubTasks={setSubTasks} subTasks={subTasks} used={used} setUsed={setUsed}/>
                {subTasks.length < 6 && (
                    <button
                        onClick={(e) => {
                            e.preventDefault()
                            setSubTasks((prevTasks) => [...prevTasks, {title: '', isCompleted: false}]);
                            setUsed((old) => {
                                return [...old, 'valid']
                            })
                        }}
                    >
                        +add new Subtask
                    </button>
                )}
                <CustomDrop
                    varia={status}
                    setVaria={setStatus}
                    arrcat={theOne.columns}
                    label={'status'}
                />
                <button className='submitTask' type='submit'>
                    {selectedTask ? 'edit' : 'add'} task
                </button>
            </form>
        </div>
    )
}

export default MangeTask
