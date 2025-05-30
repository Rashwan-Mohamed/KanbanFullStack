<?php

    namespace App\GraphQL\Datasource;


    class AuthDataSource extends BaseDataSource
    {
        private string $REGISTER_NEW_USER = "INSERT INTO kanban.users (username, email, password, created_at) VALUES (:user, :email, :password, DEFAULT)";
        private string $CHECK_USER = "SELECT * FROM kanban.users WHERE username = :user AND email = :email AND password = :password";

        public function handleRegister($password, $username, $email)
        {
            $this->db->query($this->REGISTER_NEW_USER, [':user' => $username, ':email' => $email, ':password' => $password]);
        }

        public function handleLogin($plainPassword, $username)
        {
            $user = $this->db->query("SELECT * FROM kanban.users WHERE username = :username", [
                ':username' => $username
            ])->get();

            if (!$user) return null;

            $user = $user[0];
//            dd($plainPassword===$user['password']);
//            $passwordHas = password_hash('123',PASSWORD_DEFAULT);
//            dd($passwordHas);
            if (!password_verify($plainPassword, $user['password'])) {
                return null;
            }

            return [
                'id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email']
            ];
        }


    }