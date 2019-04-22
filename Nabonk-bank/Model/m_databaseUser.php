<?php
require "../koneksiMVC.php";

class DBUser {
    public function getFromDB($username){
        global $mysqli;
        $rs = $mysqli->query("SELECT * FROM account_bank where username = '$username'");
        $row = $rs->fetch_assoc();
        return $row;
    }

    public function setToDB($name,$username,$pin,$transPIN,$address,$email,$telephone,$saldo){
        global $mysqli;

        echo $mysqli->query("INSERT INTO 'account_bank' ('username', 'transaction_pass', 'rekening',
                  'pin', 'email', 'telephone', 'address', 'name', 'saldo')
                  VALUES ($username,$transPIN,000111222333,$pin,$email,$telephone,$address,$name,$saldo)");

    }
}
