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
            // Hash the password and register the user
            $password = password_hash($password, PASSWORD_DEFAULT);
            return $this->ds()->handleRegister($password, $username, $email);
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
            Session::destroy(); // ❗ Always destroy any session before login attempt
            Session::ensureSession(); // Optionally start a fresh one for safety
            session_regenerate_id(true);
            Session::put('user', ['email' => $user['email'], 'id' => $user['id'], 'username' => $user['username'],'isGuest' => $user['isGuest']]);
            return ([
                'message' => 'Login successful',
                'user' => $user
            ]);

        }

        public function getCurrentUser()
        {
            $user = Session::get('user');
            if ($user) {
                return $user;
            } else {
                http_response_code(401);
                return json_encode(['error' => 'Not logged in']);
            }
        }

        public function logout()
        {
            // Optional: Clear session or token
            Session::destroy();
            return "Logged out";
        }


    }


    // user sends a login request to graphQL,
    // graphQL fetches it and pass it to a resolver
    // so we have Authenticator resolver
    // Auth communicates with the database

    /*
     * use Core\Authenticator;
    use Core\Session;

    Session::destroy(); // ❗ Always destroy any session before login attempt
    Session::ensureSession(); // Optionally start a fresh one for safety

    try {
        $data = json_decode(file_get_contents('php://input'), true);
        $email = $data['email'];
        $password = $data['password'];
        $signedIn = (new Authenticator)->attempt($email, $password);
        if ($signedIn) {
            echo $signedIn;
        } else {
            http_response_code(401); // ❗ Explicitly set HTTP 401 Unauthorized
            echo json_encode(['error' => 'No matching account found for these credentials.']);
        }
    } catch (Exception $e) {
        http_response_code(500); // ❗ Explicitly set HTTP 500 Server Error
        echo json_encode(['error' => $e->getMessage()]);
    }
     *
     * */