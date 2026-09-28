<?php
include("db_config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = $database->get('admin', '*', [
        'username' => $username,
        'password' => $password
    ]);


    if ($username) {
        header("Location: admin.php");
        exit;
    } else {
        echo "Kullanıcı adı veya şifre hatalı!";
    }
}
?>