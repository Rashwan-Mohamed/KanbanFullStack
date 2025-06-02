<?php

    namespace App\GraphQL\Datasource;

    use App\GraphQL\Resolvers\Mutation\Auth;
    use PDOException;


    class AuthDataSource extends BaseDataSource
    {
        protected string $REGISTER_NEW_USER = "INSERT  INTO kanban.users (username, email, password, created_at,isGuest) VALUES (:user, :email, :password, DEFAULT,:isGuest)";
        protected string $GET_USER_ID = "SELECT id FROM kanban.users WHERE username = :user";
        protected string $GET_LAST_GUEST_ADDED_USER = "SELECT * FROM kanban.users WHERE isGuest=1 ORDER BY created_at DESC LIMIT 1";
        protected string $DELETE_USER = "DELETE FROM kanban.users WHERE id = :id";
        protected string $DELETE_ALL_GUESTS_USERS = "DELETE FROM kanban.users WHERE isGuest = 1 AND guest_expired_at < NOW()";
        protected string $REGISTER_GUEST = "INSERT INTO kanban.users (username, email, password, created_at,isGuest,guest_expired_at) VALUES (DEFAULT, DEFAULT, 123, DEFAULT,1,NOW() + INTERVAL 1 HOUR)";

        public function handleRegister($password, $username, $email, $guest = false)
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
                $this->db->query($this->REGISTER_NEW_USER, [':user' => $username, ':email' => $email, ':password' => $password, ':isGuest' => $guest ? 1 : 0]);
            } catch (PDOException  $e) {
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
                'isGuest' => $guest,
            ];
            Auth::newSession($user);
            insertData();
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
                    'email' => $user['email'], 'isGuest' => $user['isGuest']],
            ];
        }

        public function handleDeleteUser($id)
        {
            $this->db->query($this->DELETE_USER, ['id' => $id]);
            return true;
        }

        public function handleNewGuest()
        {
            $this->db->query($this->REGISTER_GUEST);
            $user = $this->db->query($this->GET_LAST_GUEST_ADDED_USER)->find();
            Auth::newSession($user);
            insertData();
            return $user['id'];
        }

        public function cleanGuests()
        {
            $this->db->query($this->DELETE_ALL_GUESTS_USERS);
            return "Old guest users deleted successfully at " . date('Y-m-d H:i:s') . "\n";
        }
    }