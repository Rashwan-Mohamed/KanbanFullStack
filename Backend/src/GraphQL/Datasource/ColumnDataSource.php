<?php

    namespace App\GraphQL\Datasource;

    class ColumnDataSource extends BaseDataSource
    {

        private string $EDIT_COLUMN_STATEMENT = " UPDATE kanban.columns t SET t.name = :name WHERE t.id = :id";
        private string $DELETE_FROM_COLUMNS_STATEMENT = "DELETE FROM kanban.columns WHERE id = :id";
        private string $ADD_TO_COLUMNS_STATEMENT = "INSERT INTO kanban.columns (name) VALUES (:name)";
        private string $GET_COLUMN_ID = "SELECT id FROM kanban.columns  ORDER BY id DESC LIMIT 1";

        private string $ADD_BOARD_COLUMN = "INSERT INTO kanban.board_column (boardId, columnId) VALUES (:boardId,:columnId)";

        public function editColumn($columnId, $columnName)
        {
            $this->db->query($this->EDIT_COLUMN_STATEMENT, ["id" => $columnId, 'name' => $columnName]);
        }

        public function deleteColumn($columnId)
        {
            $this->db->query($this->DELETE_FROM_COLUMNS_STATEMENT, ['id' => $columnId]);
        }

        public function addColumn($columnsName, $boardId)
        {
            $this->db->query($this->ADD_TO_COLUMNS_STATEMENT, ['name' => $columnsName]);
            $y = $this->db->query($this->GET_COLUMN_ID)->get();
            $id = $y[0]['id'];
            $this->db->query($this->ADD_BOARD_COLUMN, ['boardId' => $boardId, 'columnId' => $id]);
        }
    }