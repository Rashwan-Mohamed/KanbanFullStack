<?php

    namespace Core;

    use mysql_xdevapi\Exception;
    use PDO;
    use PDOException;

    class Database
    {

        public $connection;
        public $statement;

        public function __construct($config, $user = 'root', $password = '123321')
        {
            $dsn = 'mysql:' . http_build_query($config, '', ';');

            try {
                $this->connection = new PDO($dsn, $user, $password, [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Enables throwing exceptions on errors
                ]);
            } catch (PDOException $e) {
                die("Database connection failed: " . $e->getMessage());
            }
        }

        public function query($query, $params = [])
        {
            try {
                $this->statement = $this->connection->prepare($query);
                $this->statement->execute($params);
                return $this;
            } catch (PDOException $e) {
                die("Query Failed: " . $e->getMessage()); // Shows MySQL errors
            }
        }

        public function get()
        {
            return $this->statement->fetchAll();
        }

        public function find()
        {
            return $this->statement->fetch();
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