<?php

    namespace App\GraphQL\Datasource;


    class BoardDataSource extends BaseDataSource
    {
        private string $GET_BOARDS_STATEMENT = "SELECT b.id    as board_id,
       b.name  as board_name,
       c.id    as column_id,
       c.name  as column_name,
       t.id    as task_id,
       t.title as task_title,
       t.description as task_description,
       t.status as task_status,
       t.statusId as statusId,
       s.id    as subtask_id,
       s.title as subtask_title,
       s.isCompleted
FROM boards b
         LEFT JOIN board_column bc ON bc.boardId = b.id
         LEFT JOIN columns c ON c.id = bc.columnId
         LEFT JOIN column_task ct ON c.id = ct.columnId
         LEFT JOIN tasks t ON ct.taskId = t.id
         LEFT JOIN tasks_sub ON t.id = tasks_sub.taskId
         LEFT JOIN subtasks s ON tasks_sub.subTaskId = s.id";
        private string $EDIT_BOARD_STATEMENT = "UPDATE kanban.boards t SET t.name = :name WHERE t.id = :id";
        private string $DELETE_FROM_BOARD_STATEMENT = "DELETE FROM kanban.boards WHERE id = :id";
        private string $ADD_TO_BOARD_STATEMENT = "INSERT INTO kanban.boards (name, userId) VALUES (:name, 0)";
        private string $GET_BOARD_ID = "SELECT id FROM kanban.boards WHERE name = :name";
        private string $ADD_BOARD_COLUMN = "INSERT INTO kanban.board_column (boardId, columnId) VALUES (:boardId,:columnId)";

        public function getBoardsWithRelations()
        {
            $flat = $this->db->query($this->GET_BOARDS_STATEMENT)->get();
            return $this->groupData($flat);
        }


        public function editBoard($boardId, $boardName)
        {
            $this->db->query($this->EDIT_BOARD_STATEMENT, ["id" => $boardId, 'name' => $boardName]);
        }

        public function deleteBoard($boardId)
        {
            $this->db->query($this->DELETE_FROM_BOARD_STATEMENT, ['id' => $boardId]);
        }

        public function addBoard($boardName)
        {
            // first iterate over the columnsIDs array and add each column to the DB by calling its method
            $this->db->query($this->ADD_TO_BOARD_STATEMENT, ['name' => $boardName]);
            return $this->db->query($this->GET_BOARD_ID, ['name' => $boardName])->get();
        }

    }