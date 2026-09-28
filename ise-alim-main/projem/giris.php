<?php
include("db_config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = $database->get('users', '*', [
        'username' => $username,
        'password' => $password
    ]);

    if ($user) {
        echo "Giriş başarılı! Hoş geldiniz, " . $user['name'];
        header("Location: basvuru.php?snc=ekleme_basarili");
        exit;
    } else {
        echo "Kullanıcı adı veya şifre hatalı!";
    }
}
?>