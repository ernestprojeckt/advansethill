<?php

class PDOservice
{
    private string $host = 'mysql';
    private string $database = 'Php_insert_demo';
    private string $user = 'root';
    private string $pass = 'secret';
    private $pdo;

    public function __construct()
    {
        $this->pdo = $this->connect();
    }

    private function connect()
    {
        $dsn = sprintf("mysql:host=%s;dbname=%s;", $this->host, $this->database);
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        try {
            $pdo = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
        return $pdo;
    }

    public function addUser(array $data)
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO Php_insert_demo.user (email, name, surname, age) VALUES (:email, :name, :surname, :age)'
        );
        $statement->execute([
            'email' => $data['email'],
            'name' => $data['name'],
            'surname' => $data['surname'],
            'age' => $data['age']
        ]);
        header('Location: /PDOP/index.php');
        //  echo 'сохранено';
    }

    public function checkUserTable(): bool
    {
        try {
            $this->pdo->query("SELECT 1 FROM Php_insert_demo.user");
        } catch (PDOException $e) {
            return false;
        }
        return true;
    }

    public function createUserTable()
    {
        $query = "
 CREATE TABLE Php_insert_demo.user
(
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    surname VARCHAR(255),
    age INT,
    email VARCHAR(250) NOT NULL
     
);
 ";

        if ($this->pdo->exec($query))
            return true;
        return false;

    }

}