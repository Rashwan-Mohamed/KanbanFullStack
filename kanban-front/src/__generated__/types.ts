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
  changeOrder: Scalars['Boolean']['output'];
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
  logOutGuest: Scalars['Boolean']['output'];
  login: LoginResponse;
  loginGuest: Scalars['Int']['output'];
  logout: Scalars['Boolean']['output'];
  register: RegisterResponse;
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


export type MutationChangeOrderArgs = {
  orders: Array<Scalars['Int']['input']>;
  tasksId: Array<Scalars['Int']['input']>;
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
  userCredentials: UserCredentials;
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


export type QueryGetBoardsArgs = {
  userId: Scalars['Int']['input'];
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

export type LoginResponse = {
  __typename?: 'loginResponse';
  message: Scalars['String']['output'];
  user?: Maybe<User>;
};

export type RegisterResponse = {
  __typename?: 'registerResponse';
  existingEmail?: Maybe<Scalars['Boolean']['output']>;
  existingUser?: Maybe<Scalars['Boolean']['output']>;
  successful: Scalars['Boolean']['output'];
  userId?: Maybe<Scalars['Int']['output']>;
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

export type UserCredentials = {
  password: Scalars['String']['input'];
  username: Scalars['String']['input'];
};

export type GetBoardsQueryVariables = Exact<{
  userId: Scalars['Int']['input'];
}>;


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

export type LoginMutationVariables = Exact<{
  userCredentials: UserCredentials;
}>;


export type LoginMutation = { __typename?: 'Mutation', login: { __typename?: 'loginResponse', message: string, user?: { __typename?: 'User', id: number, username: string, email: string } | null } };

export type LogoutMutationVariables = Exact<{ [key: string]: never; }>;


export type LogoutMutation = { __typename?: 'Mutation', logout: boolean };

export type RegisterMutationVariables = Exact<{
  username: Scalars['String']['input'];
  email: Scalars['String']['input'];
  password: Scalars['String']['input'];
}>;


export type RegisterMutation = { __typename?: 'Mutation', register: { __typename?: 'registerResponse', successful: boolean, userId?: number | null, existingUser?: boolean | null, existingEmail?: boolean | null } };

export type LoginGuestMutationVariables = Exact<{ [key: string]: never; }>;


export type LoginGuestMutation = { __typename?: 'Mutation', loginGuest: number };

export type LogOutGuestMutationVariables = Exact<{ [key: string]: never; }>;


export type LogOutGuestMutation = { __typename?: 'Mutation', logOutGuest: boolean };

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

export type ChangeOrderMutationVariables = Exact<{
  tasksId: Array<Scalars['Int']['input']> | Scalars['Int']['input'];
  orders: Array<Scalars['Int']['input']> | Scalars['Int']['input'];
}>;


export type ChangeOrderMutation = { __typename?: 'Mutation', changeOrder: boolean };

export type ChangeSubTaskMutationVariables = Exact<{
  SubTaskID: Scalars['Int']['input'];
}>;


export type ChangeSubTaskMutation = { __typename?: 'Mutation', changeSubTask: boolean };
