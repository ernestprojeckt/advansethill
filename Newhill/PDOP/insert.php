<?php

$data = $_POST;

$errors = [];

foreach (['email',
             'name',
                'surname',
                    'age'] as $field)
    if (empty($data[$field])) {
        $errors[] = sprintf('The %s required field.', $field);
    }
if (!empty($errors)) {
    echo implode('<br /', $errors);
    exit;
}

require_once('PDOservice.php');
$pdoService = new PDOservice();
$pdoService->addUser($data);
//header('Location: /index.php');

//конект к дате
//
//$host = 'mysql';
//$database = 'Php_insert_demo';
//$user = 'root';
//$pass = 'secret';
//$dsn = sprintf("mysql:host=%s;dbname=%s;", $host, $database);
//
//$options = [
//    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//    ];
//
//try {
//    $pdo = new PDO($dsn , $user , $pass ,$options);
//}catch (\PDOException $e)
//{
//    throw new \PDOException($e->getMessage(), (int)$e->getCode());
//}
//
//$statement = $pdo->prepare('SELECT * FROM user WHERE email = :email');
//$statement->execute(['email' => $data['email']]);
//
//if (!empty($statement->fetch())) {
//    echo 'User with such email exists.';
//    exit;
//}
////insert new user
//$statement = $pdo->prepare(
//    'INSERT INTO user (email, firstname, lastname, password) VALUES (:email, :firstname, :lastname, :password)'
//);
//$statement->execute([
//    'email' => $data['email'],
//    'firstname' => $data['firstname'],
//    'lastname' => $data['lastname'],
//    'password' => password_hash($data['password'], PASSWORD_BCRYPT)
//]);
//
//echo 'сохранено';