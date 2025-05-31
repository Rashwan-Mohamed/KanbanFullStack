<?php

    namespace App\GraphQL\Datasource;

    class ColumnDataSource extends BaseDataSource
    {

        private string $EDIT_COLUMN_STATEMENT = " UPDATE kanban.columns t SET t.name = :name WHERE t.id = :id";
        private string $DELETE_FROM_COLUMNS_STATEMENT = "DELETE FROM kanban.columns WHERE id = :id";
        private string $ADD_TO_COLUMNS_STATEMENT = "INSERT INTO kanban.columns (name,boardId) VALUES (:name,:boardId)";
        private string $GET_COLUMN_ID = "SELECT id FROM kanban.columns  ORDER BY id DESC LIMIT 1";
        private string $GET_COLUMN_NAME = "SELECT name FROM kanban.columns WHERE id = :id";
        private string $GET_BOARD_COLUMN = "SELECT id,name  FROM kanban.columns WHERE boardId = :id";

        public function editColumn($columnIds, $columnNames, $boardId)
        {
            // this function receives three parameters. 1. array of columnsId 2.array of corresponding columns name 3.the board ID associated with these columns
            // you have to do something, first check if that column id exist, if yes, modify its name, if no add it and add it the that board
            // then get columns ids associated with that boardId, if a column Id doesn't exist in that list it means it has been dropped! then drop it
            $newColumnsIds = [];
            foreach ($columnIds as $index => $columnId) {
                if ($columnId !== -1) {
                    $this->db->query($this->EDIT_COLUMN_STATEMENT, ['name' => $columnNames[$index], 'id' => $columnId]);
                } else {
                    $newColumnsIds[] = $this->addColumn($columnNames[$index], $boardId);
                }
            }
            $existingCol = $this->db->query($this->GET_BOARD_COLUMN, ['id' => $boardId])->get();
            foreach ($existingCol as $col) {
                $idea = $col['id'];
                $colName = $col['name'];
                if (!in_array($colName, $columnNames)) {
                    $this->deleteColumn($idea);
                }
            }
            return $newColumnsIds;
        }


        public function deleteColumn($columnId)
        {
            $this->db->query($this->DELETE_FROM_COLUMNS_STATEMENT, ['id' => $columnId]);
        }

        public function deleteBoardColumn($boardId)
        {
            $columns = $this->db->query($this->GET_BOARD_COLUMN, ['id' => $boardId])->get();
            foreach ($columns as $col) {
                $idea = $col['id'];
                $this->deleteColumn($idea);
            }
        }


        public function addColumn($columnsName, $boardId)
        {
            $this->db->query($this->ADD_TO_COLUMNS_STATEMENT, ['name' => $columnsName, 'boardId' => $boardId]);
            $y = $this->db->query($this->GET_COLUMN_ID)->get();
            return $y[0]['id'];
        }
    }