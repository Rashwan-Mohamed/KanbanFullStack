import React, {useRef, useState, useEffect} from 'react'
import {editTask, deleteTask} from '../../boardSlice'
import {UseAppContext} from '@/context'
import useCloseEscape from '../hooks/useCloseEscape.tsx'
import CustomDrop from '../customDrop'
import {useMutation} from '@apollo/client'
import {DELETE_TASK} from '@/queries'
import type {task} from "../../boardSlice";
import {useAppDispatch} from "@/app/hooks";
import ControlButtons from "@/features/board/components/Task/ControlButtons";
import useClickOutside from "@/features/board/components/hooks/useClickOutside";
import ViewSubTasks from "@/features/board/components/Task/ViewSubTasks";
import useTaskStatusUpdater from "@/features/board/components/Task/useTaskStatusUpdater";
import {useGetBoard} from "@/features/board/components/hooks/useGetBoard";
import AssureDelete from "@/features/board/components/AssureDelete.tsx";
import type {DeleteTaskMutation, DeleteTaskMutationVariables} from "@/__generated__/types.ts";


interface propTypes {
    selectedTask: task
    setTaskShow: React.Dispatch<React.SetStateAction<boolean>>
    setEditTask: React.Dispatch<React.SetStateAction<boolean>>
}

function Task({selectedTask, setTaskShow, setEditTask}: propTypes) {
    const [deleteTF] = useMutation<DeleteTaskMutation, DeleteTaskMutationVariables>(DELETE_TASK)
    const {selected, dark} = UseAppContext()
    const theOne = useGetBoard()
    const formRef = useRef<HTMLFormElement>(null)
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
    const taskIndex = theOne.columns?.find((col) => col.id === status.statusId)?.tasks?.findIndex((task) => task.id === id) ?? 1;
    const close = useCloseEscape()

    useEffect(() => {
        if (close) {
            setTaskShow(false)
        }
    }, [close])

    const handleDelete = async () => {
        // to delete a task, we need {selected, status, id}
        await deleteTF({variables: {taskID: (id)}})
        dispatch(deleteTask({selected, status: status.status.toString(), id}))
        setTaskShow(false)
    }

    useClickOutside({
        elements: [drop, doper], handler: () => setToggle(false)
        ,
        active: toggle
    })
    useEffect(() => {
        callDispatch()
        setPrevStatus(status.status)
    }, [subtasks, status])


    // this sends graphQL query to change taskStatus only when it changes
    useTaskStatusUpdater({
        status: status.status.toString(),
        prevStatus: prevStatus.toString(),
        id,
        statusId: status.statusId,
        order: taskIndex
    });

    //      to dispatch and action, edit task and delete task
    //      edit board, when edit board is initiated, give it the specific board to edit, then give it an order to appear, then disappear
    //      thus edit board should be in board, yes
    //      prevStatus

    const callDispatch = () => {
        dispatch(
            editTask({
                prevStatus: prevStatus.toString(),
                id,
                selected,
                status: status.status.toString(),
                statusId: status.statusId,
                title: title.toString(),
                description: description.toString(),
                tasks: subtasks, newSubIds: subtasks.map(t => t.id), order: selectedTask.order
            })
        )
    }
    useClickOutside({
        active: true, handler: () => setTaskShow(false), elements:
            [formRef]
    })
    return (
        <>

            {sure && <AssureDelete selected={title.toString()} setSure={setSure}
                                   handleDelete={handleDelete} type={'task'}/>}
            <div
                style={{display: sure ? 'none' : ''}}
                className='modalOverlay'
            >
                <section ref={formRef} className='selectedTask'>
                    <ControlButtons setEditTask={setEditTask} setTaskShow={setTaskShow} setSure={setSure}
                                    toggle={toggle} setToggle={setToggle} title={title.toString()} dark={dark}
                                    doper={doper}
                                    drop={drop}/>
                    <p> {description ?? 'No description'}</p>
                    <ViewSubTasks subtasks={subtasks} setSubTasks={setSubTasks}/>
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
