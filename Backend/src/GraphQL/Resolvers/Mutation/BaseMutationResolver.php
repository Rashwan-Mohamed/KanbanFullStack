<?php

    namespace App\GraphQL\Resolvers\Mutation;

    abstract class BaseMutationResolver
    {
        protected $args;
        protected $dataSource;

        public function __construct($args)
        {
            $this->args = $args;
            $this->dataSource = $this->createDataSource();
        }

        abstract protected function createDataSource();

        protected function ds()
        {
            return $this->dataSource;
        }
    }