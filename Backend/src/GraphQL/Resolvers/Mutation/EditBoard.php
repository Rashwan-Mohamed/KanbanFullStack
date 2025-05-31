<?php

    namespace App\GraphQL\Resolvers\Mutation;

    use App\GraphQL\Datasource\BoardDataSource;
    use App\GraphQL\Datasource\ColumnDataSource;
    use Core\Session;


    class EditBoard extends BaseMutationResolver
    {

        protected function createDataSource()
        {
            return new BoardDataSource();
        }

        public function editBoard()
        {
            return $this->ds()->editBoard($this->args['boardID'], $this->args['boardName']);
        }

        public function deleteBoard()
        {
            $boId = $this->args['boardID'];
            (new ColumnDataSource())->deleteBoardColumn($boId);
            return $this->ds()->deleteBoard($boId);
        }

        public function addBoard()
        {
            $user = Session::get('user');
            if (!$user) {
                http_response_code(401);
                return false;
            };
            $userId = $user['id'];
            $columnsNamesArr = $this->args['boardColumnsId'];
            $boardId = $this->ds()->addBoard($this->args['boardName'], $userId);
            $colIds = [];
            foreach ($columnsNamesArr as $columnsName) {
                $colIds[] = (new ColumnDataSource())->addColumn($columnsName, $boardId[0]['id']);
            }
            return [
                'boardId' => $boardId[0]['id'],  // Returning the board ID
                'columnIds' => $colIds          // Returning the column IDs as an array
            ];
        }
    }