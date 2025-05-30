<?php

    namespace App\GraphQL\Resolvers\Queries;


    use App\GraphQL\Datasource\BoardDataSource;

    class GetBoards
    {
        public function getBoards($userId)
        {
            $source = new BoardDataSource();
            return $source->getBoardsWithRelations($userId);
        }
    }