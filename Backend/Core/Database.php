<?php

    namespace Core;

    use mysql_xdevapi\Exception;
    use PDO;
    use PDOException;

    class Database
    {

        public $connection;
        public $statement;

        public function __construct($config)
        {
            $env = $config['env'] ?? 'production';

            // Pick DB config based on environment
            $dbConfig = $config['database'][$env];

            $dsn = sprintf(
                'mysql:host=%s;port=%d;dbname=%s;charset=%s',
                $dbConfig['host'],
                $dbConfig['port'],
                $dbConfig['dbname'],
                $dbConfig['charset']
            );
            try {
                $this->connection = new PDO(
                    $dsn,
                    $dbConfig['user'],
                    $dbConfig['password'],
                    [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
                );
            } catch (PDOException $e) {
                die('Database connection failed: ' . $e->getMessage());
            }
        }

        public function query($query, $params = [])
        {
            $this->statement = $this->connection->prepare($query);
            $this->statement->execute($params);
            return $this;
        }

        public function get()
        {
            return $this->statement->fetchAll();
        }

        public function find()
        {
            return $this->statement->fetch(PDO::FETCH_ASSOC);
        }

        public function findOrFail()
        {
            $result = $this->find();

            if (!$result) {
                abort();
            }

            return $result;
        }
    }
