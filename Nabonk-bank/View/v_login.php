<?php
    session_start();
    if(isset($_SESSION["user"])) {
        header('Location: ../index.php');
    }
?>
<! DOCTYPE html>
<HTML>
    <HEAD>
        <TITLE> Nabonk Bank Login </TITLE>
        <a href="../index.php" name="header"><H1> Nabonk Bank Login </H1> </a>
    </HEAD>
    <BODY>
        <FORM action ="../Controller/index.php" method = 'post'>
            Username <INPUT type = 'text' placeholder="username" name="username" required>
            <BR>
            PIN <INPUT type = 'password' placeholder="******" name="pin" required>
            <BR>
            <INPUT type="submit" value="Login">
        </FORM>
    </BODY>
</HTML>