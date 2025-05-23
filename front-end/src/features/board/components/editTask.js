import { useState, useRef } from 'react'
import { useDispatch, useSelector } from 'react-redux'
import { editTask } from '../boardSlice'
import { UseAppContext } from '../../../context'
import CustomDrop from './customDrop'
import { useEffect } from 'react'
import { EDIT_TASK } from '../../../queries'
import { useMutation } from '@apollo/client'

function EditTask({ setEditTask, selectedTask }) {
  const { selected } = UseAppContext()
  const [editTaskFunc, { data, loading, error }] = useMutation(EDIT_TASK)
  const boards = useSelector((state) => state.boards)
  let theOne = boards.find(item => item.name === selected);
  theOne = theOne ? { ...theOne } : undefined; // Creates a copy if found
  const [current, setCurrent] = useState(() =>
    theOne?.columns?.flatMap(column => column.tasks).find(task => task.id === selectedTask.id) || null
  );
  const { id, subtasks } = current
  const [tasks, setTasks] = useState(subtasks)
  const form = useRef(null)

  const [entries, setEntries] = useState({
    title: current.title,
    desc: current.description,
  })
  const [usedBoard, setUsedBoard] = useState('trial')

  const [used, setUsed] = useState(() => subtasks.map(() => 'trial'));
  const [status, setStatus] = useState({
    status: current.status,
    statusId: current.statusId,
  })
  const dispatch = useDispatch()
  const unShow = (e) => {
    if (!form.current.contains(e.target)) {
      setEditTask(false)
    }
  }

  useEffect(() => {
    const task = theOne.columns.flatMap(column => column.tasks).find(task => task.id === id);
    if (task) setCurrent(task);
  }, [theOne, id]);


  const handleSubmit = async (e) => {
    e.preventDefault()
    let proceed = true
    let repeatedBoard = false

    if (!entries.title) {
      proceed = false
      setUsedBoard('required')
    }

    let selStatus = theOne.columns.find((col) => col.name === status.status)
    selStatus.tasks.forEach((bord) => {
      if (bord.title === entries.title && id !== bord.id) {
        proceed = false
        repeatedBoard = true
        setUsedBoard('used')
      }
    })

    if (entries.title && usedBoard !== 'trial' && !repeatedBoard) {
      setUsedBoard('trial')
    }
    let tasksTitle = [];
    for (let i = 0; i < tasks.length; i++) {
      let required = false
      if (!tasks[i].title) {
        proceed = false
        required = true
        setUsed((old) => {
          let useds = [...old]
          useds[i] = 'required'
          return useds
        })
      }

      if (tasksTitle.includes(tasks[i].title)) {
        proceed = false
        required = true
        setUsed((old) => {
          let useds = [...old]
          useds[i] = 'used'
          return useds
        })
      }


      if (!required && used[i] !== 'trial') {
        setUsed((old) => {
          let useds = [...old]
          useds[i] = 'trial'
          return useds
        })
      }
      tasksTitle.push(tasks[i].title)
    }
    /**
     *     title: String!
    description: String!
    status: String!
    statusId: ID!
    subtasks: [subtask!]!
    taskId:ID
     */
    //newSubIds
    if (proceed) {

      let it = {
        title: entries.title,
        description: entries.desc ?? '',
        status: status.status,
        statusId: status.statusId,
        taskId: id,
        subtasks: tasks
      }
      try {
        const { data } = await editTaskFunc({ variables: { inputTask: it } })
        let newSubIds = data.editTask.newSubIds
        console.log(newSubIds, 'Resho');
        dispatch(
          editTask({
            prevStatus: current.status,
            id,
            selected,
            ...status,
            title: entries.title,
            description: entries.desc ?? ''
            , tasks, newSubIds
          })
        )
      } catch (error) {
        console.log(error);
      }

      setTasks([{ name: '' }])
      setEntries({ title: '', desc: '' })
      setEditTask(false)
    }
  }


  return (
    <div onClick={unShow} className='modalOverlay'>
      <form onSubmit={handleSubmit} ref={form} className='newBoard'>
        <h3>Edit Task</h3>
        <div>
          <label htmlFor='title'>title</label>
          <input
            style={{
              border: usedBoard !== 'trial' ? '2px solid #EA5555' : '',
            }}
            onChange={(e) =>
              setEntries((old) => {
                return { ...old, title: e.target.value }
              })
            }
            value={entries.title}
            type='text'
            id='title'
          />
          {usedBoard !== 'trial' && (
            <span className='dangerSpan'>{usedBoard}</span>
          )}
        </div>
        <div>
          <label htmlFor='Description'>Description</label>
          <textarea
            onChange={(e) =>
              setEntries((old) => {
                return { ...old, desc: e.target.value }
              })
            }
            value={entries.desc}
            type='text'
            id='Description'
          />
        </div>
        <div className='subtasksContainer'>
          <label htmlFor='Subtasks'>Subtasks</label>
          {tasks.map((item, term) => {
            return (
              <div key={term}>
                <label className='spanerContainer'>
                  {' '}
                  <input
                    style={{
                      border: used[term] !== 'trial' ? '2px solid #EA5555' : '',
                    }}
                    onChange={(e) => {
                      setTasks((old) => {
                        let newCol = old.map((item) => {
                          return { ...item }
                        })
                        newCol.forEach((rero, ind) => {
                          if (ind === term) {
                            rero.title = e.target.value
                          }
                        })
                        return newCol
                      })
                    }}
                    value={item.title}
                    type='text'
                    id='Columns'
                  />
                  {used[term] !== 'trial' && (
                    <span className='dangerSpan'>{used[term]}</span>
                  )}
                </label>

                {term !== 0 && (
                  <span
                    onClick={() => {
                      setTasks(() => {
                        return tasks.filter((cul, ind) => ind !== term)
                      })
                      setUsed((sero) => {
                        return used.filter((cul, ind) => ind !== term)
                      })
                    }}
                    className='deleteColIn'
                  >
                    <svg
                      width='15'
                      height='15'
                      xmlns='http://www.w3.org/2000/svg'
                    >
                      <g fill='#828FA3' fillRule='evenodd'>
                        <path d='m12.728 0 2.122 2.122L2.122 14.85 0 12.728z' />
                        <path d='M0 2.122 2.122 0 14.85 12.728l-2.122 2.122z' />
                      </g>
                    </svg>
                  </span>
                )}
              </div>
            )
          })}
        </div>

        {tasks.length < 6 && (
          <button
            onClick={(e) => {
              e.preventDefault()
              if (tasks.length <= 5) {
                setTasks(() => {
                  return [...tasks, { title: '', isCompleted: false }]
                })
                setUsed((old) => {
                  return [...old, 'trial']
                })
              }
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
          edit task
        </button>
      </form>
    </div>
  )
}

export default EditTask
