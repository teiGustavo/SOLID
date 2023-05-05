<?php

interface IDBConnection
{
    public function connect();

    public function query();
}

class MysqlConnection implements IDBConnection
{
    public function connect()
    {
    }

    public function query()
    {
    }
}

class PostgreeConnection implements IDBConnection
{
    public function connect()
    {
    }

    public function query()
    {
    }
}

class PageLoader
{
    private $dbConnection;
    
    public function __construct(IDBConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection;
        $this->dbConnection->connect();
        $this->dbConnection->query();
    }
}