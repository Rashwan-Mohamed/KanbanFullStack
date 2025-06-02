<?php

    namespace App\GraphQL\Resolvers\Queries;


    use App\GraphQL\Datasource\BoardDataSource;
    use App\GraphQL\Resolvers\Mutation\Auth;

    class GetBoards
    {
        public function getBoards($userId)
        {
            $sessionInfo = Auth::getCurrentUser();
            $user=$sessionInfo['user'];
            if ($user['id'] !== $userId['userId']) {
                http_response_code(401);
                return false;
            }
            $source = new BoardDataSource();
            return $source->getBoardsWithRelations($userId);
        }
    }