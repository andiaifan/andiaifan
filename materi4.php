<?php

$user_benar = "admin";
$pass_benar = "12345";


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if ($username == $user_benar && $password == $pass_benar) {
        $pesan = "Login berhasil!";
    } else {
        $pesan = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Sederhana</title>
</head>
<body>

    <h2>Form Login</h2>

    <form method="POST">
        <label>Username :</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password :</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit" name="login">Login</button>
    </form>

    <br>

    <?php
    
    if (isset($pesan)) {
        echo $pesan;
    }
    ?>

</body>
</html>