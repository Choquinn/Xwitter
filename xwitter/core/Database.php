<?php

class Database
{
    private $pdo;
    private $config;

    public function __construct()
    {
        $this->config = require '../config/config.php';
        $this->connect();
    }

    private function connect()
    {
        $dbConfig = $this->config['db'];

        $dsn = 'mysql:host=' . $dbConfig['host'] . ';dbname=' . $dbConfig['dbname'] . ';charset=' . $dbConfig['charset'];
        try {
            $this->pdo = new PDO($dsn, $dbConfig['user'], $dbConfig['password']);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erro de conexão: ' . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->pdo;
    }
}

