<?php

    namespace App\GraphQL\Datasource;

    use Exception;

    class TaskDataSource extends BaseDataSource
    {

        private string $EDIT_TASK_STATEMENT = "UPDATE kanban.tasks t SET t.title = :title, t.description = :description WHERE t.id = :taskId";
        private string $EDIT_TASK_STATUS = "UPDATE kanban.tasks t SET t.status = :status, t.statusId = :statusId WHERE t.id = :taskId";
        private string $DELETE_FROM_TASKS_STATEMENT = "DELETE FROM kanban.tasks WHERE id = :id";
        private string $ADD_TO_TASKS_STATEMENT = "INSERT INTO kanban.tasks (title, description, status, statusId) VALUES (:title, :description,:status, :statusId)";
        private string $GET_TASK_ID = "SELECT id FROM kanban.tasks  ORDER BY id DESC LIMIT 1";
        private string $GET_TASK_NAME = "SELECT title FROM kanban.tasks WHERE id = :id";
        private string $GET_COLUMN_TASK = "SELECT taskId FROM kanban.column_task WHERE columnId = :id";
        private string $GET_COLUMN_NAME = "SELECT name FROM kanban.columns WHERE id = :id";
        private string $ADD_COLUMN_TASK = "INSERT INTO kanban.column_task (columnId, taskId) VALUES (:columnId,:taskId)";
        private string $EDIT_COLUMN_TASK = "UPDATE kanban.column_task t SET t.columnId = :columnId WHERE  t.taskId = :taskId";

        public function editTask($taskId, $taskTitle, $statusId, $status, $description)
        {
            $this->db->query($this->EDIT_TASK_STATEMENT, ['title' => $taskTitle, 'description' => $description, 'taskId' => $taskId]);
            $this->editTaskStatus($taskId, $statusId);
        }

        public function editTaskStatus($taskId, $statusId)
        {
            $statusName = $this->db->query($this->GET_COLUMN_NAME, ['id' => $statusId])->get();
            $statusName = $statusName[0]['name'];
            $this->db->query($this->EDIT_TASK_STATUS, ['statusId' => $statusId, 'taskId' => $taskId, 'status' => $statusName]);
            $this->db->query($this->EDIT_COLUMN_TASK, ['columnId' => $statusId, 'taskId' => $taskId]);
        }

        public function deleteTask($taskId)
        {
            try {
                $this->db->query($this->DELETE_FROM_TASKS_STATEMENT, ['id' => $taskId]);
            } catch (Exception $e) {
                echo "Error deleting task: " . $e->getMessage();
            }
        }


        public function deleteTaskAssocColumn($columnId)
        {
            $existingTask = $this->db->query($this->GET_COLUMN_TASK, ['id' => $columnId])->get();
            foreach ($existingTask as $taskId) {
                $idea = $taskId['taskId'];
                (new SubTaskDataSource)->taskSubs($idea);
                $this->deleteTask($idea);
            }
        }

// adds a single task to the db and relate it to a column
        public function addTask($tasksTitle, $taskDesc, $taskStatus, $statusId)
        {
            $this->db->query($this->ADD_TO_TASKS_STATEMENT, ['title' => $tasksTitle, 'description' => $taskDesc, 'status' => $taskStatus, 'statusId' => $statusId]);
            $y = $this->db->query($this->GET_TASK_ID)->get();
            $id = $y[0]['id'];
            $this->db->query($this->ADD_COLUMN_TASK, ['columnId' => $statusId, 'taskId' => $id]);
            return $id;
        }

    }