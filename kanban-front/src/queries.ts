import { gql } from "@apollo/client";


export const GET_BOARDS = gql`
    query getBoards {
        getBoards {
            id
            name
            columns {
                id
                name
                tasks {
                    id
                    title
                    description
                    status
                    statusId
                    order
                    subtasks {
                        id
                        title
                        isCompleted
                    }
                }
            }
        }
    }
`;

export const ADD_BOARD = gql`
  mutation AddBoard($boardName: String!, $boardColumnsId: [String!]!) {
    addBoard(boardName: $boardName, boardColumnsId: $boardColumnsId) {
    boardId
    columnIds}
  }
`;
export const EDIT_BOARD = gql`
    mutation EditBoard($boardID: Int!, $boardName: String!) {
        editBoard(boardID: $boardID, boardName: $boardName)
    }
`;
export const DELETE_BOARD = gql`
  mutation DeleteBoard($boardID: Int!) {
    deleteBoard(boardID: $boardID)
  }
`;




export const ADD_COLUMN = gql`
  mutation AddColumn($columnName: [String!]!,$boardId:Int!) {
    addColumn(columnName:$columnName,boardId:$boardId)
  }
`;
export const EDIT_COLUMN = gql`
  mutation EditColumn($columnID: [Int!]!, $columnName: [String!]!,$boardID:Int!) {
    editColumn(columnID: $columnID, columnName: $columnName,boardID:$boardID) {
     colIds
    }
  }
`;
export const DELETE_COLUMN = gql`
  mutation DeleteColumn($columnID: [Int!]!) {
    deleteColumn(columnID: $columnID) 
  }
`;


export const ADD_TASK = gql`
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
`;
export const EDIT_TASK = gql`
  mutation EditTask($inputTask:inputTask!) {
    editTask(inputTask:$inputTask) {
      newSubIds
    }
  }
`;
export const EDIT_TASK_STATUS = gql`
  mutation EditTaskStatus($taskId: Int!, $statusID: Int!,$order:Int!) {
    editTaskStatus(taskId: $taskId, statusID: $statusID,order:$order)
  }
`;
export const DELETE_TASK = gql`
  mutation DeleteTask($taskID: Int!) {
    deleteTask(taskID: $taskID)
  }
`;
export const CHANGE_TASK_ORDER = gql`
    mutation ChangeOrder($tasksId: [Int!]!,$orders:[Int!]!) {
        changeOrder(tasksId:$tasksId, orders:$orders)}
`




export const ADD_SUBTASK = gql`
  mutation AddSubTask($subtask: subtask!) {
    addSubTask(subtask: $subtask) {
      id
      title
      isCompleted
    }
  }
`;
export const EDIT_SUBTASK = gql`
  mutation EditSubTask($subtask:subtask) {
    editSubTask(subtask:$subtask) {
      id
      title
      isCompleted
    }
  }
`;
export const DELETE_SUBTASK = gql`
  mutation DeleteSubTask($SubTaskID: Int!) {
    deleteSubTask(SubTaskID: $SubTaskID) 
  }`;
export const CHANGE_SUBTASK = gql`
mutation ChangeSubTask($SubTaskID: Int!){
changeSubTask(SubTaskID:$SubTaskID)
}
`




export const EDIT_TASK_SUB = gql`
  mutation EditTaskSub($taskID: Int!, $subTaskID: Int!) {
    editTask_Sub(taskID: $taskID, subTaskID: $subTaskID) {
      id
      title
      subtasks {
        id
        title
        isCompleted
      }
    }
  }
`;
export const EDIT_COLUMN_BOARD = gql`
  mutation EditColumnBoard($boardID: Int!, $columnID: Int!) {
    editColumnBoard(boardID: $boardID, columnID: $columnID) {
      id
      name
      columns {
        id
        name
      }
    }
  }
`;
export const EDIT_COLUMN_TASK = gql`
  mutation EditColumnTask(  $columnID: Int!, $taskID: Int!) {
    editColumnTask(columnID: $columnID, taskID: $taskID) {
      id
      name
    }
  }
`;

