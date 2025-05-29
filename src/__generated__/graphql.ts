/* eslint-disable */
import { TypedDocumentNode as DocumentNode } from '@graphql-typed-document-node/core';
export type Maybe<T> = T | null;
export type InputMaybe<T> = Maybe<T>;
export type Exact<T extends { [key: string]: unknown }> = { [K in keyof T]: T[K] };
export type MakeOptional<T, K extends keyof T> = Omit<T, K> & { [SubKey in K]?: Maybe<T[SubKey]> };
export type MakeMaybe<T, K extends keyof T> = Omit<T, K> & { [SubKey in K]: Maybe<T[SubKey]> };
export type MakeEmpty<T extends { [key: string]: unknown }, K extends keyof T> = { [_ in K]?: never };
export type Incremental<T> = T | { [P in keyof T]?: P extends ' $fragmentName' | '__typename' ? T[P] : never };
/** All built-in and custom scalars, mapped to their actual values */
export type Scalars = {
  ID: { input: string; output: string; }
  String: { input: string; output: string; }
  Boolean: { input: boolean; output: boolean; }
  Int: { input: number; output: number; }
  Float: { input: number; output: number; }
};

export type AddBoardResponse = {
  __typename?: 'AddBoardResponse';
  boardId: Scalars['Int']['output'];
  columnIds: Array<Scalars['Int']['output']>;
};

export type Column = {
  __typename?: 'Column';
  id: Scalars['Int']['output'];
  name: Scalars['String']['output'];
  tasks: Array<Task>;
};

export type Mutation = {
  __typename?: 'Mutation';
  addBoard: AddBoardResponse;
  addColumn: Array<Maybe<Scalars['Int']['output']>>;
  addSubTask: SubTask;
  addTask: AddTaskResponse;
  changeSubTask: Scalars['Boolean']['output'];
  deleteBoard: Scalars['Boolean']['output'];
  deleteColumn: Scalars['Boolean']['output'];
  deleteSubTask: Scalars['Boolean']['output'];
  deleteTask: Scalars['Boolean']['output'];
  editBoard?: Maybe<Scalars['Boolean']['output']>;
  editColumn: EditColumnResponse;
  editColumnBoard: Board;
  editColumnTask: Column;
  editSubTask: SubTask;
  editTask: EditTaskResponse;
  editTaskStatus: Scalars['Boolean']['output'];
  editTask_Sub: Task;
  login: User;
  logout: Scalars['String']['output'];
  register: Scalars['String']['output'];
};


export type MutationAddBoardArgs = {
  boardColumnsId: Array<Scalars['String']['input']>;
  boardName: Scalars['String']['input'];
};


export type MutationAddColumnArgs = {
  boardId: Scalars['Int']['input'];
  columnName: Array<Scalars['String']['input']>;
};


export type MutationAddSubTaskArgs = {
  subtask?: InputMaybe<Subtask>;
};


export type MutationAddTaskArgs = {
  inputTask: InputTask;
};


export type MutationChangeSubTaskArgs = {
  SubTaskID: Scalars['Int']['input'];
};


export type MutationDeleteBoardArgs = {
  boardID: Scalars['Int']['input'];
};


export type MutationDeleteColumnArgs = {
  columnID: Array<Scalars['Int']['input']>;
};


export type MutationDeleteSubTaskArgs = {
  SubTaskID: Scalars['Int']['input'];
};


export type MutationDeleteTaskArgs = {
  taskID: Scalars['Int']['input'];
};


export type MutationEditBoardArgs = {
  boardID: Scalars['Int']['input'];
  boardName: Scalars['String']['input'];
};


export type MutationEditColumnArgs = {
  boardID: Scalars['Int']['input'];
  columnID: Array<Scalars['Int']['input']>;
  columnName: Array<Scalars['String']['input']>;
};


export type MutationEditColumnBoardArgs = {
  boardID: Scalars['Int']['input'];
  columnID: Scalars['Int']['input'];
};


export type MutationEditColumnTaskArgs = {
  columnID: Scalars['Int']['input'];
  taskID: Scalars['Int']['input'];
};


export type MutationEditSubTaskArgs = {
  subtask?: InputMaybe<Subtask>;
};


export type MutationEditTaskArgs = {
  inputTask: InputTask;
};


export type MutationEditTaskStatusArgs = {
  order: Scalars['Int']['input'];
  statusID: Scalars['Int']['input'];
  taskId: Scalars['Int']['input'];
};


export type MutationEditTask_SubArgs = {
  subTaskID: Scalars['Int']['input'];
  taskID: Scalars['Int']['input'];
};


export type MutationLoginArgs = {
  email: Scalars['String']['input'];
  password: Scalars['String']['input'];
};


export type MutationRegisterArgs = {
  email: Scalars['String']['input'];
  password: Scalars['String']['input'];
  username: Scalars['String']['input'];
};

export type Query = {
  __typename?: 'Query';
  getBoards: Array<Board>;
};

export type SubTask = {
  __typename?: 'SubTask';
  id: Scalars['Int']['output'];
  isCompleted: Scalars['Boolean']['output'];
  title: Scalars['String']['output'];
};

export type User = {
  __typename?: 'User';
  email: Scalars['String']['output'];
  id: Scalars['Int']['output'];
  username: Scalars['String']['output'];
};

export type AddTaskResponse = {
  __typename?: 'addTaskResponse';
  subTasksIds: Array<Scalars['Int']['output']>;
  taskId: Scalars['Int']['output'];
};

export type Board = {
  __typename?: 'board';
  columns: Array<Column>;
  id: Scalars['Int']['output'];
  name: Scalars['String']['output'];
};

export type EditColumnResponse = {
  __typename?: 'editColumnResponse';
  colIds: Array<Scalars['Int']['output']>;
};

export type EditTaskResponse = {
  __typename?: 'editTaskResponse';
  newSubIds: Array<Scalars['Int']['output']>;
};

export type InputTask = {
  description: Scalars['String']['input'];
  order: Scalars['Int']['input'];
  status: Scalars['String']['input'];
  statusId: Scalars['Int']['input'];
  subtasks: Array<Subtask>;
  taskId?: InputMaybe<Scalars['Int']['input']>;
  title: Scalars['String']['input'];
};

export type Subtask = {
  id?: InputMaybe<Scalars['Int']['input']>;
  isCompleted: Scalars['Boolean']['input'];
  title: Scalars['String']['input'];
};

export type Task = {
  __typename?: 'task';
  description: Scalars['String']['output'];
  id: Scalars['Int']['output'];
  order: Scalars['Int']['output'];
  status: Scalars['String']['output'];
  statusId: Scalars['Int']['output'];
  subtasks: Array<SubTask>;
  title: Scalars['String']['output'];
};

export type GetBoardsQueryVariables = Exact<{ [key: string]: never; }>;


export type GetBoardsQuery = { __typename?: 'Query', getBoards: Array<{ __typename?: 'board', id: number, name: string, columns: Array<{ __typename?: 'Column', id: number, name: string, tasks: Array<{ __typename?: 'task', id: number, title: string, description: string, status: string, statusId: number, order: number, subtasks: Array<{ __typename?: 'SubTask', id: number, title: string, isCompleted: boolean }> }> }> }> };

export type AddBoardMutationVariables = Exact<{
  boardName: Scalars['String']['input'];
  boardColumnsId: Array<Scalars['String']['input']> | Scalars['String']['input'];
}>;


export type AddBoardMutation = { __typename?: 'Mutation', addBoard: { __typename?: 'AddBoardResponse', boardId: number, columnIds: Array<number> } };

export type EditBoardMutationVariables = Exact<{
  boardID: Scalars['Int']['input'];
  boardName: Scalars['String']['input'];
}>;


export type EditBoardMutation = { __typename?: 'Mutation', editBoard?: boolean | null };

export type DeleteBoardMutationVariables = Exact<{
  boardID: Scalars['Int']['input'];
}>;


export type DeleteBoardMutation = { __typename?: 'Mutation', deleteBoard: boolean };

export type AddColumnMutationVariables = Exact<{
  columnName: Array<Scalars['String']['input']> | Scalars['String']['input'];
  boardId: Scalars['Int']['input'];
}>;


export type AddColumnMutation = { __typename?: 'Mutation', addColumn: Array<number | null> };

export type EditColumnMutationVariables = Exact<{
  columnID: Array<Scalars['Int']['input']> | Scalars['Int']['input'];
  columnName: Array<Scalars['String']['input']> | Scalars['String']['input'];
  boardID: Scalars['Int']['input'];
}>;


export type EditColumnMutation = { __typename?: 'Mutation', editColumn: { __typename?: 'editColumnResponse', colIds: Array<number> } };

export type DeleteColumnMutationVariables = Exact<{
  columnID: Array<Scalars['Int']['input']> | Scalars['Int']['input'];
}>;


export type DeleteColumnMutation = { __typename?: 'Mutation', deleteColumn: boolean };

export type AddTaskMutationVariables = Exact<{
  inputTask: InputTask;
}>;


export type AddTaskMutation = { __typename?: 'Mutation', addTask: { __typename?: 'addTaskResponse', taskId: number, subTasksIds: Array<number> } };

export type EditTaskMutationVariables = Exact<{
  inputTask: InputTask;
}>;


export type EditTaskMutation = { __typename?: 'Mutation', editTask: { __typename?: 'editTaskResponse', newSubIds: Array<number> } };

export type EditTaskStatusMutationVariables = Exact<{
  taskId: Scalars['Int']['input'];
  statusID: Scalars['Int']['input'];
  order: Scalars['Int']['input'];
}>;


export type EditTaskStatusMutation = { __typename?: 'Mutation', editTaskStatus: boolean };

export type DeleteTaskMutationVariables = Exact<{
  taskID: Scalars['Int']['input'];
}>;


export type DeleteTaskMutation = { __typename?: 'Mutation', deleteTask: boolean };

export type AddSubTaskMutationVariables = Exact<{
  subtask: Subtask;
}>;


export type AddSubTaskMutation = { __typename?: 'Mutation', addSubTask: { __typename?: 'SubTask', id: number, title: string, isCompleted: boolean } };

export type EditSubTaskMutationVariables = Exact<{
  subtask?: InputMaybe<Subtask>;
}>;


export type EditSubTaskMutation = { __typename?: 'Mutation', editSubTask: { __typename?: 'SubTask', id: number, title: string, isCompleted: boolean } };

export type DeleteSubTaskMutationVariables = Exact<{
  SubTaskID: Scalars['Int']['input'];
}>;


export type DeleteSubTaskMutation = { __typename?: 'Mutation', deleteSubTask: boolean };

export type ChangeSubTaskMutationVariables = Exact<{
  SubTaskID: Scalars['Int']['input'];
}>;


export type ChangeSubTaskMutation = { __typename?: 'Mutation', changeSubTask: boolean };

export type EditTaskSubMutationVariables = Exact<{
  taskID: Scalars['Int']['input'];
  subTaskID: Scalars['Int']['input'];
}>;


export type EditTaskSubMutation = { __typename?: 'Mutation', editTask_Sub: { __typename?: 'task', id: number, title: string, subtasks: Array<{ __typename?: 'SubTask', id: number, title: string, isCompleted: boolean }> } };

export type EditColumnBoardMutationVariables = Exact<{
  boardID: Scalars['Int']['input'];
  columnID: Scalars['Int']['input'];
}>;


export type EditColumnBoardMutation = { __typename?: 'Mutation', editColumnBoard: { __typename?: 'board', id: number, name: string, columns: Array<{ __typename?: 'Column', id: number, name: string }> } };

export type EditColumnTaskMutationVariables = Exact<{
  columnID: Scalars['Int']['input'];
  taskID: Scalars['Int']['input'];
}>;


export type EditColumnTaskMutation = { __typename?: 'Mutation', editColumnTask: { __typename?: 'Column', id: number, name: string } };


export const GetBoardsDocument = {"kind":"Document","definitions":[{"kind":"OperationDefinition","operation":"query","name":{"kind":"Name","value":"getBoards"},"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"getBoards"},"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"id"}},{"kind":"Field","name":{"kind":"Name","value":"name"}},{"kind":"Field","name":{"kind":"Name","value":"columns"},"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"id"}},{"kind":"Field","name":{"kind":"Name","value":"name"}},{"kind":"Field","name":{"kind":"Name","value":"tasks"},"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"id"}},{"kind":"Field","name":{"kind":"Name","value":"title"}},{"kind":"Field","name":{"kind":"Name","value":"description"}},{"kind":"Field","name":{"kind":"Name","value":"status"}},{"kind":"Field","name":{"kind":"Name","value":"statusId"}},{"kind":"Field","name":{"kind":"Name","value":"order"}},{"kind":"Field","name":{"kind":"Name","value":"subtasks"},"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"id"}},{"kind":"Field","name":{"kind":"Name","value":"title"}},{"kind":"Field","name":{"kind":"Name","value":"isCompleted"}}]}}]}}]}}]}}]}}]} as unknown as DocumentNode<GetBoardsQuery, GetBoardsQueryVariables>;
export const AddBoardDocument = {"kind":"Document","definitions":[{"kind":"OperationDefinition","operation":"mutation","name":{"kind":"Name","value":"AddBoard"},"variableDefinitions":[{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"boardName"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"String"}}}},{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"boardColumnsId"}},"type":{"kind":"NonNullType","type":{"kind":"ListType","type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"String"}}}}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"addBoard"},"arguments":[{"kind":"Argument","name":{"kind":"Name","value":"boardName"},"value":{"kind":"Variable","name":{"kind":"Name","value":"boardName"}}},{"kind":"Argument","name":{"kind":"Name","value":"boardColumnsId"},"value":{"kind":"Variable","name":{"kind":"Name","value":"boardColumnsId"}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"boardId"}},{"kind":"Field","name":{"kind":"Name","value":"columnIds"}}]}}]}}]} as unknown as DocumentNode<AddBoardMutation, AddBoardMutationVariables>;
export const EditBoardDocument = {"kind":"Document","definitions":[{"kind":"OperationDefinition","operation":"mutation","name":{"kind":"Name","value":"EditBoard"},"variableDefinitions":[{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"boardID"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"Int"}}}},{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"boardName"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"String"}}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"editBoard"},"arguments":[{"kind":"Argument","name":{"kind":"Name","value":"boardID"},"value":{"kind":"Variable","name":{"kind":"Name","value":"boardID"}}},{"kind":"Argument","name":{"kind":"Name","value":"boardName"},"value":{"kind":"Variable","name":{"kind":"Name","value":"boardName"}}}]}]}}]} as unknown as DocumentNode<EditBoardMutation, EditBoardMutationVariables>;
export const DeleteBoardDocument = {"kind":"Document","definitions":[{"kind":"OperationDefinition","operation":"mutation","name":{"kind":"Name","value":"DeleteBoard"},"variableDefinitions":[{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"boardID"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"Int"}}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"deleteBoard"},"arguments":[{"kind":"Argument","name":{"kind":"Name","value":"boardID"},"value":{"kind":"Variable","name":{"kind":"Name","value":"boardID"}}}]}]}}]} as unknown as DocumentNode<DeleteBoardMutation, DeleteBoardMutationVariables>;
export const AddColumnDocument = {"kind":"Document","definitions":[{"kind":"OperationDefinition","operation":"mutation","name":{"kind":"Name","value":"AddColumn"},"variableDefinitions":[{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"columnName"}},"type":{"kind":"NonNullType","type":{"kind":"ListType","type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"String"}}}}}},{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"boardId"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"Int"}}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"addColumn"},"arguments":[{"kind":"Argument","name":{"kind":"Name","value":"columnName"},"value":{"kind":"Variable","name":{"kind":"Name","value":"columnName"}}},{"kind":"Argument","name":{"kind":"Name","value":"boardId"},"value":{"kind":"Variable","name":{"kind":"Name","value":"boardId"}}}]}]}}]} as unknown as DocumentNode<AddColumnMutation, AddColumnMutationVariables>;
export const EditColumnDocument = {"kind":"Document","definitions":[{"kind":"OperationDefinition","operation":"mutation","name":{"kind":"Name","value":"EditColumn"},"variableDefinitions":[{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"columnID"}},"type":{"kind":"NonNullType","type":{"kind":"ListType","type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"Int"}}}}}},{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"columnName"}},"type":{"kind":"NonNullType","type":{"kind":"ListType","type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"String"}}}}}},{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"boardID"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"Int"}}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"editColumn"},"arguments":[{"kind":"Argument","name":{"kind":"Name","value":"columnID"},"value":{"kind":"Variable","name":{"kind":"Name","value":"columnID"}}},{"kind":"Argument","name":{"kind":"Name","value":"columnName"},"value":{"kind":"Variable","name":{"kind":"Name","value":"columnName"}}},{"kind":"Argument","name":{"kind":"Name","value":"boardID"},"value":{"kind":"Variable","name":{"kind":"Name","value":"boardID"}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"colIds"}}]}}]}}]} as unknown as DocumentNode<EditColumnMutation, EditColumnMutationVariables>;
export const DeleteColumnDocument = {"kind":"Document","definitions":[{"kind":"OperationDefinition","operation":"mutation","name":{"kind":"Name","value":"DeleteColumn"},"variableDefinitions":[{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"columnID"}},"type":{"kind":"NonNullType","type":{"kind":"ListType","type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"Int"}}}}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"deleteColumn"},"arguments":[{"kind":"Argument","name":{"kind":"Name","value":"columnID"},"value":{"kind":"Variable","name":{"kind":"Name","value":"columnID"}}}]}]}}]} as unknown as DocumentNode<DeleteColumnMutation, DeleteColumnMutationVariables>;
export const AddTaskDocument = {"kind":"Document","definitions":[{"kind":"OperationDefinition","operation":"mutation","name":{"kind":"Name","value":"AddTask"},"variableDefinitions":[{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"inputTask"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"inputTask"}}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"addTask"},"arguments":[{"kind":"Argument","name":{"kind":"Name","value":"inputTask"},"value":{"kind":"Variable","name":{"kind":"Name","value":"inputTask"}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"taskId"}},{"kind":"Field","name":{"kind":"Name","value":"subTasksIds"}}]}}]}}]} as unknown as DocumentNode<AddTaskMutation, AddTaskMutationVariables>;
export const EditTaskDocument = {"kind":"Document","definitions":[{"kind":"OperationDefinition","operation":"mutation","name":{"kind":"Name","value":"EditTask"},"variableDefinitions":[{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"inputTask"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"inputTask"}}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"editTask"},"arguments":[{"kind":"Argument","name":{"kind":"Name","value":"inputTask"},"value":{"kind":"Variable","name":{"kind":"Name","value":"inputTask"}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"newSubIds"}}]}}]}}]} as unknown as DocumentNode<EditTaskMutation, EditTaskMutationVariables>;
export const EditTaskStatusDocument = {"kind":"Document","definitions":[{"kind":"OperationDefinition","operation":"mutation","name":{"kind":"Name","value":"EditTaskStatus"},"variableDefinitions":[{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"taskId"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"Int"}}}},{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"statusID"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"Int"}}}},{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"order"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"Int"}}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"editTaskStatus"},"arguments":[{"kind":"Argument","name":{"kind":"Name","value":"taskId"},"value":{"kind":"Variable","name":{"kind":"Name","value":"taskId"}}},{"kind":"Argument","name":{"kind":"Name","value":"statusID"},"value":{"kind":"Variable","name":{"kind":"Name","value":"statusID"}}},{"kind":"Argument","name":{"kind":"Name","value":"order"},"value":{"kind":"Variable","name":{"kind":"Name","value":"order"}}}]}]}}]} as unknown as DocumentNode<EditTaskStatusMutation, EditTaskStatusMutationVariables>;
export const DeleteTaskDocument = {"kind":"Document","definitions":[{"kind":"OperationDefinition","operation":"mutation","name":{"kind":"Name","value":"DeleteTask"},"variableDefinitions":[{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"taskID"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"Int"}}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"deleteTask"},"arguments":[{"kind":"Argument","name":{"kind":"Name","value":"taskID"},"value":{"kind":"Variable","name":{"kind":"Name","value":"taskID"}}}]}]}}]} as unknown as DocumentNode<DeleteTaskMutation, DeleteTaskMutationVariables>;
export const AddSubTaskDocument = {"kind":"Document","definitions":[{"kind":"OperationDefinition","operation":"mutation","name":{"kind":"Name","value":"AddSubTask"},"variableDefinitions":[{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"subtask"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"subtask"}}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"addSubTask"},"arguments":[{"kind":"Argument","name":{"kind":"Name","value":"subtask"},"value":{"kind":"Variable","name":{"kind":"Name","value":"subtask"}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"id"}},{"kind":"Field","name":{"kind":"Name","value":"title"}},{"kind":"Field","name":{"kind":"Name","value":"isCompleted"}}]}}]}}]} as unknown as DocumentNode<AddSubTaskMutation, AddSubTaskMutationVariables>;
export const EditSubTaskDocument = {"kind":"Document","definitions":[{"kind":"OperationDefinition","operation":"mutation","name":{"kind":"Name","value":"EditSubTask"},"variableDefinitions":[{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"subtask"}},"type":{"kind":"NamedType","name":{"kind":"Name","value":"subtask"}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"editSubTask"},"arguments":[{"kind":"Argument","name":{"kind":"Name","value":"subtask"},"value":{"kind":"Variable","name":{"kind":"Name","value":"subtask"}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"id"}},{"kind":"Field","name":{"kind":"Name","value":"title"}},{"kind":"Field","name":{"kind":"Name","value":"isCompleted"}}]}}]}}]} as unknown as DocumentNode<EditSubTaskMutation, EditSubTaskMutationVariables>;
export const DeleteSubTaskDocument = {"kind":"Document","definitions":[{"kind":"OperationDefinition","operation":"mutation","name":{"kind":"Name","value":"DeleteSubTask"},"variableDefinitions":[{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"SubTaskID"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"Int"}}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"deleteSubTask"},"arguments":[{"kind":"Argument","name":{"kind":"Name","value":"SubTaskID"},"value":{"kind":"Variable","name":{"kind":"Name","value":"SubTaskID"}}}]}]}}]} as unknown as DocumentNode<DeleteSubTaskMutation, DeleteSubTaskMutationVariables>;
export const ChangeSubTaskDocument = {"kind":"Document","definitions":[{"kind":"OperationDefinition","operation":"mutation","name":{"kind":"Name","value":"ChangeSubTask"},"variableDefinitions":[{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"SubTaskID"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"Int"}}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"changeSubTask"},"arguments":[{"kind":"Argument","name":{"kind":"Name","value":"SubTaskID"},"value":{"kind":"Variable","name":{"kind":"Name","value":"SubTaskID"}}}]}]}}]} as unknown as DocumentNode<ChangeSubTaskMutation, ChangeSubTaskMutationVariables>;
export const EditTaskSubDocument = {"kind":"Document","definitions":[{"kind":"OperationDefinition","operation":"mutation","name":{"kind":"Name","value":"EditTaskSub"},"variableDefinitions":[{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"taskID"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"Int"}}}},{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"subTaskID"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"Int"}}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"editTask_Sub"},"arguments":[{"kind":"Argument","name":{"kind":"Name","value":"taskID"},"value":{"kind":"Variable","name":{"kind":"Name","value":"taskID"}}},{"kind":"Argument","name":{"kind":"Name","value":"subTaskID"},"value":{"kind":"Variable","name":{"kind":"Name","value":"subTaskID"}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"id"}},{"kind":"Field","name":{"kind":"Name","value":"title"}},{"kind":"Field","name":{"kind":"Name","value":"subtasks"},"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"id"}},{"kind":"Field","name":{"kind":"Name","value":"title"}},{"kind":"Field","name":{"kind":"Name","value":"isCompleted"}}]}}]}}]}}]} as unknown as DocumentNode<EditTaskSubMutation, EditTaskSubMutationVariables>;
export const EditColumnBoardDocument = {"kind":"Document","definitions":[{"kind":"OperationDefinition","operation":"mutation","name":{"kind":"Name","value":"EditColumnBoard"},"variableDefinitions":[{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"boardID"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"Int"}}}},{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"columnID"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"Int"}}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"editColumnBoard"},"arguments":[{"kind":"Argument","name":{"kind":"Name","value":"boardID"},"value":{"kind":"Variable","name":{"kind":"Name","value":"boardID"}}},{"kind":"Argument","name":{"kind":"Name","value":"columnID"},"value":{"kind":"Variable","name":{"kind":"Name","value":"columnID"}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"id"}},{"kind":"Field","name":{"kind":"Name","value":"name"}},{"kind":"Field","name":{"kind":"Name","value":"columns"},"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"id"}},{"kind":"Field","name":{"kind":"Name","value":"name"}}]}}]}}]}}]} as unknown as DocumentNode<EditColumnBoardMutation, EditColumnBoardMutationVariables>;
export const EditColumnTaskDocument = {"kind":"Document","definitions":[{"kind":"OperationDefinition","operation":"mutation","name":{"kind":"Name","value":"EditColumnTask"},"variableDefinitions":[{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"columnID"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"Int"}}}},{"kind":"VariableDefinition","variable":{"kind":"Variable","name":{"kind":"Name","value":"taskID"}},"type":{"kind":"NonNullType","type":{"kind":"NamedType","name":{"kind":"Name","value":"Int"}}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"editColumnTask"},"arguments":[{"kind":"Argument","name":{"kind":"Name","value":"columnID"},"value":{"kind":"Variable","name":{"kind":"Name","value":"columnID"}}},{"kind":"Argument","name":{"kind":"Name","value":"taskID"},"value":{"kind":"Variable","name":{"kind":"Name","value":"taskID"}}}],"selectionSet":{"kind":"SelectionSet","selections":[{"kind":"Field","name":{"kind":"Name","value":"id"}},{"kind":"Field","name":{"kind":"Name","value":"name"}}]}}]}}]} as unknown as DocumentNode<EditColumnTaskMutation, EditColumnTaskMutationVariables>;