<?php

namespace Controller;

use Model\ChangTrade;
use Model\Database;

class Controller
{
    public $model;

    public function __construct()
    {
        $connection = new Database();
        $this->model = new ChangTrade($connection->connect());
    }
    public function addTransfer()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (isset($_POST['Account_current'])) {
            $targetId = $_POST['Account_current'];
            $sourceId = $_POST['Account_receiver'];
            $Account = $_POST['Account'];
            $Message = $_POST['Message'];
            $Transfer = $this->model->transferEmployeePosition( $targetId,$sourceId,$Account,$Message );
            header("Location: index.php?page=view");
        }
        }else{

            include 'view/template.php';
        }
    }

    public function getAll()
    {
        $results = $this->model->getAll();
        include 'view/view.php';
    }

    public function login()
    {
        if (isset($_POST['user'])) {
            $user = $_POST['user'];
            if (isset($_POST['password'])) {
                $password = $_POST['password'];
            }
            $result = $this->model->login($user, $password);
        } else {
            include 'view/login/login.php';
        }
   //
    }

}