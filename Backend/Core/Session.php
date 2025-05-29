<?php

    namespace Core;

    class Session
    {
        static function ensureSession()
        {
            if (session_status() === PHP_SESSION_NONE) {
                session_set_cookie_params([
                    'lifetime' => 0,
                    'path' => '/',
                    'domain' => '',
                    'secure' => true,
                    'httponly' => true,
                    'samesite' => 'Strict',
                ]);
                session_start();
            }
        }


        public static function has($key)
        {
            static::ensureSession();
            return (boolean)static::get($key);
        }

        public static function put($key, $value)
        {
            static::ensureSession();
            $_SESSION[$key] = $value;
        }

        public static function get($key, $default = null)
        {
            static::ensureSession();
            return $_SESSION[$key] ?? $default;
        }


        public static function flush()
        {
            static::ensureSession();
            $_SESSION = [];
        }

        public static function destroy()
        {
            static::ensureSession();
            static::flush();
            session_destroy();
            $params = session_get_cookie_params();
            setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
        }
    }