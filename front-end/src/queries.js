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
      id
      name
      columns {
        id
        name
      }
    }
  }
`;
export const EDIT_BOARD = gql`
  mutation EditBoard($boardID: ID!, $boardName: String!) {
    editBoard(boardID: $boardID, boardName: $boardName) {
      id
      name
    }
  }
`;
export const DELETE_BOARD = gql`
  mutation DeleteBoard($boardID: ID!) {
    deleteBoard(boardID: $boardID)
  }
`;




export const ADD_COLUMN = gql`
  mutation AddColumn($columnName: [String!]!,$boardId:ID!) {
    addColumn(columnName:$columnName,boardId:$boardId) {
      id
      name
    }
  }
`;
export const EDIT_COLUMN = gql`
  mutation EditColumn($columnID: ID!, $columnName: String!) {
    editColumn(columnID: $columnID, columnName: $columnName) {
      id
      name
    }
  }
`;
export const DELETE_COLUMN = gql`
  mutation DeleteColumn($columnID: [ID!]!) {
    deleteColumn(columnID: $columnID) 
  }
`;



export const ADD_TASK = gql`
  mutation AddTask(
    $taskTitle: String!
    $taskDesc: String!
    $taskStatus: String!
  ) {
    addTask(
      taskTitle: $taskTitle
      taskDesc: $taskDesc
      taskStatus: $taskStatus
    ) {
      id
      title
      description
      status
    }
  }
`;
export const EDIT_TASK = gql`
  mutation EditTask(
    $taskID: ID!
    $taskTitle: String!
    $taskDesc: String!
    $taskStatus: String!
  ) {
    editTask(
      taskID: $taskID
      taskTitle: $taskTitle
      taskDesc: $taskDesc
      taskStatus: $taskStatus
    ) {
      id
      title
      description
      status
    }
  }
`;
export const DELETE_TASK = gql`
  mutation DeleteTask($taskID: ID!) {
    deleteTask(taskID: $taskID)
  }
`;




export const ADD_SUBTASK = gql`
  mutation AddSubTask(
    $subTaskTitle: String!
    $isCompleted:Boolean
  ) {
    addSubTask(
      subTaskTitle:$subTaskTitle
      isCompleted:$isCompleted)
       {
        id
       title
       isCompleted
    }
  }
`;
export const EDIT_SUBTASK = gql`
  mutation EditSubTask(
    $SubTaskID: ID!
    $subTaskTitle: String!
    $isCompleted: Boolean!
  ) {
    editSubTask(
      SubTaskID: $SubTaskID
      subTaskTitle: $subTaskTitle
      isCompleted: $isCompleted
    ) {
      id
      title
      isCompleted
    }
  }
`;
export const DELETE_SUBTASK = gql`
  mutation DeleteSubTask($SubTaskID: ID!) {
    deleteSubTask(SubTaskID: $SubTaskID) 
  }
`;






export const EDIT_TASK_SUB = gql`
  mutation EditTaskSub($taskID: ID!, $subTaskID: ID!) {
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
  mutation EditColumnBoard($boardID: ID!, $columnID: ID!) {
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
  mutation EditColumnTask(  $columnID: ID!, $taskID: ID!) {
    editColumnTask(columnID: $columnID, taskID: $taskID) {
      id
      name
    }
  }
`;

