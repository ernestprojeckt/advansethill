<?php


class Controller
{
    private $adapter;

    public function __construct(Mysql $mysql)
    {
        $this->adapter = $mysql;
    }

    function getData()
    {
        $this->adapter->getData();
    }
}

interface Mysql
{
    public function getData();
}
class getData implements Mysql
{
    public function getData()
    {
        // TODO: Implement getData() method.
    }
}