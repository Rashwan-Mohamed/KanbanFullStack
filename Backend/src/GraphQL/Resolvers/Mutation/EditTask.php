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
            $this->ds()->editTask($this->args['id'], $this->args['name']);
        }

        public function editTaskStatus()
        {
            $this->ds()->editTaskStatus($this->args['taskId'], $this->args['statusID']);
        }

        public function deleteTask()
        {
            $this->ds()->deleteTask($this->args['taskID']);
        }

        public function addTask()
        {
            //a$tasksTitle, $taskDesc, $taskStatus, $statusId
            $task = $this->args['inputTask'];
            $taskId = $this->ds()->addTask($task['title'], $task['description'], $task['status'], $task['statusId']);
            $suBTC = new SubTaskDataSource();
            foreach ($task['subtasks'] as $subTask) {
                $suBTC->addSubTask($subTask['title'], $subTask['isCompleted'], $taskId);
            }
            // this gets a single Task and adds it to the DB and relate it to the specified column, then adds its
            // subtasks also to the DB then relate each one of them to that task ID which his fetched after pushing it to the DB
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