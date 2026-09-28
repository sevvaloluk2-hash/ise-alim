<?php
include("db_config.php");

$where_clauses = [];

if (!empty($_POST['universite_bolumu'])) {
    $where_clauses['universite_bolumu'] = $_POST['universite_bolumu'];
}
if (!empty($_POST['deneyim'])) {
    $where_clauses['deneyim'] = $_POST['deneyim'];
}
if (!empty($_POST['bdenetim'])) {
    $where_clauses['bdenetim'] = $_POST['bdenetim'];
}
if (!empty($_POST['ingilizce'])) {
    $where_clauses['ingilizce'] = $_POST['ingilizce'];
}
if (!empty($_POST['ms_office'])) {
    $where_clauses['ms_office'] = $_POST['ms_office'];
}
if (!empty($_POST['sap'])) {
    $where_clauses['sap'] = $_POST['sap'];
}
if (!empty($_POST['askerlik'])) {
    $where_clauses['askerlik'] = $_POST['askerlik'];
}

if (empty($where_clauses)) {
    $results = $database->select('basvuru_formu', '*');
} else {
    $results = $database->select('basvuru_formu', '*', [
        'AND' => $where_clauses
    ]);
}
?>



<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Başvurular</title>
    <style>
        /* Genel stil */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url(./images/pngtree-abstract-gold-scratches-on-a-black-background-image_15685278.jpg);
            background-size: cover;
            background-blend-mode: overlay;
            background-size: cover;
            background-position: center;
            padding: 0;
            margin: 0;
        }

        .container {
            background-color: rgb(44, 44, 44);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1200px;
            margin: 50px auto;
        }

        h1 {
            text-align: center;
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
            background-color: white;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .filter-form {
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .filter-form .filter-group {
            display: flex;
            flex-direction: column;
            width: 48%;
        }

        .filter-form label {
            font-size: 14px;
            margin-bottom: 5px;
            color: white;
        }

        .filter-form select {
            padding: 10px;
            font-size: 14px;
            border-radius: 4px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            width: 100%;
        }

        .filter-form button {
            padding: 12px 20px;
            background-color: #ffcc00;
            /* Sarı renk */
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
            max-width: 250px;
            font-size: 16px;
            border-radius: 5px;
            text-align: center;
        }

        .filter-form button:hover {
            background-color: #e6b800;
        }

        .cv-button {
            display: inline-block;
            padding: 5px 10px;
            background-color: #ffcc00;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
            text-align: center;
        }

        .cv-button:hover {
            background-color: #e6b800;
        }


        img {
            display: block;
            margin: 0 auto 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <img src="./images/lon6.png" width="100px" alt="Logo">
        <h1>Başvuru Yönetimi</h1>


        <form method="POST" class="filter-form">

            <div class="filter-group">
                <label for="universite_bolumu">Üniversite Bölümü:</label>
                <select name="universite_bolumu" id="universite_bolumu">
                    <option value="">Seçiniz</option>
                    <option value="İşletme">İşletme</option>
                    <option value="Ekonomi">Ekonomi</option>
                    <option value="Finans">Finans</option>
                    <option value="İktisat">İktisat</option>
                    <option value="Maliye">Maliye</option>
                    <option value="Çalışma Ekonomisi ve Endüstri İlişkileri">Çalışma Ekonomisi ve Endüstri İlişkileri
                    </option>
                    <option value="Uluslararası İlişkiler">Uluslararası İlişkiler</option>
                    <option value="Siyaset Bilimi ve Kamu Yönetimi">Siyaset Bilimi ve Kamu Yönetimi</option>
                    <option value="Ekonometri">Ekonometri</option>
                    <option value="Pazarlama">Pazarlama</option>
                    <option value="İşletme Yönetimi">İşletme Yönetimi</option>
                    <option value="Finans">Finans</option>
                    <option value="Halkla İlişkiler ve Tanıtım">Halkla İlişkiler ve Tanıtım</option>
                    <option value="Turizm İşletmeciliği">Turizm İşletmeciliği</option>
                    <option value="Lojistik Yönetimi">Lojistik Yönetimi</option>
                    <option value="İnsan Kaynakları Yönetimi">İnsan Kaynakları Yönetimi</option>
                    <option value="Bankacılık">Bankacılık</option>
                    <option value="Sigortacılık ve Risk Yönetimi">Sigortacılık ve Risk Yönetimi</option>
                    <option value="Kamu Yönetimi">Kamu Yönetimi</option>
                    <option value="Çalışma Sosyolojisi">Çalışma Sosyolojisi</option>
                    <option value="Sosyal Hizmet">Sosyal Hizmet</option>
                    <option value="Yerel Yönetimler">Yerel Yönetimler</option>
                    <option value="Bilgisayar Mühendisliği">Bilgisayar Mühendisliği</option>
                    <option value="Elektrik Elektronik Mühendisliği">Elektrik Elektronik Mühendisliği</option>
                    <option value="Makine Mühendisliği">Makine Mühendisliği</option>
                    <option value="Endüstri Mühendisliği">Endüstri Mühendisliği</option>
                    <option value="İnşaat Mühendisliği">İnşaat Mühendisliği</option>
                    <option value="Kimya Mühendisliği">Kimya Mühendisliği</option>
                    <option value="Mimarlık">Mimarlık</option>
                    <option value="Psikoloji">Psikoloji</option>
                    <option value="Sosyoloji">Sosyoloji</option>
                    <option value="Edebiyat">Edebiyat</option>
                    <option value="İngilizce Dil ve Edebiyatı">İngilizce Dil ve Edebiyatı</option>
                    <option value="Tıp">Tıp</option>
                    <option value="Diş Hekimliği">Diş Hekimliği</option>
                    <option value="Eczacılık">Eczacılık</option>
                    <option value="Veterinerlik">Veterinerlik</option>
                    <option value="Fizik">Fizik</option>
                    <option value="Kimya">Kimya</option>
                    <option value="Biyoloji">Biyoloji</option>
                    <option value="Hukuk">Hukuk</option>
                    <option value="Tarih">Tarih</option>
                    <option value="Felsefe">Felsefe</option>
                    <option value="İç Mimarlık">İç Mimarlık</option>
                    <option value="Sinema ve Televizyon">Sinema ve Televizyon</option>
                    <option value="Radyo, TV ve Sinema">Radyo, TV ve Sinema</option>
                    <option value="Diğer">Diğer</option>
                </select>
            </div>

            <div class="filter-group">
                <label for="deneyim">Deneyim:</label>
                <select name="deneyim" id="deneyim">
                    <option value="">Seçiniz</option>
                    <option value="Deneyimsiz">Deneyimsiz</option>
                    <option value="0-1 yıl">0-1 yıl</option>
                    <option value="1-3 yıl">1-3 yıl</option>
                    <option value="+3 yıl">+3 yıl</option>
                </select>
            </div>

            <div class="filter-group">
                <label for="bdenetim">Bağımsız Denetim:</label>
                <select name="bdenetim" id="bdenetim">
                    <option value="">Seçiniz</option>
                    <option value="Var">Var</option>
                    <option value="Yok">Yok</option>
                </select>
            </div>

            <div class="filter-group">
                <label for="ingilizce">İngilizce Seviyesi:</label>
                <select name="ingilizce" id="ingilizce">
                    <option value="">Seçiniz</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                </select>
            </div>

            <div class="filter-group">
                <label for="ms_office">MS Office:</label>
                <select name="ms_office" id="ms_office">
                    <option value="">Seçiniz</option>
                    <option value="Acemi">Acemi</option>
                    <option value="Hakim">Hakim</option>
                    <option value="Uzman">Uzman</option>
                </select>
            </div>

            <div class="filter-group">
                <label for="sap">SAP Bilgisi:</label>
                <select name="sap" id="sap">
                    <option value="">Seçiniz</option>
                    <option value="Acemi">Acemi</option>
                    <option value="Hakim">Hakim</option>
                    <option value="Uzman">Uzman</option>
                </select>
            </div>

            <div class="filter-group">
                <label for="askerlik">Askerlik Durumu:</label>
                <select id="askerlik" name="askerlik">
                    <option value="">Seçiniz</option>
                    <option value="Tamamlandi">Tamamlandı</option>
                    <option value="Tecilli">Tecilli</option>
                    <option value="Muaf">Muaf</option>
                </select>
            </div>

            <div>
                <button type="submit">Filtrele</button>
            </div>
        </form>


        <table>
            <thead>
                <tr>
                    <th>Ad Soyad</th>
                    <th>Üniversite Bölümü</th>
                    <th>Deneyim</th>
                    <th>Bağımsız Denetim</th>
                    <th>İngilizce</th>
                    <th>MS Office</th>
                    <th>SAP</th>
                    <th>Askerlik Durumu</th>
                    <th>CV</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($results as $row) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['ad_soyad']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['universite_bolumu']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['deneyim']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['bdenetim']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['ingilizce']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['ms_office']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['sap']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['askerlik']) . "</td>";


                    if (!empty($row['cv_path'])) {
                        echo "<td><a href='" . htmlspecialchars($row['cv_path']) . "' target='_blank' class='cv-button'>Görüntüle</a></td>";
                    } else {
                        echo "<td>CV Yok</td>";
                    }

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>