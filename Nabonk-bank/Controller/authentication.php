<?php

include_once "../Model/m_databaseUser.php";

class Authentication{

    public $model;
    public function __construct(){
        $this->model = new DBUser();
    }

    public function login($username, $pin){
        $query = $this->model->getFromDB($username);
        if ($pin == $query['pin']){
            $_SESSION['user'] = $query['name'];
            $_SESSION['query'] = $query;
            return $query;
        } else {
            return false;
        }
    }

    public function register($name,$username,$pin,$transPIN,$address,$email,$telephone,$saldo) {
        $this->model->setToDB($name,$username,$pin,$transPIN,$address,$email,$telephone,$saldo);
    }
}