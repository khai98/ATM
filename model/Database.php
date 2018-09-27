<?php

namespace Model;

use PDO;
use PDOException;

class Database
{
    private $localhost;
    private $user_name;
    private $password;
    public $conn;

    /**
     * @return null|PDO
     */

    public function connect()
    {
        $this->user_name = 'root';
        $this->password = 'root';
        $this->localhost = "mysql:host=localhost;dbname=trade";

        $this->conn = null;

        try {
            $this->conn = new PDO($this->localhost, $this->user_name, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->conn;
    }


}
