<?php

class EnvResolver
{
    public static function resolve(): array
    {
        try {
            $loader = new \josegonzalez\Dotenv\Loader('../.env');
            $env = $loader->parse()->toEnv()->toArray();
            return $env;
        } catch (\Exception $e) {
            throw new \Exception('There was a problem with parsing .env file: ' . $e->getMessage());
        }
    }
}
