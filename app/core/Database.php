<?php

class Database
{
    private $conn;
    private $stmt;

    private static $database = null;

    private function __construct()
    {
        $db = Config::get('mysql');
        try {
            $this->conn = new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['database'], $db['user'], $db['password']);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Throw exception instead of calling die() so callers can handle the error
            throw new \RuntimeException("Database connection failed: " . $e->getMessage());
        }
    }

    public static function open()
    {
        if (self::$database === null) {
            self::$database = new Database();
        }
        return self::$database;
    }

    public function prepare($query)
    {
        $this->stmt = $this->conn->prepare($query);
    }

    public function bindValue($param, $value)
    {
        $type = self::getPDOType($value);
        $this->stmt->bindValue($param, $value, $type);
    }

    public function bindParam($param, &$value)
    {
        $type = self::getPDOType($value);
        $this->stmt->bindParam($param, $value, $type);
    }

    public function execute($arr = null)
    {
        if ($arr == null) {
            return $this->stmt->execute();
        } else {
            return $this->stmt->execute($arr);
        }
    }
    private static function getPDOType($value)
    {
        if (is_int($value)) {
            return PDO::PARAM_INT;
        } elseif (is_bool($value)) {
            return PDO::PARAM_BOOL;
        } elseif (is_null($value)) {
            return PDO::PARAM_NULL;
        } else {
            return PDO::PARAM_STR;
        }
    }

    public function fetchAll()
    {
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetch()
    {
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
    public function lastInsertId()
    {
        return $this->conn->lastInsertId();
    }

    public function beginTransaction()
    {
        return $this->conn->beginTransaction();
    }
    public function fetchColumn()
    {
        return $this->stmt->fetchAll(PDO::FETCH_COLUMN);
    }
    public function commit()
    {
        return $this->conn->commit();
    }


    public function fetchAssociative()
    {
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function fetchAllAssociative()
    {
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function rollBack()
    {
        return $this->conn->rollBack();
    }
}
