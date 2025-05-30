import {gql} from "@/__generated__";


export const ADD_TASK = gql(/* GraphQL */`
    mutation AddTask(
        $inputTask:inputTask!
    ) {
        addTask(
            inputTask:$inputTask
        ) {
            taskId
            subTasksIds
        }
    }
`);
export const EDIT_TASK = gql(/* GraphQL */`
    mutation EditTask($inputTask:inputTask!) {
        editTask(inputTask:$inputTask) {
            newSubIds
        }
    }
`);
export const EDIT_TASK_STATUS = gql(/* GraphQL */`
    mutation EditTaskStatus($taskId: Int!, $statusID: Int!,$order:Int!) {
        editTaskStatus(taskId: $taskId, statusID: $statusID,order:$order)
    }
`);
export const DELETE_TASK = gql(/* GraphQL */`
    mutation DeleteTask($taskID: Int!) {
        deleteTask(taskID: $taskID)
    }
`);
export const CHANGE_TASK_ORDER = gql(/* GraphQL */`
    mutation ChangeOrder($tasksId: [Int!]!,$orders:[Int!]!) {
        changeOrder(tasksId:$tasksId, orders:$orders)}
`)
export const CHANGE_SUBTASK = gql(/* GraphQL */`
    mutation ChangeSubTask($SubTaskID: Int!){
        changeSubTask(SubTaskID:$SubTaskID)
    }
`)