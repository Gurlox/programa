<?php

class Database
{
    private static $instance;
    private static $connection;

    public static function getInstance(): self
    {
        if (is_null(self::$instance))
        {
            self::$instance = new self();
            self::connect();

        }
        return self::$instance;
    }

    private static function connect(): void
    {
        $env = EnvResolver::resolve();
        $host = $env['MYSQL_HOST'];
        $database = $env['MYSQL_DATABASE'];
        $user = $env['MYSQL_USER'];
        $password = $env['MYSQL_PASSWORD'];

        $connectionString = "mysql:host=$host;dbname=$database;charset=utf8";
        try {
            self::$connection = new PDO($connectionString, $user, $password);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public static function select(string $query, array $params = [])
    {
        $stmt = self::$connection->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
