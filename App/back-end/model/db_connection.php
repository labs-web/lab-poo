<?php

class Db_connection
{

    protected $servername;
    protected $username;
    protected $password;
    protected $database;

    public function __construct($servername = "localhost", $username = "root", $password = "Apple2006@", $database = "poo")
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
    public function connect()
    {
        $db_conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
        $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db_conn;
    }
}
