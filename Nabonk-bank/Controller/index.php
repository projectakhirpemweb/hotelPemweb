<?php
    include_once "authentication.php";
    session_start();
    if (isset($_GET["logout"])) {
        session_destroy();
        header('Location: ../index.php');
    }
    if (isset($_POST["username"]) && isset($_POST["pin"])){
        global $data;
        $auth = new Authentication();
        $data = $auth->login($_POST["username"], $_POST["pin"]);
    }

    if (isset($_POST["regist"])) {
        $name = $_POST["f-name"]." ".$_POST["l-name"] ;
        $username = $_POST["username"];
        $pin = $_POST["pin"];
        $transPIN = $_POST["trans-pin"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $telephone = $_POST["telephone"];
        $saldo = $_POST["saldo"];
        //echo $name." ".$username." ".$pin." ".$transPIN." ".$address." ".$email." ".$telephone." ".$saldo;
        $auth = new Authentication();
        $auth->register($name,$username,$pin,$transPIN,$address,$email,$telephone,$saldo);
    }

    if (isset($_SESSION["user"])) {
        $controller = new Authentication();


        header('Location: ../index.php');
    } else if (!isset($_POST["regist"]))  {
        header('Location: ../View/v_login.php');
    }

?>