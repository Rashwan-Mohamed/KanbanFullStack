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

            $colNames = $this->args['columnName'];
            $colIds = $this->args['columnID'];
            $boardId = $this->args['boardID'];
            return ['colIds' => $this->ds()->editColumn($colIds, $colNames, $boardId)];
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
            $colIds = [];
            $arrColumns = $this->args['columnName'];
            foreach ($arrColumns as $columnName) {
                $colIds[$columnName] = $this->ds()->addColumn($columnName, $this->args['boardId']);
            }
            return $colIds;
        }
    }