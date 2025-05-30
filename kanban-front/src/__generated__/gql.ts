/* eslint-disable */
import * as types from './graphql';
import type { TypedDocumentNode as DocumentNode } from '@graphql-typed-document-node/core';

/**
 * Map of all GraphQL operations in the project.
 *
 * This map has several performance disadvantages:
 * 1. It is not tree-shakeable, so it will include all operations in the project.
 * 2. It is not minifiable, so the string of a GraphQL query will be multiple times inside the bundle.
 * 3. It does not support dead code elimination, so it will add unused operations.
 *
 * Therefore it is highly recommended to use the babel or swc plugin for production.
 * Learn more about it here: https://the-guild.dev/graphql/codegen/plugins/presets/preset-client#reducing-bundle-size
 */
type Documents = {
    "\n    query getBoards($userId:Int!) {\n        getBoards(userId:$userId) {\n            id\n            name\n            columns {\n                id\n                name\n                tasks {\n                    id\n                    title\n                    description\n                    status\n                    statusId\n                    order\n                    subtasks {\n                        id\n                        title\n                        isCompleted\n                    }\n                }\n            }\n        }\n    }\n": typeof types.GetBoardsDocument,
    "\n    mutation AddBoard($boardName: String!, $boardColumnsId: [String!]!) {\n        addBoard(boardName: $boardName, boardColumnsId: $boardColumnsId) {\n            boardId\n            columnIds}\n    }\n": typeof types.AddBoardDocument,
    "\n    mutation EditBoard($boardID: Int!, $boardName: String!) {\n        editBoard(boardID: $boardID, boardName: $boardName)\n    }\n": typeof types.EditBoardDocument,
    "\n    mutation DeleteBoard($boardID: Int!) {\n        deleteBoard(boardID: $boardID)\n    }\n": typeof types.DeleteBoardDocument,
    "\n    mutation AddColumn($columnName: [String!]!,$boardId:Int!) {\n        addColumn(columnName:$columnName,boardId:$boardId)\n    }\n": typeof types.AddColumnDocument,
    "\n    mutation EditColumn($columnID: [Int!]!, $columnName: [String!]!,$boardID:Int!) {\n        editColumn(columnID: $columnID, columnName: $columnName,boardID:$boardID) {\n            colIds\n        }\n    }\n": typeof types.EditColumnDocument,
    "\n    mutation Login($userCredentials:userCredentials!){\n        login(userCredentials:$userCredentials){\n            message\n            user{\n                id\n                username\n                email\n            }\n        }\n    }\n": typeof types.LoginDocument,
    "\n    mutation Logout {\n        logout\n    }\n": typeof types.LogoutDocument,
    "\n    mutation Register($username: String!, $email: String!, $password: String!){\n        register(username:$username,email:$email,password:$password){\n            successful\n            userId\n            existingUser\n            existingEmail\n        }\n    }\n": typeof types.RegisterDocument,
    "\n    mutation AddTask(\n        $inputTask:inputTask!\n    ) {\n        addTask(\n            inputTask:$inputTask\n        ) {\n            taskId\n            subTasksIds\n        }\n    }\n": typeof types.AddTaskDocument,
    "\n    mutation EditTask($inputTask:inputTask!) {\n        editTask(inputTask:$inputTask) {\n            newSubIds\n        }\n    }\n": typeof types.EditTaskDocument,
    "\n    mutation EditTaskStatus($taskId: Int!, $statusID: Int!,$order:Int!) {\n        editTaskStatus(taskId: $taskId, statusID: $statusID,order:$order)\n    }\n": typeof types.EditTaskStatusDocument,
    "\n    mutation DeleteTask($taskID: Int!) {\n        deleteTask(taskID: $taskID)\n    }\n": typeof types.DeleteTaskDocument,
    "\n    mutation ChangeOrder($tasksId: [Int!]!,$orders:[Int!]!) {\n        changeOrder(tasksId:$tasksId, orders:$orders)}\n": typeof types.ChangeOrderDocument,
    "\n    mutation ChangeSubTask($SubTaskID: Int!){\n        changeSubTask(SubTaskID:$SubTaskID)\n    }\n": typeof types.ChangeSubTaskDocument,
};
const documents: Documents = {
    "\n    query getBoards($userId:Int!) {\n        getBoards(userId:$userId) {\n            id\n            name\n            columns {\n                id\n                name\n                tasks {\n                    id\n                    title\n                    description\n                    status\n                    statusId\n                    order\n                    subtasks {\n                        id\n                        title\n                        isCompleted\n                    }\n                }\n            }\n        }\n    }\n": types.GetBoardsDocument,
    "\n    mutation AddBoard($boardName: String!, $boardColumnsId: [String!]!) {\n        addBoard(boardName: $boardName, boardColumnsId: $boardColumnsId) {\n            boardId\n            columnIds}\n    }\n": types.AddBoardDocument,
    "\n    mutation EditBoard($boardID: Int!, $boardName: String!) {\n        editBoard(boardID: $boardID, boardName: $boardName)\n    }\n": types.EditBoardDocument,
    "\n    mutation DeleteBoard($boardID: Int!) {\n        deleteBoard(boardID: $boardID)\n    }\n": types.DeleteBoardDocument,
    "\n    mutation AddColumn($columnName: [String!]!,$boardId:Int!) {\n        addColumn(columnName:$columnName,boardId:$boardId)\n    }\n": types.AddColumnDocument,
    "\n    mutation EditColumn($columnID: [Int!]!, $columnName: [String!]!,$boardID:Int!) {\n        editColumn(columnID: $columnID, columnName: $columnName,boardID:$boardID) {\n            colIds\n        }\n    }\n": types.EditColumnDocument,
    "\n    mutation Login($userCredentials:userCredentials!){\n        login(userCredentials:$userCredentials){\n            message\n            user{\n                id\n                username\n                email\n            }\n        }\n    }\n": types.LoginDocument,
    "\n    mutation Logout {\n        logout\n    }\n": types.LogoutDocument,
    "\n    mutation Register($username: String!, $email: String!, $password: String!){\n        register(username:$username,email:$email,password:$password){\n            successful\n            userId\n            existingUser\n            existingEmail\n        }\n    }\n": types.RegisterDocument,
    "\n    mutation AddTask(\n        $inputTask:inputTask!\n    ) {\n        addTask(\n            inputTask:$inputTask\n        ) {\n            taskId\n            subTasksIds\n        }\n    }\n": types.AddTaskDocument,
    "\n    mutation EditTask($inputTask:inputTask!) {\n        editTask(inputTask:$inputTask) {\n            newSubIds\n        }\n    }\n": types.EditTaskDocument,
    "\n    mutation EditTaskStatus($taskId: Int!, $statusID: Int!,$order:Int!) {\n        editTaskStatus(taskId: $taskId, statusID: $statusID,order:$order)\n    }\n": types.EditTaskStatusDocument,
    "\n    mutation DeleteTask($taskID: Int!) {\n        deleteTask(taskID: $taskID)\n    }\n": types.DeleteTaskDocument,
    "\n    mutation ChangeOrder($tasksId: [Int!]!,$orders:[Int!]!) {\n        changeOrder(tasksId:$tasksId, orders:$orders)}\n": types.ChangeOrderDocument,
    "\n    mutation ChangeSubTask($SubTaskID: Int!){\n        changeSubTask(SubTaskID:$SubTaskID)\n    }\n": types.ChangeSubTaskDocument,
};

/**
 * The gql function is used to parse GraphQL queries into a document that can be used by GraphQL clients.
 *
 *
 * @example
 * ```ts
 * const query = gql(`query GetUser($id: ID!) { user(id: $id) { name } }`);
 * ```
 *
 * The query argument is unknown!
 * Please regenerate the types.
 */
export function gql(source: string): unknown;

/**
 * The gql function is used to parse GraphQL queries into a document that can be used by GraphQL clients.
 */
export function gql(source: "\n    query getBoards($userId:Int!) {\n        getBoards(userId:$userId) {\n            id\n            name\n            columns {\n                id\n                name\n                tasks {\n                    id\n                    title\n                    description\n                    status\n                    statusId\n                    order\n                    subtasks {\n                        id\n                        title\n                        isCompleted\n                    }\n                }\n            }\n        }\n    }\n"): (typeof documents)["\n    query getBoards($userId:Int!) {\n        getBoards(userId:$userId) {\n            id\n            name\n            columns {\n                id\n                name\n                tasks {\n                    id\n                    title\n                    description\n                    status\n                    statusId\n                    order\n                    subtasks {\n                        id\n                        title\n                        isCompleted\n                    }\n                }\n            }\n        }\n    }\n"];
/**
 * The gql function is used to parse GraphQL queries into a document that can be used by GraphQL clients.
 */
export function gql(source: "\n    mutation AddBoard($boardName: String!, $boardColumnsId: [String!]!) {\n        addBoard(boardName: $boardName, boardColumnsId: $boardColumnsId) {\n            boardId\n            columnIds}\n    }\n"): (typeof documents)["\n    mutation AddBoard($boardName: String!, $boardColumnsId: [String!]!) {\n        addBoard(boardName: $boardName, boardColumnsId: $boardColumnsId) {\n            boardId\n            columnIds}\n    }\n"];
/**
 * The gql function is used to parse GraphQL queries into a document that can be used by GraphQL clients.
 */
export function gql(source: "\n    mutation EditBoard($boardID: Int!, $boardName: String!) {\n        editBoard(boardID: $boardID, boardName: $boardName)\n    }\n"): (typeof documents)["\n    mutation EditBoard($boardID: Int!, $boardName: String!) {\n        editBoard(boardID: $boardID, boardName: $boardName)\n    }\n"];
/**
 * The gql function is used to parse GraphQL queries into a document that can be used by GraphQL clients.
 */
export function gql(source: "\n    mutation DeleteBoard($boardID: Int!) {\n        deleteBoard(boardID: $boardID)\n    }\n"): (typeof documents)["\n    mutation DeleteBoard($boardID: Int!) {\n        deleteBoard(boardID: $boardID)\n    }\n"];
/**
 * The gql function is used to parse GraphQL queries into a document that can be used by GraphQL clients.
 */
export function gql(source: "\n    mutation AddColumn($columnName: [String!]!,$boardId:Int!) {\n        addColumn(columnName:$columnName,boardId:$boardId)\n    }\n"): (typeof documents)["\n    mutation AddColumn($columnName: [String!]!,$boardId:Int!) {\n        addColumn(columnName:$columnName,boardId:$boardId)\n    }\n"];
/**
 * The gql function is used to parse GraphQL queries into a document that can be used by GraphQL clients.
 */
export function gql(source: "\n    mutation EditColumn($columnID: [Int!]!, $columnName: [String!]!,$boardID:Int!) {\n        editColumn(columnID: $columnID, columnName: $columnName,boardID:$boardID) {\n            colIds\n        }\n    }\n"): (typeof documents)["\n    mutation EditColumn($columnID: [Int!]!, $columnName: [String!]!,$boardID:Int!) {\n        editColumn(columnID: $columnID, columnName: $columnName,boardID:$boardID) {\n            colIds\n        }\n    }\n"];
/**
 * The gql function is used to parse GraphQL queries into a document that can be used by GraphQL clients.
 */
export function gql(source: "\n    mutation Login($userCredentials:userCredentials!){\n        login(userCredentials:$userCredentials){\n            message\n            user{\n                id\n                username\n                email\n            }\n        }\n    }\n"): (typeof documents)["\n    mutation Login($userCredentials:userCredentials!){\n        login(userCredentials:$userCredentials){\n            message\n            user{\n                id\n                username\n                email\n            }\n        }\n    }\n"];
/**
 * The gql function is used to parse GraphQL queries into a document that can be used by GraphQL clients.
 */
export function gql(source: "\n    mutation Logout {\n        logout\n    }\n"): (typeof documents)["\n    mutation Logout {\n        logout\n    }\n"];
/**
 * The gql function is used to parse GraphQL queries into a document that can be used by GraphQL clients.
 */
export function gql(source: "\n    mutation Register($username: String!, $email: String!, $password: String!){\n        register(username:$username,email:$email,password:$password){\n            successful\n            userId\n            existingUser\n            existingEmail\n        }\n    }\n"): (typeof documents)["\n    mutation Register($username: String!, $email: String!, $password: String!){\n        register(username:$username,email:$email,password:$password){\n            successful\n            userId\n            existingUser\n            existingEmail\n        }\n    }\n"];
/**
 * The gql function is used to parse GraphQL queries into a document that can be used by GraphQL clients.
 */
export function gql(source: "\n    mutation AddTask(\n        $inputTask:inputTask!\n    ) {\n        addTask(\n            inputTask:$inputTask\n        ) {\n            taskId\n            subTasksIds\n        }\n    }\n"): (typeof documents)["\n    mutation AddTask(\n        $inputTask:inputTask!\n    ) {\n        addTask(\n            inputTask:$inputTask\n        ) {\n            taskId\n            subTasksIds\n        }\n    }\n"];
/**
 * The gql function is used to parse GraphQL queries into a document that can be used by GraphQL clients.
 */
export function gql(source: "\n    mutation EditTask($inputTask:inputTask!) {\n        editTask(inputTask:$inputTask) {\n            newSubIds\n        }\n    }\n"): (typeof documents)["\n    mutation EditTask($inputTask:inputTask!) {\n        editTask(inputTask:$inputTask) {\n            newSubIds\n        }\n    }\n"];
/**
 * The gql function is used to parse GraphQL queries into a document that can be used by GraphQL clients.
 */
export function gql(source: "\n    mutation EditTaskStatus($taskId: Int!, $statusID: Int!,$order:Int!) {\n        editTaskStatus(taskId: $taskId, statusID: $statusID,order:$order)\n    }\n"): (typeof documents)["\n    mutation EditTaskStatus($taskId: Int!, $statusID: Int!,$order:Int!) {\n        editTaskStatus(taskId: $taskId, statusID: $statusID,order:$order)\n    }\n"];
/**
 * The gql function is used to parse GraphQL queries into a document that can be used by GraphQL clients.
 */
export function gql(source: "\n    mutation DeleteTask($taskID: Int!) {\n        deleteTask(taskID: $taskID)\n    }\n"): (typeof documents)["\n    mutation DeleteTask($taskID: Int!) {\n        deleteTask(taskID: $taskID)\n    }\n"];
/**
 * The gql function is used to parse GraphQL queries into a document that can be used by GraphQL clients.
 */
export function gql(source: "\n    mutation ChangeOrder($tasksId: [Int!]!,$orders:[Int!]!) {\n        changeOrder(tasksId:$tasksId, orders:$orders)}\n"): (typeof documents)["\n    mutation ChangeOrder($tasksId: [Int!]!,$orders:[Int!]!) {\n        changeOrder(tasksId:$tasksId, orders:$orders)}\n"];
/**
 * The gql function is used to parse GraphQL queries into a document that can be used by GraphQL clients.
 */
export function gql(source: "\n    mutation ChangeSubTask($SubTaskID: Int!){\n        changeSubTask(SubTaskID:$SubTaskID)\n    }\n"): (typeof documents)["\n    mutation ChangeSubTask($SubTaskID: Int!){\n        changeSubTask(SubTaskID:$SubTaskID)\n    }\n"];

export function gql(source: string) {
  return (documents as any)[source] ?? {};
}

export type DocumentType<TDocumentNode extends DocumentNode<any, any>> = TDocumentNode extends DocumentNode<  infer TType,  any>  ? TType  : never;