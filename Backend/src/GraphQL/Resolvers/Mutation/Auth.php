<?php

    namespace App\GraphQL\Resolvers\Mutation;

    use App\GraphQL\Datasource\AuthDataSource;
    use Core\Session;

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
            $password = password_hash($password, PASSWORD_DEFAULT);
            $userid = self::getCurrentUser()['user'];
            $userid = $userid['id']?? null;
            return $this->ds()->handleRegister($password, $username, $email, false, $userid ?? null);
        }

        public function login()
        {
            $useCredentials = $this->args['userCredentials'];
            $password = $useCredentials['password'];
            $username = $useCredentials['username'];

            // Check credentials
            $response = $this->ds()->handleLogin($password, $username);

            if (!$response['validity']) {
//                http_response_code(401); // ❗ Explicitly set HTTP 401 Unauthorized
                return ([
                    'message' => $response['message'],
                    'user' => null
                ]);
            }
            // after here we can continue with session generation
            return $this::newSession($response['user']);
        }

        static function newSession($user): array
        {
            Session::destroy();
            Session::ensureSession();
            session_regenerate_id(true);

            Session::put('user', ['email' => $user['email'], 'id' => $user['id'], 'username' => $user['username'], 'isGuest' => $user['isGuest']]);
            return ([
                'message' => 'Login successful',
                'user' => $user
            ]);
        }


        public function logout()
        {
            // Optional: Clear session or token
            Session::destroy();
            $_SESSION = [];
            session_write_close(); // Ensure session is closed
            return true;
        }

        public function changeProfile()
        {
            $newName = $this->args['newName'];
            $newEmail = $this->args['newEmail'];
            $newPassword = $this->args['newPassword'];
            $oldPassword = $this->args['oldPassword'];
            $currentUser = self::getCurrentUser()['user'];
            $userId = $currentUser['id'];
            return $this->ds()->changeProfile($newName, $newEmail, $userId, $oldPassword, $newPassword);
        }

        public function deleteProfile()
        {
            $id = Session::get('user')['id'];
            $userId = $this->args['userId'];
            if ($id !== $userId) {
                return false;
            }
            Session::destroy();
            return $this->ds()->handleDeleteUser($id);
        }

        public static function getCurrentUser()
        {
            $noUser = [
                'user' => null,
                'message' => "Not Logged in",
            ];
            if (!Session::has('user')) {
                return $noUser;
            }

            $user = Session::get('user');
            if ($user) {
                $instance = new self(0);
                $userData = $instance->ds()->getUser($user['id']);

                if ($userData) {
                    return [
                        'user' => $userData,
                        'message' => "Logged_in_user",
                    ];
                } else {
                    Session::destroy();
                }
            }

            return $noUser;
        }


    }


    //    type User {
    //        id: Int!
    //        username: String!
    //        email: String!
    //}
    //type loginResponse {
    //        message:String!
    //        user:User
    //}


    // user sends a login request to graphQL,
    // graphQL fetches it and pass it to a resolver
    // so we have Authenticator resolver
    // Auth communicates with the database

