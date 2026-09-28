<?php include("db_config.php");?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
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
            margin-top: 2rem;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            width: 400px;
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
    </style>
</head>

<body>
    <div class="container">
        <img src="./images/lon6.png" width="100px" alt="">
        <h1>Kayıt Ol</h1>
        <p>Yeni bir hesap oluşturun</p>
        <form action="yeni_kul.php" method="POST" onsubmit="validatePasswords(event)">
            <input type="text" name="name" placeholder="Ad" required>
            <input type="text" name="surname" placeholder="Soyad" required>
            <input type="date" name="dogumtarihi" placeholder="Doğum Tarihi" required>
            <input type="email" name="email" placeholder="E-posta" required>
            <input type="tel" id="phone" name="phone" placeholder="Telefon Numaranızı Girin"
                pattern="(\+90|0)[1-9][0-9]{9}" required>
            <input type="text" name="username" placeholder="Kullanıcı Adı" required>
            <input type="password" id="password" name="password" placeholder="Şifre" required>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Şifreyi Tekrarla"
                required>
            <button type="submit">Kayıt Ol</button>
        </form>
        <div class="links">
            <span>Zaten hesabınız var mı? </span>
            <a href="girisyap.php">Giriş Yap</a>
        </div>
    </div>

    <script>
        function validatePasswords(event) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm-password').value;

            if (password !== confirmPassword) {
                event.preventDefault();
                alert("Şifreler eşleşmiyor! Lütfen kontrol edin.");
            }
        }
    </script>
</body>

</html>