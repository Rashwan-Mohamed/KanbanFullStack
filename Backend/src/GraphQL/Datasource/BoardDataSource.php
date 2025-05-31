<?php

    namespace App\GraphQL\Datasource;


    use Core\Session;
    use Exception;

    class BoardDataSource extends BaseDataSource
    {
        private string $GET_BOARDS_STATEMENT = "SELECT b.id          as board_id,
       b.name        as board_name,
       c.id          as column_id,
       c.name        as column_name,
       t.id          as task_id,
       t.title       as task_title,
       t.description as task_description,
       t.status      as task_status,
       t.statusId    as statusId,
       t.order       as task_order,
       ts.id         as subtask_id,
       ts.title      as subtask_title,
       ts.isCompleted
FROM kanban.boards b
         LEFT JOIN kanban.columns c on c.boardId = b.id
         LEFT JOIN kanban.tasks t ON t.statusId = c.id
         LEFT JOIN kanban.subtasks ts ON ts.taskId = t.id
WHERE b.userId = :userId
";
        private string $EDIT_BOARD_STATEMENT = "UPDATE kanban.boards t SET t.name = :name WHERE t.id = :id";
        private string $DELETE_FROM_BOARD_STATEMENT = "DELETE FROM kanban.boards WHERE id = :id";
        private string $ADD_TO_BOARD_STATEMENT = "INSERT INTO kanban.boards (name, userId) VALUES (:name, :userId)";
        private string $GET_BOARD_ID = "SELECT id FROM kanban.boards WHERE name = :name AND userId = :userId";

        public function getBoardsWithRelations($userId)
        {
            try {
                $flat = $this->db->query($this->GET_BOARDS_STATEMENT, ['userId' => $userId['userId']])->get();
            } catch (Exception $e) {
                error_log("Failed To Fetch Boards: " . $e->getMessage());
                echo "Fetching Boards Error: " . $e->getMessage();
                throw new \Error("Fetching Boards failed.");
            }
            return $this->groupData($flat);
        }


        public function editBoard($boardId, $boardName)
        {
            try {
                $this->db->query($this->EDIT_BOARD_STATEMENT, ["id" => $boardId, 'name' => $boardName]);
                return true;
            } catch (Exception $e) {
                throw new \Error("Edit Board failed.");
            }
        }

        public function deleteBoard($boardId)
        {
            try {
                return $this->db->query($this->DELETE_FROM_BOARD_STATEMENT, ['id' => $boardId]);
            } catch (Exception $e) {
                throw new \Error("Delete Board failed.");
            }
        }

        public function addBoard($boardName, $userId)
        {
            $this->db->query($this->ADD_TO_BOARD_STATEMENT, ['name' => $boardName, 'userId' => $userId]);
            return $this->db->query($this->GET_BOARD_ID, ['name' => $boardName, 'userId' => $userId])->get();
        }

    }