import { gql } from "@/__generated__/gql";

export const LOGIN = gql(/* GraphQL */ `
  mutation Login($userCredentials: userCredentials!) {
    login(userCredentials: $userCredentials) {
      message
      user {
        id
        username
        email
        isGuest
        last_updated
      }
    }
  }
`);
export const LOGOUT = gql(/* GraphQL */ `
  mutation Logout {
    logout
  }
`);
export const REGISTER = gql(/* GraphQL */ `
  mutation Register($username: String!, $email: String!, $password: String!) {
    register(username: $username, email: $email, password: $password) {
      successful
      userId
      existingUser
      existingEmail
    }
  }
`);

export const LOGIN_GUEST = gql(/* GraphQL */ `
  mutation LoginGuest {
    loginGuest
  }
`);
export const LOGOUT_GUEST = gql(/* GraphQL */ `
  mutation LogOutGuest {
    logOutGuest
  }
`);
export const GET_CURRENT_USER = gql(/* GraphQL */ `
  query getCurrentUser {
    getCurrentUser {
      message
      user {
        id
        username
        email
        isGuest
        last_updated
        created_at
        takenTour
      }
    }
  }
`);
//
export const CHANGE_PROFILE = gql(/* GraphQL */ `
  mutation ChangeProfile(
    $newName: String!
    $newEmail: String!
    $newPassword: String
    $oldPassword: String
  ) {
    changeProfile(
      newName: $newName
      newEmail: $newEmail
      newPassword: $newPassword
      oldPassword: $oldPassword
    ) {
      message
      successful
    }
  }
`);
export const DELETE_PROFILE = gql(/* GraphQL */ `
  mutation DeleteProfile($userId: Int!) {
    deleteProfile(userId: $userId)
  }
`);

export const MARK_TOUR_TAKEN = gql(/* GraphQL */ `
  mutation MarkTourTaken {
    markTourTaken
  }
`);

/*export const DELETE_COLUMN = gql`
mutation DeleteColumn($columnID: [Int!]!) {
    deleteColumn(columnID: $columnID)
}
`;


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
*/
