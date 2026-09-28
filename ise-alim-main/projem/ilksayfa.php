<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejder Kariyerim</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: rgb(44, 44, 44);
            color: #333;
        }

        header {
            background-image: url(./images/pngtree-abstract-gold-scratches-on-a-black-background-image_15685278.jpg);
            color: #ffc107;
            padding: 50px 20px;
            text-align: center;
            clip-path: polygon(0 0, 100% 0, 100% 80%, 0 100%);
            position: relative;
            background-blend-mode: overlay;
            background-color: rgba(0, 0, 0, 0.7);
        }

        header h1 {
            font-size: 3em;
            margin: 0;
            letter-spacing: 2px;
        }

        header p {
            font-size: 1.4em;
            margin-top: 10px;
        }

        .header-divider {
            background: #ffc107;
            height: 5px;
            width: 100%;
            margin: 0;
        }

        .main-content {
            max-width: 1200px;
            margin: -60px auto 20px;
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .main-content h2 {
            color: black;
            font-size: 2.5em;
            margin-bottom: 15px;
            text-align: center;
        }

        .main-content p {
            font-size: 1.2em;
            line-height: 1.6;
            margin: 10px 0;
        }

        .main-content h3 {
            font-size: 1.8em;
            margin-top: 20px;
            color: black;
            border-left: 4px solid #ffc107;
            padding-left: 10px;
        }

        .details,
        .benefits {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 20px;
        }

        .details div,
        .benefits div {
            background: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .details div strong,
        .benefits div strong {
            display: block;
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .apply-btn {
            display: block;
            text-align: center;
            background: #ffc107;
            color: #fff;
            padding: 15px 30px;
            margin: 20px auto 0;
            font-size: 1.2em;
            font-weight: bold;
            border-radius: 30px;
            width: max-content;
            text-decoration: none;
        }

        .apply-btn:hover {
            background: black;
        }

        footer {
            background: black;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            margin-top: 20px;
            font-size: 0.9em;
        }

        .admin-link {
            color: #6c757d;
            font-size: 1em;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }

        .admin-link:hover {
            color: #5a6268;
        }

        footer div.altmenu {
            color: #6c757d;
        }


        @media (max-width: 768px) {
            header h1 {
                font-size: 2.5em;
            }

            .details,
            .benefits {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 2em;
            }

            header p {
                font-size: 1.1em;
            }
        }
    </style>
</head>

<body>

    <header>
        <img src="./images/lon6.png" width="200px" alt="">
        <h1>Ejder Kariyer</h1>
        <p>Bütçe, Raporlama ve Analiz Uzmanı</p>
    </header>
    <div class="header-divider"></div>

    <div class="main-content">
        <h2>Yeni Ekip Arkadaşımız Olun!</h2>
        <p>Ejder Kariyer ailesine katılmak ister misiniz? İstanbul'da Finansal Planlama ve Analiz Grup Müdürlüğü'müz
            için
            **Bütçe, Raporlama ve Analiz Uzmanı** arıyoruz. Ekibimize katılarak finansal hedeflere ulaşmamızda destek
            olun!</p>

        <h3>Aranan Nitelikler</h3>
        <div class="details">
            <div>
                <strong>Mezuniyet:</strong> İşletme, Ekonomi veya Finans
            </div>
            <div>
                <strong>Deneyim:</strong> 2 yıl finansal analiz tecrübesi
            </div>
            <div>
                <strong>Programlar:</strong> MS Office ve SAP
            </div>
            <div>
                <strong>Dil Bilgisi:</strong> İleri düzey İngilizce
            </div>
        </div>

        <h3>Firma Hakkında</h3>
        <p>Ejder Kariyer, yenilikçi çözümleri ve sürdürülebilir iş anlayışıyla Türkiye’nin lider enerji şirketlerinden
            biridir.
            Ekibimiz, yaratıcı düşünce ve gelişime açık bir ortamda çalışmayı destekler.</p>

        <h3>Sağlanan Avantajlar</h3>
        <div class="benefits">
            <div>
                <strong>Rekabetçi Maaş:</strong> Tatmin edici maaş paketi
            </div>
            <div>
                <strong>Kariyer Fırsatları:</strong> Gelişim odaklı eğitimler
            </div>
            <div>
                <strong>Çalışma Şartları:</strong> Esnek saatler
            </div>
            <div>
                <strong>Sosyal Yardımlar:</strong> Sağlık sigortası
            </div>
        </div>

        <a href="girisyap.php" class="apply-btn">Başvurunuzu Yapın</a>
    </div>

    <footer>
        <p>&copy; 2024 Ejder Kariyer. Tüm hakları saklıdır.</p>
        <div class="altmenu">
            <a href="admingiris.php" class="admin-link">Admin Girişi</a>
            -
            <a href="girisyap.php" class="admin-link">Üye Girişi</a>
            -
            <a href="uyeol.php" class="admin-link">Üye Ol</a>
        </div>
    </footer>

</body>

</html>