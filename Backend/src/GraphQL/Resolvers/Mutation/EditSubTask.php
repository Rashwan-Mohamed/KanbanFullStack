<?php

    namespace App\GraphQL\Resolvers\Mutation;


    use App\GraphQL\Datasource\SubTaskDataSource;

    class EditSubTask extends BaseMutationResolver
    {
        protected function createDataSource()
        {
            return new SubTaskDataSource();
        }

//        public function editSubTask()
//        {
//            $this->ds()->editSubTask($this->args['id'], $this->args['name']);
//        }

        public function changeSubTask()
        {
            return $this->ds()->changeSubTask($this->args['SubTaskID']);
        }
//
//        public function deleteBoard()
//        {
//            $this->ds()->deleteSubTask($this->args['id']);
//        }
//
//        public function addBoard()
//        {
//            $this->ds()->addSubTask($this->args['name'], $this->args['columns']);
//        }
    }