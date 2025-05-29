<?php

    namespace App\GraphQL\Resolvers\Queries;

    use App\GraphQL\Datasource\AuthDataSource;
    use App\GraphQL\Resolvers\Mutation\BaseMutationResolver;
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
            $this->ds()->handleRegister($password, $username, $email);

            return "User registered successfully";
        }

        public function login()
        {
//            $attempts = $cache->get("login_attempts_$email");
//            if ($attempts > 5) {
//                http_response_code(429); // Too many requests
//                echo json_encode(['error' => 'Too many login attempts. Try again later.']);
//                exit;
//            }

            Session::destroy(); // ❗ Always destroy any session before login attempt
            Session::ensureSession(); // Optionally start a fresh one for safety

            $password = $this->args['password'];
            $email = $this->args['email'];

            // Check credentials
            $user = $this->ds()->handleLogin($password, $email);

            if (!$user) {
                http_response_code(401); // ❗ Explicitly set HTTP 401 Unauthorized
                echo json_encode(['error' => 'No matching account found for these credentials.']);
            }
            // after here we can continue with session generation
            session_regenerate_id(true);
            Session::put('user', ['email' => $user['email'], 'id' => $user['userId'], 'username' => $user['userName']]);



            return ([
                'message' => 'Login successful',
                'user' => [
                    'id' => $user['userId'],
                    'email' => $user['email'],
                    'username' => $user['userName'],
                ]
            ]);
        }

        public function getCurrentUser()
        {
            $user = Session::get('user');
            if ($user) {
                echo json_encode($user);
            } else {
                http_response_code(401);
                echo json_encode(['error' => 'Not logged in']);
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