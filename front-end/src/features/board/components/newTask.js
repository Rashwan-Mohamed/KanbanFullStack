import { useState, useRef, useEffect } from 'react'
import { useDispatch, useSelector } from 'react-redux'
import { addTask } from '../boardSlice'
import useCloseEscape from './useCloseEscape'
import { UseAppContext } from '../../../context'
import CustomDrop from './customDrop'
import { ADD_TASK } from '../../../queries'
import { useMutation } from '@apollo/client'
function NewTask({ setTaskShow }) {
  const { selected } = UseAppContext()
  const boards = useSelector((state) => state.boards)
  let theOne = boards.find((item) => item.name === selected)
  const [addTF, { data, loading, error }] = useMutation(ADD_TASK)
  const form = useRef(null)
  const [tasks, setTasks] = useState([{ title: '', isCompleted: false }])
  const [entries, setEntries] = useState({ title: '', desc: '' })
  const [usedBoard, setUsedBoard] = useState('trial')
  const [used, setUsed] = useState(['trial'])
  const [status, setStatus] = useState({
    status: theOne.columns[0].name,
    statusId: theOne.columns[0].id,
  })
  let close = useCloseEscape()

  useEffect(() => {
    if (close) {
      setTaskShow(false)
    }
  }, [close])
  const unShow = (e) => {
    if (!form.current.contains(e.target)) {
      setTaskShow(false)
    }
  }
  const dispatch = useDispatch()

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
      if (bord.title === entries.title) {
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

    if (proceed) {
      let quriedTask = { title: entries.title, description: entries.desc, status: status.status, statusId: status.statusId, subtasks: tasks }
      try {
        const { data } = await addTF({ variables: { inputTask: quriedTask } })
        const { subTasksIds, taskId } = data.addTask;
        if (taskId) {
          dispatch(addTask({ selected, ...status, title: entries.title, description: entries.desc, tasks, subTasksIds, taskId }))
        }
      } catch (error) {
        console.log('failed to add task', error);
      }
      finally {
        setTasks([{ name: '' }])
        setEntries({ title: '', desc: '' })
        setTaskShow(false)
      }
    }
  }
  return (
    <div onClick={unShow} className='modalOverlay'>
      <form onSubmit={handleSubmit} ref={form} className='newBoard'>
        <h3>Add New Task</h3>
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
          create task
        </button>
      </form>
    </div>
  )
}

export default NewTask
