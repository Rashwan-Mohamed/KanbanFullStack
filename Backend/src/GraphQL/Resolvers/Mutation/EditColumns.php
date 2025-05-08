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
            $this->ds()->deleteColumn($this->args['columnID']);
        }

        public function addColumn()
        {
            $this->ds()->addColumn($this->args['columnName']);
        }
    }