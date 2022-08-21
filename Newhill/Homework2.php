<?php

class User
{
    public $Id;
    public $password;
    public function __construct($Id,$password)
    {
        $this->setId($Id);
        $this->setPassword($password);
      }

    public function getId()
    {
        return $this->Id;
    }


    public function setId($Id)
    {
        if ( $Id == "string")
        {
            throw new Exception("This string");
        }$this->Id = $Id;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        if (strlen($password) > 8 )
        {
        throw new  Exception(" many symbols");
        }$this->password = $password;
    }


    public function getUserData($password,$Id)
    {
        $this->setPassword($password);
        $this->setId($Id);
        try {
           $this->setPassword();
        }catch (Exception$e)
        {
            echo "false";
        }

        try
        {
           return $password;
        }catch (Exception$e)
        {
            echo "false";
        }

   }

}

$fa = new User("retuhdsfrftyguhijokpdfghjklrn",1212);

var_dump($fa);
