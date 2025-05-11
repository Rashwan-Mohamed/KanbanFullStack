<?php

    use App\GraphQL\Resolvers\Mutation\EditBoard;
    use App\GraphQL\Resolvers\Mutation\EditColumns;
    use App\GraphQL\Resolvers\Mutation\EditTask;

//    use App\GraphQL\Resolvers\Mutation\EditSubTask;

    $jsonData = file_get_contents(__DIR__ . '/data.json'); // Uses current script directory
    $data = json_decode($jsonData, true);

//    dd($data);
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
            foreach ($tasks as $task) {
                $inputTask = [
                    'title' => $task['title'],
                    'description' => $task['description'],
                    'status' => $task['status'],
                    'statusId' => $colIds[$ind],
                    'subtasks' => $task['subtasks']
                ];
                $boardArgs = [
                    'inputTask' => $inputTask
                ];
                (new EditTask($boardArgs))->addTask();
            }
        }
    }



