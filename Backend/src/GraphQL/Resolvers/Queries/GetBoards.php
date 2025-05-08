<?php

    namespace App\GraphQL\Resolvers\Queries;


    use App\GraphQL\Datasource\BoardDataSource;

    class GetBoards
    {
        public static function getBoards()
        {
            $source = new BoardDataSource();
            return $source->getBoardsWithRelations();
        }
    }