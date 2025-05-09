<?php

    namespace App\GraphQL\Datasource;

    class SubTaskDataSource extends BaseDataSource
    {

        private string $ADD_TO_SUBTASKS_STATEMENT = "INSERT INTO kanban.subtasks (title, isCompleted) VALUES (:title, DEFAULT)";
        private string $EDIT_SUBTASK_STATEMENT = "UPDATE kanban.subtasks t SET  t.title = :title, t.isCompleted = :isCompleted WHERE t.id = :id";
        private string $DELETE_FROM_SUBTASKS_STATEMENT = "DELETE FROM kanban.subtasks WHERE id = :id";
        private string $GET_SUBTASK_ID = "SELECT id FROM kanban.subtasks  ORDER BY id DESC LIMIT 1";
        private string $GET_SUBTASK_NAME = "SELECT title FROM kanban.subtasks WHERE id = :id";
        private string $GET_SUBTASK_TASK = "SELECT taskID FROM kanban.tasks_sub WHERE taskId = :id";
        private string $ADD_SUBTASK_TASK = "INSERT INTO kanban.tasks_sub (taskId, subTaskId) VALUES (:taskId,:subTaskId)";

        public function editSubTask($taskIds, $taskNames, $columnId)
        {

        }

        public function deleteSubTask($taskId)
        {

        }

        // adds a single Subtask to the db and relate it to a column
        public function addSubTask($title, $isCompleted, $taskId)
        {
            $this->db->query($this->ADD_TO_SUBTASKS_STATEMENT, ['title' => $title]);
            $y = $this->db->query($this->GET_SUBTASK_ID)->get();
            $id = $y[0]['id'];
            $this->db->query($this->ADD_SUBTASK_TASK, ['taskId' => $taskId, 'subTaskId' => $id]);
        }

    }