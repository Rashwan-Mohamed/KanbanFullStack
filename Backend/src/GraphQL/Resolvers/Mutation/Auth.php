<?php

    namespace App\GraphQL\Resolvers\Mutation;

    use App\GraphQL\Datasource\AuthDataSource;

    class Auth extends BaseMutationResolver
    {
        protected function createDataSource()
        {
            return new AuthDataSource();
        }

        public function register()
        {
            $password = $this->args['password'];
            $username = $this->args['username'];
            $email = $this->args['email'];

            // Hash the password and register the user
            $password = password_hash($password, PASSWORD_DEFAULT);
            $this->ds()->handleRegister($password, $username, $email);

            return "User registered successfully";
        }

        public function login()
        {
            $password = $this->args['password'];
            $email = $this->args['email'];

            // Check credentials
            $user = $this->ds()->handleLogin($password, $email);

            if (!$user) {
                throw new \Exception("Invalid email or password");
            }

            // Here you can start a session or generate a token
            // For now, just return user info
            return $user;
        }

        public function logout()
        {
            // Optional: Clear session or token
            return "Logged out";
        }
    }
