import {gql} from "@/__generated__";


export const GET_BOARDS = gql(/* GraphQL */`
    query getBoards($userId:Int!) {
        getBoards(userId:$userId) {
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
`);
export const ADD_BOARD = gql(/* GraphQL */`
    mutation AddBoard($boardName: String!, $boardColumnsId: [String!]!) {
        addBoard(boardName: $boardName, boardColumnsId: $boardColumnsId) {
            boardId
            columnIds}
    }
`);
export const EDIT_BOARD = gql(/* GraphQL */`
    mutation EditBoard($boardID: Int!, $boardName: String!) {
        editBoard(boardID: $boardID, boardName: $boardName)
    }
`);
export const DELETE_BOARD = gql(/* GraphQL */`
    mutation DeleteBoard($boardID: Int!) {
        deleteBoard(boardID: $boardID)
    }
`);