<?php
include("db_config.php");

$mesaj = '';
$mesaj_tur = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad_soyad = $_POST['ad_soyad'];
    $telefon = $_POST['telefon'];
    $sehir = $_POST['sehir'];
    $universite_bolumu = $_POST['universite_bolumu'];
    $universite = $_POST['universite'];
    $deneyim = $_POST['deneyim'];
    $bdenetim = $_POST['bdenetim'];
    $cinsiyet = $_POST['cinsiyet'];
    $ms_office = $_POST['ms_office'];
    $ingilizce = $_POST['ingilizce'];
    $sap = $_POST['sap'];
    $ufrs = $_POST['ufrs'];
    $takim = $_POST['takim'];
    $is_deneyimi = $_POST['is_deneyimi'] ?? null;
    $is_deneyimi_metni = $_POST['is_deneyimi_metni'] ?? '';

    $askerlik = ($cinsiyet == 'Erkek') ? ($_POST['askerlik'] ?? null) : null;

    if (isset($_FILES['cv'])) {
        $cv = $_FILES['cv'];
        $cv_name = $cv['name'];
        $cv_tmp_name = $cv['tmp_name'];
        $cv_error = $cv['error'];
        $cv_size = $cv['size'];

        $cv_ext = pathinfo($cv_name, PATHINFO_EXTENSION);
        if (in_array($cv_ext, ['pdf', 'doc', 'docx'])) {
            if ($cv_error === 0) {
                if ($cv_size <= 5 * 1024 * 1024) {
                    $new_cv_name = uniqid('', true) . '.' . $cv_ext;
                    $cv_upload_path = 'uploads/cv/' . $new_cv_name;

                    if (move_uploaded_file($cv_tmp_name, $cv_upload_path)) {
                        $mesaj = "Başvurunuz başarıyla kaydedildi!";
                        $mesaj_tur = "success";
                    } else {
                        $mesaj = "Dosya yüklenirken bir sorun oluştu.";
                        $mesaj_tur = "error";
                    }
                } else {
                    $mesaj = "Dosya boyutu 5MB'den büyük olamaz.";
                    $mesaj_tur = "error";
                }
            } else {
                $mesaj = "Geçersiz dosya formatı!";
                $mesaj_tur = "error";
            }
        } else {
            $mesaj = "Geçersiz dosya formatı. Sadece PDF, DOC, DOCX dosyaları kabul edilir.";
            $mesaj_tur = "error";
        }
    }

    if ($mesaj_tur == "success") {
        $database->insert("basvuru_formu", [
            "ad_soyad" => $ad_soyad,
            "telefon" => $telefon,
            "sehir" => $sehir,
            "universite" => $universite,
            "universite_bolumu" => $universite_bolumu,
            "deneyim" => $deneyim,
            "bdenetim" => $bdenetim,
            "cinsiyet" => $cinsiyet,
            "ms_office" => $ms_office,
            "ingilizce" => $ingilizce,
            "sap" => $sap,
            "ufrs" => $ufrs,
            "takim" => $takim,
            "is_deneyimi" => $is_deneyimi,
            "is_deneyimi_metni" => $is_deneyimi_metni,
            "askerlik" => $askerlik,
            "cv_path" => $cv_upload_path
        ]);
    }
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Başvuru Bilgileriniz</title>
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
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 900px;
            text-align: center;
        }

        h1 {
            text-align: center;
            color: #FFFFFF;
            margin-bottom: 20px;
        }

        .info-row {
            margin-bottom: 15px;
        }

        .info-label {
            font-weight: bold;
            color: #FFFFFF;
        }

        .info-value {
            margin-left: 10px;
            color: #FFFFFF;
        }

        .info-value span {
            font-weight: normal;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .go-back-btn {
            background-color: #ffc107;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .go-back-btn:hover {
            background-color: #004494;
        }

        .message {
            margin-top: 20px;
            padding: 10px;
            font-weight: bold;
            border-radius: 5px;
            text-align: center;
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
        }

        .success-message {
            background-color: #ffc107;
            color: white;
        }

        .error-message {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>

<body>

    <div class="container">
        <img src="./images/lon6.png" width="100px" alt="Logo">
        <h1>Başvuru Bilgileriniz</h1>

        <?php if ($mesaj): ?>
            <div class="message <?php echo $mesaj_tur == 'success' ? 'success-message' : 'error-message'; ?>">
                <?php echo $mesaj; ?>
            </div>
        <?php endif; ?>

        <div class="info-row">
            <span class="info-label">Ad Soyad:</span>
            <span class="info-value"><?php echo $ad_soyad; ?></span>
        </div>
        <div class="info-row">
            <span class="info-label">Telefon Numarası:</span>
            <span class="info-value"><?php echo $telefon; ?></span>
        </div>
        <div class="info-row">
            <span class="info-label">Bulunduğunuz Şehir:</span>
            <span class="info-value"><?php echo $sehir; ?></span>
        </div>
        <div class="info-row">
            <span class="info-label">Üniversite Bilgisi:</span>
            <span class="info-value"><?php echo $universite; ?></span>
        </div>

        <div class="info-row">
            <span class="info-label">Üniversite Bölüm Bilgisi:</span>
            <span class="info-value"><?php echo $universite_bolumu; ?></span>
        </div>

        <div class="info-row">
            <span class="info-label">Finansal Planlama, Raporlama ve Analiz alanındaki deneyiminiz:</span>
            <span class="info-value"><?php echo $deneyim; ?></span>
        </div>

        <div class="info-row">
            <span class="info-label">Bağımsız Denetim Tecrübeniz:</span>
            <span class="info-value"><?php echo $bdenetim; ?></span>
        </div>

        <div class="info-row">
            <span class="info-label">Cinsiyet:</span>
            <span class="info-value"><?php echo $cinsiyet; ?></span>
        </div>

        <div class="info-row">
            <span class="info-label">Excel ve Diğer MS Office Uygulamalarına hakimiyetiniz:</span>
            <span class="info-value"><?php echo $ms_office; ?></span>
        </div>

        <div class="info-row">
            <span class="info-label">İngilizce Seviyesi:</span>
            <span class="info-value"><?php echo $ingilizce; ?></span>
        </div>

        <div class="info-row">
            <span class="info-label">SAP işlem ve raporlama platformlarına hakimiyetiniz:</span>
            <span class="info-value"><?php echo $sap; ?></span>
        </div>
        <div class="info-row">
            <span class="info-label">Daha önce takım çalışmasında bulundunuz mu:</span>
            <span class="info-value"><?php echo $takim; ?></span>
        </div>
        <div class="info-row">
            <span class="info-label">Konsolidasyon ve UFRS raporlama alanındaki deneyiminiz:</span>
            <span class="info-value"><?php echo $ufrs; ?></span>
        </div>

        <div class="info-row">
            <span class="info-label">İş Deneyiminiz:</span>
            <span class="info-value"><?php echo $is_deneyimi; ?></span>
        </div>

        <?php if ($cinsiyet == 'Erkek'): ?>
            <div class="info-row">
                <span class="info-label">Askerlik Durumunuz:</span>
                <span class="info-value"><?php echo $askerlik; ?></span>
            </div>
        <?php endif; ?>

        <div class="button-container">
            <button class="go-back-btn" onclick="window.history.back();">Geri Dön</button>
        </div>
    </div>

</body>

</html>