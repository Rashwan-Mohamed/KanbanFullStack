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
            $ColumnsID = [];
            foreach ($columnsNamesArr as $columnsName) {
                $ColumnsID[] = (new ColumnDataSource())->addColumn($columnsName);
            }
            $boardId = $this->ds()->addBoard($this->args['boardName'], $this->args['boardColumnsId']);
            $this->ds()->addColumnBoard($boardId, $ColumnsID);

        }
    }