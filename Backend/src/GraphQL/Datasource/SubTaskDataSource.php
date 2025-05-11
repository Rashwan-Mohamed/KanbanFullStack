<?php

    namespace App\GraphQL\Datasource;

    class SubTaskDataSource extends BaseDataSource
    {

        private string $ADD_TO_SUBTASKS_STATEMENT = "INSERT INTO kanban.subtasks (title, isCompleted) VALUES (:title, DEFAULT)";
        private string $EDIT_SUBTASK_STATEMENT = "UPDATE kanban.subtasks t SET  t.title = :title WHERE t.id = :id";
        private string $DELETE_FROM_SUBTASKS_STATEMENT = "DELETE FROM kanban.subtasks WHERE id = :id";
        private string $GET_SUBTASK_ID = "SELECT id FROM kanban.subtasks  ORDER BY id DESC LIMIT 1";
        private string $GET_SUBTASK_NAME = "SELECT title FROM kanban.subtasks WHERE id = :id";
        private string $GET_SUBTASK_TASK = "SELECT subTaskId FROM kanban.tasks_sub WHERE taskId = :id";
        private string $GET_SUBTASK_STATE = "SELECT isCompleted FROM kanban.subtasks WHERE id = :id";
        private string $ADD_SUBTASK_TASK = "INSERT INTO kanban.tasks_sub (taskId, subTaskId) VALUES (:taskId,:subTaskId)";
        private string $CHANGE_SUBTASK_STATE = "UPDATE kanban.subtasks t SET t.isCompleted = :com WHERE t.id = :id";

        public function editSubTask($subTasks, $taskId)
        {
            $subTaskNames = [];
            $newSubIds = [];
            foreach ($subTasks as $subTask) {
                $subId = $subTask['id'] ?? null;
                $subTaskName = $subTask['title'];
                if (isset($subId)) {
                    $this->db->query($this->EDIT_SUBTASK_STATEMENT, ['title' => $subTaskName, 'id' => $subId]);

                } else {
                    $newSubIds[] = $this->addSubTask($subTaskName, 0, $taskId);
                }
                $subTaskNames[] = $subTaskName;
            }
            $existingSub = $this->db->query($this->GET_SUBTASK_TASK, ['id' => $taskId])->get();
            foreach ($existingSub as $subTask) {
                $idea = $subTask['subTaskId'];
                $subName = $this->db->query($this->GET_SUBTASK_NAME, ['id' => $idea])->get();
                if (!in_array($subName[0]['title'], $subTaskNames)) {
                    $this->deleteSubTask($idea);
                }
            }
            return $newSubIds;
        }

        public function changeSubTask($subTaskId)
        {
            $state = $this->db->query($this->GET_SUBTASK_STATE, ["id" => $subTaskId])->get();
            $newState = $state[0]['isCompleted'];
            if ($newState === 0) {
                $newState = 1;
            } else {
                $newState = 0;
            }
            $this->db->query($this->CHANGE_SUBTASK_STATE, ["id" => $subTaskId, "com" => $newState]);
            // get isCompleted first then change it.
        }

        public function deleteSubTask($taskId)
        {
            $this->db->query($this->DELETE_FROM_SUBTASKS_STATEMENT, ["id" => $taskId]);
        }

        public function taskSubs($taskId)
        {
            $existingSub = $this->db->query($this->GET_SUBTASK_TASK, ['id' => $taskId])->get();
            foreach ($existingSub as $subId) {
                $idea = $subId['subTaskId'];
                $this->deleteSubTask($idea);
            }
        }

        // adds a single Subtask to the db and relate it to a column
        public function addSubTask($title, $isCompleted, $taskId)
        {
            $this->db->query($this->ADD_TO_SUBTASKS_STATEMENT, ['title' => $title]);
            $y = $this->db->query($this->GET_SUBTASK_ID)->get();
            $id = $y[0]['id'];
            $this->db->query($this->ADD_SUBTASK_TASK, ['taskId' => $taskId, 'subTaskId' => $id]);
            return $id;
        }

    }