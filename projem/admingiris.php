<?php include("db_config.php"); ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Girişi</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url(./images/pngtree-abstract-gold-scratches-on-a-black-background-image_15685278.jpg);
            background-size: cover;
            background-blend-mode: overlay;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .container {
            background: rgb(44, 44, 44);
            padding: 30px 20px;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;

        }

        .container h1 {
            font-size: 22px;
            color: white;
            margin-bottom: 10px;
        }

        .container p {
            font-size: 14px;
            color: white;
            margin-bottom: 20px;
        }

        .container input[type="text"],
        .container input[type="password"],
        .container input[type="email"],
        .container input[type="tel"],
        .container input[type="date"] {
            width: 100%;
            padding: 7px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
        }

        .container button {
            background: #ffc107;
            color: white;
            border: none;
            padding: 12px 0;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }

        .container button:hover {
            background: black;
        }

        .links {
            margin-top: 20px;
            font-size: 14px;
            color: white;
        }

        .links a {
            color: #ffc107;
            text-decoration: none;
            font-weight: 600;
        }

        .links a:hover {
            text-decoration: underline;
        }

        #register-form {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="./images/lon6.png" width="100px" alt="">
        <h1 id="form-title">Giriş Yap</h1>
        <p id="form-description">Admin girişi yapın!</p>
        <div id="login-form">
            <form action="admgrs.php" method="POST">
                <input type="text" name="username" placeholder="Kullanıcı Adı" required>
                <input type="password" name="password" placeholder="Şifre" required>
                <button type="submit">Giriş Yap</button>
            </form>

        </div>

</body>

</html>