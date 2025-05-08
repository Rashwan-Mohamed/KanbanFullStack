<?php

    namespace Core;

    use Exception;

    class Container
    {

        protected $bindings = [];

        public function bind($key, $value)
        {
            $this->bindings[$key] = $value;
        }

        /**
         * @throws Exception
         */
        public function resolve($key)
        {

            if (!array_key_exists($key, $this->bindings)) {
                throw new Exception('this key does not exist');
            }
            $resolver = $this->bindings[$key];
            return call_user_func($resolver);

        }
    }