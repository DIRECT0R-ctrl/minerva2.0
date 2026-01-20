<?php
declare(strict_types=1);

final class Database
{
    public \PDO $pdo;

    public function __construct(array $config)
    {
        $db = $config['db'];

        $dsn = "pgsql:host={$db['host']};port={$db['port']};dbname={$db['dbname']}";

        $this->pdo = new \PDO($dsn, $db['user'], $db['password'], [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        ]);
    }
}
