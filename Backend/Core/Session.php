<?php

    namespace Core;

    class Session
    {
        public static function ensureSession(): void
        {
            if (session_status() === PHP_SESSION_NONE) {
                // Set secure cookie params as needed
                session_set_cookie_params([
                    'lifetime' => 0,
                    'path' => '/',
                    'domain' => '', // You could make this dynamic if needed
                    'secure' => false, // Change to true in production (HTTPS)
                    'httponly' => true,
                    'samesite' => 'Lax', // or 'None' if needed for cross-origin
                ]);

                session_start();

                error_log('PHPSESSID: ' . session_id());
                error_log('SESSION DATA: ' . json_encode($_SESSION));
            }
        }

        public static function has(string $key): bool
        {
            self::ensureSession();
            return isset($_SESSION[$key]);
        }

        public static function put(string $key, $value): void
        {
            self::ensureSession();
            $_SESSION[$key] = $value;
        }

        public static function get(string $key, $default = null)
        {
            self::ensureSession();
            return $_SESSION[$key] ?? $default;
        }

        public static function flush(): void
        {
            self::ensureSession();
            $_SESSION = [];
        }

        public static function destroy(): void
        {
            $_SESSION = [];
            // Remove session cookie
            $params = session_get_cookie_params();
            setcookie('PHPSESSID', '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
            session_destroy();
            error_log('Session destroyed');
        }
    }
