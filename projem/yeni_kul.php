<?php
include("db_config.php");

$name = "";
$surname = "";
$birth_date = "";
$email = "";
$phone = "";
$username = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birth_date = $_POST['dogumtarihi'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $database->insert('users', [
        'name' => $name,
        'surname' => $surname,
        'dogumtarihi' => $birth_date,
        'email' => $email,
        'phone' => $phone,
        'username' => $username,
        'password' => $password
    ]);


    $gorev_id = $database->id();
    if ($gorev_id > 0) {
        header("Location:girisyap.php?snc=ekleme_basarili");
    } else {
        header("Location:girisyap.php?snc=eklemede_hata");
    }
} else {
    header("Location:girisyap.php");
}
?>