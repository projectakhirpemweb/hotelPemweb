<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Nabonk Bank </title>
    <a href="" name="header"><H1> Nabonk Bank </H1> </a>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION["user"])) {
        echo "
            <div> <a href = 'View/v_login.php'> Login </a> </div>
            <div> <a href = 'View/v_register.php'> Register </a> </div>
            ";
    } else {
        echo "
            <div> <a href = ''> Transfer </a> </div>
            <div> <a href = ''> Cek Saldo </a> </div>
            <div> <a href = 'Controller/index.php?logout=true'> Logout </a> </div>
            ";
    }
    ?>
    <div>
        <h3> Nabonk Bank </h3>
        <p> Nabonk Bank adalah bank yang berasal dari Malang, yang dibuat oleh 3 mahasiswa yang terkenal gabutnya.
        Pendiri Nabonk Bank adalah mahasiswa FILKOM angkatan 2017. Afzari merupakan CEO dari Nabonk Bank yang menjadi pelopor
        akan berdirinya bank ini.</p>
    </div>
    <div>
        <p> Contact : </p>
        <p> 082254923023 </p>
        <p> robert@gmail.com </p>
        <p> Jl. Watugong-watugongan </p>
    </div>
</body>
</html>