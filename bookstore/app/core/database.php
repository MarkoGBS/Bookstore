<?php

class Database
{
    private $host = HOST;
    private $user = USER;
    private $password = PASSWORD;
    private $database = DATABASE;
    private $port = PORT;

    private $dbh;

    private $stmt;

    private $error;
    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->database . ';port=' . $this->port;
        $options = [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_PERSISTENT => true,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->password, $options);

        }catch (PDOException $e){
            echo $e->getMessage();
            echo $this->error;
        }

    }

    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }
    public function bind($param, $value)
    {
        $this->stmt->bindParam($param, $value);
    }
    public function execute()
    {
        return $this->stmt->execute();
    }
}