<?php

    use App\GraphQL\Resolvers\Mutation\EditBoard;
    use App\GraphQL\Resolvers\Mutation\EditTask;

    function base_path($path)
    {
        return BASE_PATH . $path;
    }

    function abort($code = 404)
    {
        http_response_code($code);


        die();
    }

    function dd($value)
    {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";

        die();
    }


    function insertData()
    {
        $jsonData = file_get_contents(__DIR__ . '/data.json'); // Uses current script directory
        $data = json_decode($jsonData, true);

        foreach ($data['boards'] as $board) {
            $boardColumnsId = array_map(fn($col) => $col['name'], $board['columns']);
            $boardArgs = [
                'boardName' => $board['name'],
                'boardColumnsId' => $boardColumnsId
            ];

            $boardReturn = (new EditBoard($boardArgs))->addBoard();
            $boardId = $boardReturn['boardId'];
            $colIds = $boardReturn['columnIds'];
            $columns = $board['columns'];
            foreach ($columns as $ind => $column) {
                $tasks = $column['tasks'];
                foreach ($tasks as $index => $task) {
                    $inputTask = [
                        'title' => $task['title'],
                        'description' => $task['description'],
                        'status' => $task['status'],
                        'statusId' => $colIds[$ind],
                        'subtasks' => $task['subtasks'],
                        'order' => $index + 1,
                    ];
                    $boardArgs = [
                        'inputTask' => $inputTask
                    ];
                    (new EditTask($boardArgs))->addTask();
                }
            }
        }
    }