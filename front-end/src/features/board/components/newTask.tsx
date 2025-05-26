// import React, {useState, useRef, useEffect} from 'react'
// import {useDispatch, useSelector} from 'react-redux'
// import {addTask} from '../boardSlice'
// import useCloseEscape from './useCloseEscape'
// import {UseAppContext} from '@/context'
// import CustomDrop from './customDrop'
// import {ADD_TASK} from '@/queries'
// import {useMutation} from '@apollo/client'
// import {useAppSelector} from "@/app/hooks";
// import ChangeTitle from "@/features/board/components/EditTask/ChangeTitle";
// import SubTaskContainer from "@/features/board/components/EditTask/SubTaskContainer";
//
// interface propTypes {
//     setTaskShow: React.Dispatch<React.SetStateAction<boolean>>
// }
//
// function NewTask({setTaskShow}: propTypes) {
//     const {selected} = UseAppContext()
//     const [addTF] = useMutation(ADD_TASK)
//     const boards = useAppSelector((state) => state.boards);
//     let theOne = boards.find((item) => item.name === selected)
//     if (!theOne) return null
//     const formRef = useRef<HTMLFormElement>(null)
//     const [tasks, setTasks] = useState([{title: '', isCompleted: false}])
//     const [entries, setEntries] = useState({title: '', desc: ''})
//     const [usedBoard, setUsedBoard] = useState('trial')
//     const [used, setUsed] = useState(['trial'])
//     const [status, setStatus] = useState({
//         status: theOne.columns[0].name,
//         statusId: theOne.columns[0].id,
//     })
//     let close = useCloseEscape()
//
//     useEffect(() => {
//         if (close) {
//             setTaskShow(false)
//         }
//     }, [close])
//     const unShow = (e: React.MouseEvent) => {
//         if (formRef.current && !formRef.current.contains(e.target as Node)) {
//             setTaskShow(false)
//         }
//     }
//     const dispatch = useDispatch()
//
//     const handleSubmit = async (e: React.SyntheticEvent) => {
//         e.preventDefault()
//         let proceed = true
//         let repeatedBoard = false
//
//         if (!entries.title) {
//             proceed = false
//             setUsedBoard('required')
//         }
//
//         let selStatus = theOne.columns.find((col) => col.name === status.status)
//         selStatus.tasks.forEach((bord) => {
//             if (bord.title === entries.title) {
//                 proceed = false
//                 repeatedBoard = true
//                 setUsedBoard('used')
//             }
//         })
//
//         if (entries.title && usedBoard !== 'trial' && !repeatedBoard) {
//             setUsedBoard('trial')
//         }
//         let tasksTitle = [];
//
//         for (let i = 0; i < tasks.length; i++) {
//             let required = false
//             if (!tasks[i].title) {
//                 proceed = false
//                 required = true
//                 setUsed((old) => {
//                     let useds = [...old]
//                     useds[i] = 'required'
//                     return useds
//                 })
//             }
//
//             if (tasksTitle.includes(tasks[i].title)) {
//                 proceed = false
//                 required = true
//                 setUsed((old) => {
//                     let useds = [...old]
//                     useds[i] = 'used'
//                     return useds
//                 })
//             }
//
//             if (!required && used[i] !== 'trial') {
//                 setUsed((old) => {
//                     let useds = [...old]
//                     useds[i] = 'trial'
//                     return useds
//                 })
//             }
//             tasksTitle.push(tasks[i].title)
//
//         }
//
//         if (proceed) {
//             let quriedTask = {
//                 title: entries.title,
//                 description: entries.desc,
//                 status: status.status,
//                 statusId: status.statusId,
//                 subtasks: tasks
//             }
//             try {
//                 const {data} = await addTF({variables: {inputTask: quriedTask}})
//                 const {subTasksIds, taskId} = data.addTask;
//                 if (taskId) {
//                     dispatch(addTask({
//                         selected, ...status,
//                         title: entries.title,
//                         description: entries.desc,
//                         tasks,
//                         subTasksIds,
//                         taskId
//                     }))
//                 }
//             } catch (error) {
//                 console.log('failed to add task', error);
//             } finally {
//                 setTasks([{name: ''}])
//                 setEntries({title: '', desc: ''})
//                 setTaskShow(false)
//             }
//         }
//     }
//     return (
//         <div onClick={unShow} className='modalOverlay'>
//             <form onSubmit={handleSubmit} ref={formRef} className='newBoard'>
//                 <h3>Add New Task</h3>
//                 <ChangeTitle value={entries.title.toString()} usedBoard={usedBoard} setEntries={setEntries}/>
//                 <div>
//                     <label htmlFor='Description'>Description</label>
//                     <textarea
//                         onChange={(e) =>
//                             setEntries((old) => {
//                                 return {...old, desc: e.target.value}
//                             })
//                         }
//                         value={entries.desc}
//                         id='Description'
//                     />
//                 </div>
//                 <SubTaskContainer setSubTasks={setTasks} subTasks={tasks} used={used} setUsed={setUsed}/>
//
//                 {tasks.length < 6 && (
//                     <button
//                         onClick={(e) => {
//                             e.preventDefault()
//                             if (tasks.length <= 5) {
//                                 setTasks(() => {
//                                     return [...tasks, {title: '', isCompleted: false}]
//                                 })
//                                 setUsed((old) => {
//                                     return [...old, 'trial']
//                                 })
//                             }
//                         }}
//                     >
//                         +add new Subtask
//                     </button>
//                 )}
//                 <CustomDrop
//                     varia={status}
//                     setVaria={setStatus}
//                     arrcat={theOne.columns}
//                     label={'status'}
//                 />
//                 <button className='submitTask' type='submit'>
//                     create task
//                 </button>
//             </form>
//         </div>
//     )
// }
//
// export default NewTask
