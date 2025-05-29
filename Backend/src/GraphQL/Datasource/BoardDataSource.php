<?php

    namespace App\GraphQL\Datasource;


    use Exception;

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
       t.order as task_order,
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
            try {
                $flat = $this->db->query($this->GET_BOARDS_STATEMENT)->get();
            } catch (Exception $e) {
                error_log("Delete Task Error: " . $e->getMessage());
                echo "Delete Task Error: " . $e->getMessage();
                throw new Exception("Task deletion failed.");
            }
            return $this->groupData($flat);
        }


        public function editBoard($boardId, $boardName)
        {
            try {
                $this->db->query($this->EDIT_BOARD_STATEMENT, ["id" => $boardId, 'name' => $boardName]);
                return true;
            } catch (Exception $e) {
                throw new Exception("Edit Board failed.");
            }
        }

        public function deleteBoard($boardId)
        {
            $this->db->query($this->DELETE_FROM_BOARD_STATEMENT, ['id' => $boardId]);
        }

        public function addBoard($boardName)
        {
            $this->db->query($this->ADD_TO_BOARD_STATEMENT, ['name' => $boardName]);
            return $this->db->query($this->GET_BOARD_ID, ['name' => $boardName])->get();
        }

    }