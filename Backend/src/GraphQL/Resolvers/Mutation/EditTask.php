<?php

    namespace App\GraphQL\Resolvers\Mutation;


    use App\GraphQL\Datasource\SubTaskDataSource;
    use App\GraphQL\Datasource\TaskDataSource;

    class EditTask extends BaseMutationResolver
    {
        protected function createDataSource()
        {
            return new TaskDataSource();
        }

        public function editTask()
        {
            $inputTask = $this->args['inputTask'];
            $subTasks = $inputTask['subtasks'];
            // first change the task name desc and status along with statusId
            $this->ds()->editTask($inputTask['taskId'], $inputTask['title'], $inputTask['statusId'], $inputTask['status'], $inputTask['description']);
            // second, iterate through the provided array of subtasks and change them one by one then validate if they are a part of our subtasks.
            $newSubIds = (new SubTaskDataSource)->editSubTask($subTasks, $inputTask['taskId']);
            return ['newSubIds' => $newSubIds];
        }

        public function editTaskStatus()
        {
            $this->ds()->editTaskStatus($this->args['taskId'], $this->args['statusID']);
        }

        public function deleteTask()
        {
            (new SubTaskDataSource)->taskSubs($this->args['taskID']);
            $this->ds()->deleteTask($this->args['taskID']);
        }

        public function addTask()
        {
            //a$tasksTitle, $taskDesc, $taskStatus, $statusId0
            $task = $this->args['inputTask'];
            $taskId = $this->ds()->addTask($task['title'], $task['description'], $task['status'], $task['statusId']);
            $suBTC = new SubTaskDataSource();
            $subTaskId = [];
            foreach ($task['subtasks'] as $subTask) {
                $subTaskId[] = $suBTC->addSubTask($subTask['title'], $subTask['isCompleted'], $taskId);
            }
            return ['taskId' => $taskId, 'subTasksIds' => $subTaskId];
        }
    }

    /*
     * array(5) {
  ["title"]=>
  string(3) "dfg"
  ["description"]=>
  string(6) "dfgwer"
  ["status"]=>
  string(1) "A"
  ["statusId"]=>
  string(3) "167"
  ["subtasks"]=>
  array(3) {
    [0]=>
    array(2) {
      ["title"]=>
      string(3) "dfg"
      ["isCompleted"]=>
      bool(false)
    }
    [1]=>
    array(2) {
      ["title"]=>
      string(3) "dfg"
      ["isCompleted"]=>
      bool(false)
    }
    [2]=>
    array(2) {
      ["title"]=>
      string(2) "fg"
      ["isCompleted"]=>
      bool(false)
    }
  }
}
     * */