<?php

    namespace App\GraphQL\Datasource;

    use Core\App;
    use Core\Database;

    abstract class BaseDataSource
    {
        protected Database $db;

        public function __construct()
        {
            $this->db = App::resolve(Database::class);
        }

        protected function groupData($flat)
        {
            $boards = [];

            foreach ($flat as $row) {
                $boardId = $row['board_id'];

                // Ensure board exists in array
                if (!isset($boards[$boardId])) {
                    $boards[$boardId] = [
                        'id' => $boardId,
                        'name' => $row['board_name'],
                        'columns' => []
                    ];
                }

                // Add columns
                $columnId = $row['column_id'];
                if ($columnId && !isset($boards[$boardId]['columns'][$columnId])) {
                    $boards[$boardId]['columns'][$columnId] = [
                        'id' => $columnId,
                        'name' => $row['column_name'],
                        'tasks' => []
                    ];
                }

                // Add tasks
                $taskId = $row['task_id'];
                if ($taskId && !isset($boards[$boardId]['columns'][$columnId]['tasks'][$taskId])) {
                    $boards[$boardId]['columns'][$columnId]['tasks'][$taskId] = [
                        'id' => $taskId,
                        'title' => $row['task_title'],
                        'description' => $row['task_description'],
                        'status' => $row['task_status'],
                        'statusId' => $row['statusId'],
                        'subtasks' => []
                    ];
                }

                // Add subtasks
                $subtaskId = $row['subtask_id'];
                if ($subtaskId) {
                    $boards[$boardId]['columns'][$columnId]['tasks'][$taskId]['subtasks'][] = [
                        'id' => $subtaskId,
                        'title' => $row['subtask_title'],
                        'isCompleted' => (bool)$row['isCompleted']
                    ];
                }
            }

            // Convert indexed arrays to properly formatted JSON
            foreach ($boards as &$board) {
                $board['columns'] = array_values($board['columns']);
                foreach ($board['columns'] as &$column) {
                    $column['tasks'] = array_values($column['tasks']);
                }
            }

            return array_values($boards);
        }
    }
