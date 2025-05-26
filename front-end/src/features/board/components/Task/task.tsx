import React, {useRef, useState, useEffect} from 'react'
import {editTask, deleteTask} from '../../boardSlice'
import {UseAppContext} from '@/context'
import useCloseEscape from '../useCloseEscape'
import CustomDrop from '../customDrop'
import {useMutation} from '@apollo/client'
import {CHANGE_SUBTASK, DELETE_TASK, EDIT_TASK_STATUS} from '@/queries'
import Assure from '../Assure'
import type {task} from "../../boardSlice";
import {useAppDispatch, useAppSelector} from "@/app/hooks";
import ControlButtons from "@/features/board/components/Task/ControlButtons";


interface propTypes {
    selectedTask: task
    setTaskShow: React.Dispatch<React.SetStateAction<boolean>>
    setEditTask: React.Dispatch<React.SetStateAction<boolean>>
}

function Task({selectedTask, setTaskShow, setEditTask}: propTypes) {
    const {selected, dark} = UseAppContext()
    const boards = useAppSelector((state) => state.boards)
    let theOne = boards.find((item) => (item.name === selected))
    if (!theOne) return null
    const [deleteTF] = useMutation(DELETE_TASK)
    const [editTSF] = useMutation(EDIT_TASK_STATUS)
    const [changeSTF] = useMutation(CHANGE_SUBTASK)
    const fromRef = useRef<HTMLFormElement>(null)
    const doper = useRef<HTMLButtonElement>(null)
    const drop = useRef<HTMLButtonElement>(null)
    const [toggle, setToggle] = useState(false)
    const [status, setStatus] = useState({
        status: selectedTask.status,
        statusId: selectedTask.statusId,
    })
    const [prevStatus, setPrevStatus] = useState(selectedTask.status)
    const [subtasks, setSubTasks] = useState(selectedTask.subtasks)
    const [sure, setSure] = useState(false)
    const {id, title, description} = selectedTask
    const dispatch = useAppDispatch()
    let len = subtasks.length
    const com = subtasks.filter(item => item.isCompleted).length;
    let close = useCloseEscape()

    useEffect(() => {
        if (close) {
            setTaskShow(false)
        }
    }, [close])

    const handleDelete = () => {
        // to delete a task, we need {selected, status,id}
        deleteTF({variables: {taskID: id}})
        dispatch(deleteTask({selected, status: status.status, id}))
        setTaskShow(false)
    }
    const unShow = (e: React.MouseEvent) => {
        if (fromRef.current && !fromRef.current.contains(e.target)) {
            setTaskShow(false)
        }
    }

    const checkIt = (e) => {
        if (toggle) {
            if (
                !drop.current.contains(e.target) &&
                !doper.current.contains(e.target)
            ) {
                setToggle(false)
            }
        }
    }
    useEffect(() => {
        window.addEventListener('click', checkIt)
        return () => window.removeEventListener('click', checkIt)
    }, [toggle])

    useEffect(() => {
        callDispatch()
        setPrevStatus(status.status)
    }, [subtasks, status])


    // this sends graphQL query to change taskStatus only when it changes
    useEffect(() => {
        editTSF({variables: {taskId: id, statusID: status.statusId}})
    }, [status])
    //      to dispatch and action, edit task and delete task
    //      edit board, when edit board is initiated, give it the specific board to edit, then give it an order to appear, then disappear
    //      thus edit board should be in board, yes
    //      prevStatus

    const callDispatch = () => {
        dispatch(
            editTask({
                prevStatus,
                id,
                selected,
                ...status,
                title,
                description,
                tasks: subtasks,
            })
        )
    }

    return (
        <>
            {sure && (
                <Assure setSure={setSure} handleSure={handleDelete} title={title.toString()}></Assure>
            )}
            <div
                style={{display: sure ? 'none' : ''}}
                onClick={unShow}
                className='modalOverlay'
            >
                <section ref={fromRef} className='selectedTask'>
                    <ControlButtons setEditTask={setEditTask} setTaskShow={setTaskShow} setSure={setSure}
                                    toggle={toggle} setToggle={setToggle} title={title.toString()} dark={dark}
                                    doper={doper}
                                    drop={drop}/>
                    <p> {description ?? 'No description'}</p>
                    <ul>
                        <h5>
                            Subtasks ({com || 0} of {len})
                        </h5>
                        {subtasks.map((sub, index) => {
                            let {title, isCompleted, id} = sub
                            return (
                                <li
                                    onClick={() => {
                                        setSubTasks((old) => {
                                            let newRr = old.map((item) => {
                                                return {...item}
                                            })
                                            newRr[index].isCompleted = !newRr[index].isCompleted

                                            return newRr
                                        })
                                        // here I will dispatch that to GQL
                                        changeSTF({variables: {SubTaskID: id}})
                                    }}
                                    key={id ?? index}
                                >
                                    <label htmlFor='checkTask'>
                                        <input
                                            type='checkbox'
                                            checked={isCompleted}
                                            onChange={() => {
                                            }}
                                            name='checkTask'
                                            id='checkTask'
                                        />
                                    </label>
                                    <span className={isCompleted ? 'completedSubT' : ''}>
                    {title}
                  </span>
                                </li>
                            )
                        })}
                    </ul>
                    <CustomDrop
                        arrcat={theOne.columns}
                        varia={status}
                        setVaria={setStatus}
                        label={'Current Status'}
                    />
                </section>
            </div>
        </>
    )
}

export default Task
