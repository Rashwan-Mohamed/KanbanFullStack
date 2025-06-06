import {createSlice, type PayloadAction} from "@reduxjs/toolkit";

const initialState: board[] = [];

export interface board {
    id: number;
    name: string;
    columns: column[] | [];
}

export interface column {
    id: number;
    name: string;
    tasks?: task[];
}

export interface task {
    id: number;
    title: string;
    description: string;
    status: string;
    statusId: number;
    subtasks: subtask[];
    order: number;
}

export interface subtask {
    id: number;
    title: string;
    isCompleted: boolean;
}

type setBoard = board[];

interface addNewBoardInterface {
    name: string;
    columns: column[];
    boardId: number;
    columnIds: number[];
}

type BoardPayload = {
    payload: board;
};

interface editBoardInterface {
    id: number;
    name: string;
    columns: column[];
    colIds: number[];
}

interface addTaskInterface {
    task: task;
    status: string;
    selected: string;
}

interface receiveTask {
    status: string;
    selected: string;
    statusId: number;
    title: string;
    description: string;
    tasks: subtask[];
    subTasksIds: number[];
    taskId: number;
}

interface EditTask {
    prevStatus: string;
    id: number;
    selected: string;
    status: string;
    task: task;
}

interface editTaskPrams {
    prevStatus: string;
    id: number;
    selected: string;
    status: string;
    statusId: number;
    title: string;
    description: string;
    tasks: subtask[];
    newSubIds: number[];
    order: number;
}

type deleteBoardInterface = { name: string };
type AddTaskPayload = {
    payload: addTaskInterface;
};
type EditTaskPayload = {
    payload: EditTask;
};
type deleteTaskInterface = { selected: string; status: string; id: number };
export const boardSlice = createSlice({
        name: "boards",
        initialState,
        reducers: {
            setBoards: (_, action: PayloadAction<setBoard>) => {
                return action.payload.map(board => ({
                    ...board,
                    columns: board.columns?.map(column => ({
                        ...column,
                        tasks: column.tasks ? [...column.tasks].sort((a, b) => a.order - b.order) : [],
                    })),
                })); // Return a new array with sorted tasks
            },
            addNewBoard: {
                reducer: (state, action: PayloadAction<board>) => {
                    state.push(action.payload);
                },
                prepare: ({
                              name,
                              columns,
                              boardId,
                              columnIds,
                          }: addNewBoardInterface): BoardPayload => {
                    const newColumns = columns.map((col, index) => ({
                        id: columnIds[index],
                        name: col.name,
                        tasks: [],
                    }));

                    return {
                        payload: {
                            id: boardId,
                            name,
                            columns: newColumns,
                        },
                    };
                },
            },
            editBoard: {
                reducer: (state, action: PayloadAction<board>) => {
                    const {id} = action.payload;

                    // Find the index of the board to update
                    const index = state.findIndex((item) => item.id === id);

                    // If index exists, update the state; otherwise, return original state
                    return index !== -1
                        ? [
                            ...state.slice(0, index),
                            action.payload,
                            ...state.slice(index + 1),
                        ]
                        : state;
                },
                prepare: ({
                              id,
                              name,
                              columns,
                              colIds,
                          }: editBoardInterface): BoardPayload => {
                    let nci = 0;
                    const newColumns = columns.map((col) => {
                        const id = col.id === -1 ? colIds[nci++] : col.id;
                        const tasks =
                            col.tasks?.map((cert) => ({...cert, status: col.name})) ?? [];
                        return {id, name: col.name, tasks};
                    });
                    return {
                        payload: {
                            id,
                            name,
                            columns: newColumns,
                        },
                    };
                },
            },
            deleteBoard: (state, action: PayloadAction<deleteBoardInterface>) => {
                const {name} = action.payload;

                return (state.filter((item) => item.name !== name));
            },
            addTask: {
                reducer: (state, action: PayloadAction<addTaskInterface>) => {
                    const {selected, status, task} = action.payload;
                    const one = state.find((item) => item.name === selected);
                    one?.columns.forEach((item) => {
                        if (item.name === status) {
                            item.tasks?.push({...task, order: item.tasks.length + 1});
                        }
                    });
                    return state;
                },
                prepare: ({
                              selected,
                              status,
                              statusId,
                              title,
                              description,
                              tasks,
                              subTasksIds,
                              taskId,
                          }: receiveTask): AddTaskPayload => {
                    const tasksa = tasks.map((sub, index) => ({
                        ...sub,
                        id: subTasksIds[index],
                    }));

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
                                subtasks: tasksa,
                                order: 0
                            },
                        },
                    };
                },
            },
            deleteTask: (state, action: PayloadAction<deleteTaskInterface>) => {
                const {selected, status, id} = action.payload;

                const board = state.find((item) => item.name === selected);
                if (!board) return state;

                const column = board.columns.find((item) => item.name === status);
                if (!column) return state;

                // Remove task using .filter(), ensuring immutability
                column.tasks = column.tasks?.filter((task) => task.id !== id);

                return state;
            },
            editTask: {
                reducer: (state, action: PayloadAction<EditTask>) => {
                    const {prevStatus, id, selected, status, task} = action.payload;

                    // Find the board
                    const board = state.find((item) => item.name === selected);
                    if (!board) return state; // Guard clause if board not found

                    // Find the column where the task currently exists
                    const column = board.columns.find((item) => item.name === prevStatus);
                    if (!column) return state; // Guard clause if column not found

                    // Get the index of the task
                    const taskIndex = column.tasks?.findIndex((item) => item.id === id);
                    if (taskIndex === -1 || taskIndex == null) return state; // Guard clause if task not found

                    if (prevStatus === status) {
                        // Update a task within the same column
                        column.tasks?.splice(taskIndex, 1, task);

                    } else {
                        // Move a task to a new column
                        const newColumn = board.columns.find((item) => item.name === status);
                        if (!newColumn) return state; // Guard clause if new column not found
                        column.tasks?.splice(taskIndex, 1); // Remove a task from previous column
                        newColumn.tasks?.push(task); // Add a task to new column
                    }
                    return state;
                },
                prepare: ({
                              prevStatus,
                              id,
                              selected,
                              status,
                              statusId,
                              title,
                              description,
                              tasks,
                              newSubIds, order
                          }: editTaskPrams): EditTaskPayload => {
                    const newTasks = tasks.map((sub) =>
                        sub.id !== -1 ? sub : {...sub, id: newSubIds?.shift() ?? 0}
                    );
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
                                subtasks: newTasks,
                                order
                            },
                        },
                    };
                },
            },
            // taskId, prevStatusId, statusId
            changeStatusTasks: (state, {payload: {status, selected, tasks}}: {
                payload: { status: number, selected: string, tasks: task[] }
            }) => {
                const board = state.find((item) => item.name === selected);
                if (!board) return state; // Guard clause if board not found

                // Find the column where the task currently exists
                const column = board.columns.find((item) => item.id === Number(status));
                if (!column) return state; // Guard clause if column not found
                column.tasks = tasks
                return state
            }
        },
    })
;

export const {
    addNewBoard,
    editBoard,
    deleteBoard,
    addTask,
    editTask,
    deleteTask,
    setBoards,
    changeStatusTasks
} = boardSlice.actions;


export default boardSlice.reducer;
