<?php

    namespace App\GraphQL\Resolvers\Mutation;

    use App\GraphQL\Datasource\BoardDataSource;
    use App\GraphQL\Datasource\ColumnDataSource;


    class EditBoard extends BaseMutationResolver
    {

        protected function createDataSource()
        {
            return new BoardDataSource();
        }

        public function editBoard()
        {
            $this->ds()->editBoard($this->args['boardID'], $this->args['boardName']);
        }

        public function deleteBoard()
        {
            $this->ds()->deleteBoard($this->args['boardID']);
        }

        public function addBoard()
        {
            $columnsNamesArr = $this->args['boardColumnsId'];
            $boardId = $this->ds()->addBoard($this->args['boardName']);
            foreach ($columnsNamesArr as $columnsName) {
                (new ColumnDataSource())->addColumn($columnsName, $boardId[0]['id']);
            }
        }
    }