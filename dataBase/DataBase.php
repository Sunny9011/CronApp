<?php

class DataBase
{
    private static $_instance;
    private $conn;
    private $dbpass = '';
    private $dbhost = 'mysql:host=localhost;dbname=xmlfeed';
    private $dbuser = 'root';

    /**
     * DB constructor.
     */
    public function __construct()
    {
        $this->conn = new PDO($this->dbhost, $this->dbuser, $this->dbpass);
    }

    /**
     * DB class instance
     * @return DataBase
     */
    public static function getInstance()
    {
        if (!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * return connect
     * @return PDO
     */
    public function connect()
    {
        return $this->conn;
    }
}