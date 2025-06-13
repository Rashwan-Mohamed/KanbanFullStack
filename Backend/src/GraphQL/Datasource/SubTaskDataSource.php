<?php

    namespace App\GraphQL\Datasource;

    class SubTaskDataSource extends BaseDataSource
    {

        private string $ADD_TO_SUBTASKS_STATEMENT = "INSERT INTO subtasks (title, isCompleted,taskId) VALUES (:title, :isCompleted, :taskId)";
        private string $EDIT_SUBTASK_STATEMENT = "UPDATE subtasks t SET  t.title = :title WHERE t.id = :id";
        private string $DELETE_FROM_SUBTASKS_STATEMENT = "DELETE FROM subtasks WHERE id = :id";
        private string $GET_SUBTASK_ID = "SELECT id FROM subtasks  ORDER BY id DESC LIMIT 1";
        private string $GET_SUBTASK_NAME = "SELECT title FROM subtasks WHERE id = :id";
        private string $GET_SUBTASK_TASK = "SELECT id,title FROM subtasks WHERE taskId = :id";
        private string $GET_SUBTASK_STATE = "SELECT isCompleted FROM subtasks WHERE id = :id";
        private string $CHANGE_SUBTASK_STATE = "UPDATE subtasks t SET t.isCompleted = :com WHERE t.id = :id";

        public function editSubTask($subTasks, $taskId)
        {
            $subTaskNames = [];
            $newSubIds = [];
            foreach ($subTasks as $subTask) {
                $subId = $subTask['id'] ?? null;
                $subTaskName = $subTask['title'];
                if (($subId) !== -1) {
                    $this->db->query($this->EDIT_SUBTASK_STATEMENT, ['title' => $subTaskName, 'id' => $subId]);
                } else {
                    $newSubIds[] = $this->addSubTask($subTaskName, 0, $taskId);
                }
                $subTaskNames[] = $subTaskName;
            }
            $existingSub = $this->db->query($this->GET_SUBTASK_TASK, ['id' => $taskId])->get();
            foreach ($existingSub as $subTask) {
                $idea = $subTask['id'];
                $subName = $subTask['title'];
                if (!in_array($subName, $subTaskNames)) {
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
            return true;
        }

        public function deleteSubTask($taskId)
        {
            $this->db->query($this->DELETE_FROM_SUBTASKS_STATEMENT, ["id" => $taskId]);
        }


        // adds a single Subtask to the db and relate it to a column
        public function addSubTask($title, $isCompleted, $taskId)
        {
            $this->db->query($this->ADD_TO_SUBTASKS_STATEMENT, ['title' => $title, 'taskId' => $taskId, 'isCompleted' => $isCompleted ? 1 : 0]);
            $y = $this->db->query($this->GET_SUBTASK_ID)->get();
            return $y[0]['id'];
        }

    }