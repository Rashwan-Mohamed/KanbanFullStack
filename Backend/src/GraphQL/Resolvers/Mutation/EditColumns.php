<?php

    namespace App\GraphQL\Resolvers\Mutation;

    use App\GraphQL\Datasource\ColumnDataSource;

    class EditColumns extends BaseMutationResolver
    {

        protected function createDataSource()
        {
            return new ColumnDataSource();
        }

        public function editColumn()
        {
            $this->ds()->editColumn($this->args['columnID'], $this->args['columnName']);
        }

        public function deleteColumn()
        {
            $columnsIdArr = $this->args['columnsId'];
            foreach ($columnsIdArr as $columnId) {
                $this->ds()->deleteColumn($columnId);
            }
        }

        public function addColumn()
        {
            $arrColumns = $this->args['columnName'];
            foreach ($arrColumns as $columnName) {
                $this->ds()->addColumn($columnName, $this->args['boardId']);

            }
        }
    }