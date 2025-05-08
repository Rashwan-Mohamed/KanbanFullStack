<?php

    namespace Core;

    use Core\Middleware\Middleware;

    class Router
    {
        protected $routes = [];

        public function add($method, $uri, $controller)
        {
            $this->routes[] = [
                'uri' => $uri,
                'controller' => $controller,
                'method' => $method,
                'middleware' => null
            ];

            return $this;
        }

        public function get($uri, $controller)
        {
            return $this->add('GET', $uri, $controller);
        }

        public function post($uri, $controller)
        {
            return $this->add('POST', $uri, $controller);
        }

        public function only($middleware)
        {
            $lastRoute = &$this->routes[array_key_last($this->routes)];
            $lastRoute['middleware'] = $middleware;
            return $this;
        }

        public function route($uri, $method)
        {
            foreach ($this->routes as $route) {
                if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
//                    Middleware::resolve($route['middleware']);

                    return require base_path('src/Controller/' . $route['controller']);
                }
            }

            $this->abort();
        }

        protected function abort($code = 404)
        {
            http_response_code($code);
//            dd('NOT FOUND');
            var_dump('NOT FUND');
//            die();
        }

    }