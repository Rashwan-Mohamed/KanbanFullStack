<?php


    namespace App\Controller;

    use App\GraphQL\Resolvers\Mutation\EditBoard;
    use App\GraphQL\Resolvers\Mutation\EditColumns;
    use App\GraphQL\Resolvers\Mutation\EditSubTask;
    use App\GraphQL\Resolvers\Mutation\EditTask;
    use App\GraphQL\Resolvers\Queries\GetBoards;
    use GraphQL\GraphQL as GraphQLBase;
    use GraphQL\Language\Parser;
    use GraphQL\Utils\AST;
    use GraphQL\Utils\BuildSchema;
    use RuntimeException;
    use Throwable;


    class GraphQL
    {
        private static function getSchema()
        {
            $schemaPath = __DIR__ . '/../GraphQL/schema.graphql';
            $cacheFile = __DIR__ . '/schema.cache.php';
            if (!file_exists($cacheFile)) {
                $document = Parser::parse(file_get_contents($schemaPath));
                file_put_contents($cacheFile, '<?php return ' . var_export(AST::toArray($document), true) . ';');
            } else {
                $document = AST::fromArray(require $cacheFile);
            }

            return BuildSchema::build($document);

        }

        public static function handle()
        {
            try {
                $schema = self::getSchema();
                $rootResolver = [
                    'getBoards' => fn() => (new GetBoards())->getBoards(),
                    'editBoard' => fn($rootValue, $args) => (new EditBoard($args))->editBoard(),
                    'deleteBoard' => fn($rootValue, $args) => (new EditBoard($args))->deleteBoard(),
                    'addBoard' => fn($rootValue, $args) => (new EditBoard($args))->addBoard(),
                    'editColumn' => fn($rootValue, $args) => (new EditColumns($args))->editColumn(),
                    'deleteColumn' => fn($rootValue, $args) => (new EditColumns($args))->deleteColumn(),
                    'addColumn' => fn($rootValue, $args) => (new EditColumns($args))->addColumn(),
                    'editTask' => fn($rootValue, $args) => (new EditTask($args))->editTask(),
                    'editTaskStatus' => fn($rootValue, $args) => (new EditTask($args))->editTaskStatus(),
                    'deleteTask' => fn($rootValue, $args) => (new EditTask($args))->deleteTask(),
                    'addTask' => fn($rootValue, $args) => (new EditTask($args))->addTask(),
                ];


                $rawInput = file_get_contents('php://input');
                if ($rawInput === false) {
                    throw new RuntimeException('Failed to get php://input');
                }

                $input = json_decode($rawInput, true);
                $query = $input['query'] ?? '';
                $variableValues = $input['variables'] ?? null;
                $result = GraphQLBase::executeQuery($schema, $query, $rootResolver, null, $variableValues);
                $output = $result->toArray();

            } catch (Throwable $e) {
                error_log($e->getMessage());
                echo json_encode([
                    'error' => [
                        'message' => $e->getMessage(),
                        'trace' => $e->getTrace()
                    ]
                ]);
                exit;
            }
            header('Content-Type: application/json; charset=UTF-8');
            echo json_encode($output);
        }
    }

    GraphQL::handle();
