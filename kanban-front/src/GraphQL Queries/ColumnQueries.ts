import {gql} from "@/__generated__";

export const ADD_COLUMN = gql(/* GraphQL */`
    mutation AddColumn($columnName: [String!]!,$boardId:Int!) {
        addColumn(columnName:$columnName,boardId:$boardId)
    }
`);
export const EDIT_COLUMN = gql(/* GraphQL */`
    mutation EditColumn($columnID: [Int!]!, $columnName: [String!]!,$boardID:Int!) {
        editColumn(columnID: $columnID, columnName: $columnName,boardID:$boardID) {
            colIds
        }
    }
`);