<?php

class IdException extends Exception
{
}

class PassException extends Exception
{
}

class User
{
    public string $id;
    public string $password;


    public function setPassword(string $password)
    {
        if (strlen($password) > 8 || strlen($password) < 1) {
            throw new PassException(" Error message incorrect Password ");
        }
        return $password;
    }

    public function setId(string $id)
    {
        if (preg_match("[\D]", $id)) {
            throw new IdException("Error message incorrect Id ");
        }
        return $id;
    }

    public function getUserData(string $id)
    {
        return $id;
    }
}

$users = new User();

try {
    $users->setPassword('98765431');
    $users->setId('2700');
} catch (PassException $pass) {
    echo $pass->getmessage() . $pass->getFile() . $pass->getLine();
} catch (IdException $id) {
    echo $id->getmessage() . $id->getFile() . $id->getLine();
} catch (Exception $e) {
    echo $e->getmessage();
}
