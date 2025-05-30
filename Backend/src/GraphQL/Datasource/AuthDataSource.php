<?php

    namespace App\GraphQL\Datasource;

    use App\GraphQL\Resolvers\Queries\Auth;
    use PDOException;


    class AuthDataSource extends BaseDataSource
    {
        private string $REGISTER_NEW_USER = "INSERT  INTO kanban.users (username, email, password, created_at) VALUES (:user, :email, :password, DEFAULT)";
        private string $GET_USER_ID = "SELECT id FROM kanban.users WHERE username = :user";

        public function handleRegister($password, $username, $email)
        {
            $userExists = $this->db->query("SELECT COUNT(*) as count FROM kanban.users WHERE username = :username", [':username' => $username])->find()['count'] > 0;
            $emailExists = $this->db->query("SELECT COUNT(*) as count FROM kanban.users WHERE email = :email", [':email' => $email])->find()['count'] > 0;
            if ($userExists || $emailExists) {
                return ([
                    'successful' => false,
                    'userId' => null,
                    'existingUser' => $userExists,
                    'existingEmail' => $emailExists,

                ]);
            }
            try {
                $this->db->query($this->REGISTER_NEW_USER, [':user' => $username, ':email' => $email, ':password' => $password]);
            } catch (PDOException  $e) {
//                string(102) "SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry 'ahmed' for key 'users.username'"
//                string(109) "SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry 'ahmed@gmail.com' for key 'users.email'"
//                dd($e->getCode());
                $message = $e->getMessage();
                $code = $e->getCode();
                if ($code == 23000) {
                    $hasUsername = str_contains($username, 'username');
                    $hasEmail = str_contains($username, 'email');
                    if ($hasEmail || $hasUsername) {
                        return ([
                            'successful' => false,
                            'userId' => null,
                            'existingUser' => $hasUsername,
                            'existingEmail' => $hasEmail,
                        ]);
                    }
                }
                return ([]);
            }
            $id = $this->db->query($this->GET_USER_ID, [':user' => $username])->find();
            $id = $id['id'];
            $user = [
                'id' => $id,
                'username' => $username,
                'email' => $email,
            ];
            Auth::newSession($user);
            return ([
                'successful' => true,
                'userId' => $id,
            ]);
        }

        public function handleLogin($plainPassword, $username)
        {
            $user = $this->db->query("SELECT * FROM kanban.users WHERE username = :username", [
                ':username' => $username
            ])->get();

            if (!$user) {
                return ['message' => 'USER_NOT_FOUND', 'validity' => null];
            };

            $user = $user[0];
//            dd($plainPassword===$user['password']);
//            $passwordHas = password_hash('123',PASSWORD_DEFAULT);
//            dd($passwordHas);
            if (!password_verify($plainPassword, $user['password'])) {
                return ['message' => 'INVALID_PASSWORD', 'validity' => null];
            }

            return [
                'message' => 'credentials are correct',
                'validity' => true,
                'user' => ['id' => $user['id'],
                    'username' => $user['username'],
                    'email' => $user['email']],
            ];
        }


    }