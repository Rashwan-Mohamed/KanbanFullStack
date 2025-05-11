import { createSlice } from '@reduxjs/toolkit'
import { nanoid } from 'nanoid'

// const initialState = [...data.boards]
const initialState = [{}]

// const { loading, error, data } = useQuery(GET_BOARDS);
export const boardSlice = createSlice({
    name: 'boards',
    initialState,
    reducers: {
        setBoards: (_, action) => {
            return action.payload; // ← return the full new array
        },
        addNewBoard: {
            reducer: (state, action) => {
                state.push(action.payload)
            },
            prepare: ({ name, columns, boardId, columnIds }) => {
                let newColumns = []
                columns.forEach((col, index) => {
                    let mutObj = {}
                    mutObj.id = columnIds[index]
                    mutObj.name = col.name
                    mutObj.tasks = []
                    newColumns.push(mutObj)
                })
                return {
                    payload: {
                        id: boardId,
                        name,
                        columns: newColumns,
                    },
                }
            },
        },
        editBoard: {
            reducer: (state, action) => {
                const { id } = action.payload
                let inded
                state.forEach((item, ind) => {
                    if (item.id === id) {
                        inded = ind
                    }
                })

                return [
                    ...state.slice(0, inded),
                    action.payload,
                    ...state.slice(inded + 1),
                ]
            },
            prepare: ({ id, name, columns, colIds }) => {
                let newColumns = []
                let nci = 0;
                columns.forEach((col) => {
                    let mutObj = {}
                    if (col.id === undefined) {
                        col.id = colIds[nci]
                        nci++;
                    }
                    if (!col.tasks) {
                        col.tasks = []
                    }
                    mutObj.id = col.id
                    mutObj.name = col.name
                    mutObj.tasks = []
                    col.tasks.forEach((cert) => {
                        mutObj.tasks.push({ ...cert })
                    })

                    if (mutObj.tasks.length > 0) {
                        mutObj.tasks.forEach((item) => {
                            item.status = col.name
                        })
                    }
                    newColumns.push(mutObj)
                })
                return {
                    payload: {
                        id,
                        name,
                        columns: newColumns,
                    },
                }
            },
        },
        deleteBoard: (state, action) => {
            const { name } = action.payload

            return (state = state.filter((item) => item.name !== name))
        },
        addTask: {
            reducer: (state, action) => {
                const { selected, status, task } = action.payload
                let one = state.find((item) => item.name === selected)

                one.columns.forEach((item) => {
                    if (item.name === status) {
                        item.tasks.push(task)
                    }
                })

                return state
            },
            prepare: ({ selected, status, statusId, title, description, tasks, subTasksIds, taskId }) => {
                tasks = tasks.map((sub, index) => ({ ...sub, id: subTasksIds[index] }));
                return {
                    payload: {
                        selected,
                        status,
                        task: {
                            id: taskId,
                            title,
                            description,
                            status,
                            statusId,
                            subtasks: tasks,

                        },
                    },
                }
            },
        },
        editTask: {
            reducer: (state, action) => {
                //tasks
                const { prevStatus, id, selected, status, task } = action.payload
                let one = state.find((item) => item.name === selected)
                let indeed
                let column = one.columns.find((item) => item.name === prevStatus)
                column.tasks.forEach((item, index) => {
                    if (item.id === id) {
                        indeed = index
                    }
                })

                if (prevStatus === status) {
                    column.tasks = [
                        ...column.tasks.slice(0, indeed),
                        task,
                        ...column.tasks.slice(indeed + 1),
                    ]
                } else {
                    let Newcolumn = one.columns.find((item) => item.name === status)
                    column.tasks = [
                        ...column.tasks.slice(0, indeed),
                        ...column.tasks.slice(indeed + 1),
                    ]
                    Newcolumn.tasks.push(task)
                }
                return state
            },
            prepare: ({
                prevStatus,
                id,
                selected,
                status,
                statusId,
                title,
                description,
                tasks, newSubIds
            }) => {
                tasks = tasks.map(sub => sub.id ? sub : { ...sub, id: newSubIds.shift() });
                return {
                    payload: {
                        prevStatus,
                        id,
                        selected,
                        status,
                        task: {
                            id,
                            title,
                            description,
                            status,
                            statusId,
                            subtasks: tasks,
                        },
                    },
                }
            },
        },
        deleteTask: (state, action) => {
            const { selected, status, id } = action.payload
            let one = state.find((item) => item.name === selected)
            let indeed
            let column
            column = one.columns.find((item) => item.name === status)

            column.tasks.forEach((item, index) => {
                if (item.id === id) {
                    indeed = index
                }
            })
            column.tasks = [
                ...column.tasks.slice(0, indeed),
                ...column.tasks.slice(indeed + 1),
            ]
            return state
        }
    },
})

export const {
    addNewBoard,
    editBoard,
    deleteBoard,
    addTask,
    editTask,
    deleteTask,
    setBoards
} = boardSlice.actions

export default boardSlice.reducer
