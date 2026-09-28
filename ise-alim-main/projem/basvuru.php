<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İş Başvuru Formu</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url(./images/pngtree-abstract-gold-scratches-on-a-black-background-image_15685278.jpg);
            background-size: cover;
            background-blend-mode: overlay;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
        }

        .container {
            background: rgb(44, 44, 44);
            padding: 100px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            text-align: center;
        }

        .container img {
            display: block;
            margin: 0 auto 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 15px;
            color: #ffffff;
        }

        form {
            display: block;
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .form-group label {
            margin-bottom: 15px;
            font-weight: bold;
            color: #ffffff;
        }

        .form-group input[type="text"],
        .form-group input[type="tel"],
        .form-group select,
        .form-group textarea,
        .form-group input[type="file"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            width: 100%;
        }

        .form-group textarea {
            resize: none;
        }

        button {
            padding: 10px 20px;
            border: none;
            background-color: #ffc107;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin: 20px auto;
        }

        button:hover {
            background-color: black;
        }

        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
        }
    </style>
    <script>
        function toggleAskerlikDurumu() {
            const cinsiyet = document.querySelector('input[name="cinsiyet"]:checked').value;
            const askerlikDiv = document.getElementById("askerlik_durumu");
            if (cinsiyet === "Erkek") {
                askerlikDiv.style.display = "block";
            } else {
                askerlikDiv.style.display = "none";
            }
        }
        function toggleIsDeneyimi() {
            const deneyimVar = document.querySelector('input[name="is_deneyimi"]:checked').value;
            const detayDiv = document.getElementById("is_deneyimi_detay");
            if (deneyimVar === "Evet") {
                detayDiv.style.display = "block";
            } else {
                detayDiv.style.display = "none";
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <img src="./images/lon6.png" width="100px" alt="Logo">
        <h1>İş Başvuru Formu</h1>
        <form action="bilgi.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="ad_soyad">Ad Soyad:</label>
                <input type="text" name="ad_soyad" id="ad_soyad" placeholder="Adınızı ve soyadınızı giriniz" required>
            </div>
            <div class="form-group">
                <label for="telefon">Telefon Numarası:</label>
                <input type="tel" name="telefon" id="telefon" placeholder="Telefon numaranızı giriniz" required>
            </div>

            <div class="form-group">
                <label for="sehir">Yaşadığınız Şehir:</label>
                <select name="sehir" id="sehir" required>
                    <option value="" disabled selected>Seçiniz</option>
                    <option value="Adana">Adana</option>
                    <option value="Adıyaman">Adıyaman</option>
                    <option value="Afyonkarahisar">Afyonkarahisar</option>
                    <option value="Ağrı">Ağrı</option>
                    <option value="Amasya">Amasya</option>
                    <option value="Ankara">Ankara</option>
                    <option value="Antalya">Antalya</option>
                    <option value="Artvin">Artvin</option>
                    <option value="Aydın">Aydın</option>
                    <option value="Balıkesir">Balıkesir</option>
                    <option value="Bilecik">Bilecik</option>
                    <option value="Bingöl">Bingöl</option>
                    <option value="Bitlis">Bitlis</option>
                    <option value="Bolu">Bolu</option>
                    <option value="Burdur">Burdur</option>
                    <option value="Bursa">Bursa</option>
                    <option value="Çanakkale">Çanakkale</option>
                    <option value="Çankırı">Çankırı</option>
                    <option value="Çorum">Çorum</option>
                    <option value="Denizli">Denizli</option>
                    <option value="Diyarbakır">Diyarbakır</option>
                    <option value="Edirne">Edirne</option>
                    <option value="Elazığ">Elazığ</option>
                    <option value="Erzincan">Erzincan</option>
                    <option value="Erzurum">Erzurum</option>
                    <option value="Eskişehir">Eskişehir</option>
                    <option value="Gaziantep">Gaziantep</option>
                    <option value="Giresun">Giresun</option>
                    <option value="Gümüşhane">Gümüşhane</option>
                    <option value="Hakkâri">Hakkâri</option>
                    <option value="Hatay">Hatay</option>
                    <option value="Iğdır">Iğdır</option>
                    <option value="Isparta">Isparta</option>
                    <option value="İstanbul">İstanbul</option>
                    <option value="İzmir">İzmir</option>
                    <option value="Kahramanmaraş">Kahramanmaraş</option>
                    <option value="Karabük">Karabük</option>
                    <option value="Karaman">Karaman</option>
                    <option value="Kars">Kars</option>
                    <option value="Kastamonu">Kastamonu</option>
                    <option value="Kayseri">Kayseri</option>
                    <option value="Kırıkkale">Kırıkkale</option>
                    <option value="Kırklareli">Kırklareli</option>
                    <option value="Kırşehir">Kırşehir</option>
                    <option value="Kilis">Kilis</option>
                    <option value="Kocaeli">Kocaeli</option>
                    <option value="Konya">Konya</option>
                    <option value="Kütahya">Kütahya</option>
                    <option value="Malatya">Malatya</option>
                    <option value="Manisa">Manisa</option>
                    <option value="Mardin">Mardin</option>
                    <option value="Mersin">Mersin</option>
                    <option value="Muğla">Muğla</option>
                    <option value="Muş">Muş</option>
                    <option value="Nevşehir">Nevşehir</option>
                    <option value="Niğde">Niğde</option>
                    <option value="Ordu">Ordu</option>
                    <option value="Osmaniye">Osmaniye</option>
                    <option value="Rize">Rize</option>
                    <option value="Sakarya">Sakarya</option>
                    <option value="Samsun">Samsun</option>
                    <option value="Siirt">Siirt</option>
                    <option value="Sinop">Sinop</option>
                    <option value="Sivas">Sivas</option>
                    <option value="Şanlıurfa">Şanlıurfa</option>
                    <option value="Şırnak">Şırnak</option>
                    <option value="Tekirdağ">Tekirdağ</option>
                    <option value="Tokat">Tokat</option>
                    <option value="Trabzon">Trabzon</option>
                    <option value="Tunceli">Tunceli</option>
                    <option value="Uşak">Uşak</option>
                    <option value="Van">Van</option>
                    <option value="Yalova">Yalova</option>
                    <option value="Yozgat">Yozgat</option>
                    <option value="Zonguldak">Zonguldak</option>
                </select>
            </div>
            <div class="form-group">
                <label>Cinsiyetiniz:</label>
                <div class="radio-group">
                    <label><input type="radio" name="cinsiyet" value="Erkek" onclick="toggleAskerlikDurumu()">
                        Erkek</label>
                    <label><input type="radio" name="cinsiyet" value="Kadın" onclick="toggleAskerlikDurumu()">
                        Kadın</label>
                </div>
            </div>
            <div id="askerlik_durumu" style="display:none;" class="form-group">
                <label for="askerlik">Askerlik Durumu:</label>
                <select id="askerlik" name="askerlik">
                    <option value="Tamamlandi">Tamamlandı</option>
                    <option value="Tecilli">Tecilli</option>
                    <option value="Muaf">Muaf</option>
                </select>
            </div>

            <div class="form-group">
                <label for="universite">Mezun Olduğunuz Üniversite:</label>
                <select name="universite" id="universite" required>
                    <option value="" disabled selected>Seçiniz</option>
                    <option value="Adana Alparslan Türkeş Bilim ve Teknoloji Üniversitesi">Adana Alparslan Türkeş Bilim
                        ve Teknoloji Üniversitesi</option>
                    <option value="Adıyaman Üniversitesi">Adıyaman Üniversitesi</option>
                    <option value="Afyon Kocatepe Üniversitesi">Afyon Kocatepe Üniversitesi</option>
                    <option value="Ağrı İbrahim Çeçen Üniversitesi">Ağrı İbrahim Çeçen Üniversitesi</option>
                    <option value="Aksaray Üniversitesi">Aksaray Üniversitesi</option>
                    <option value="Alanya Alaaddin Keykubat Üniversitesi">Alanya Alaaddin Keykubat Üniversitesi</option>
                    <option value="Anadolu Üniversitesi">Anadolu Üniversitesi</option>
                    <option value="Ankara Üniversitesi">Ankara Üniversitesi</option>
                    <option value="Atatürk Üniversitesi">Atatürk Üniversitesi</option>
                    <option value="Avrasya Üniversitesi">Avrasya Üniversitesi</option>
                    <option value="Balıkesir Üniversitesi">Balıkesir Üniversitesi</option>
                    <option value="Bartın Üniversitesi">Bartın Üniversitesi</option>
                    <option value="Batman Üniversitesi">Batman Üniversitesi</option>
                    <option value="Bingöl Üniversitesi">Bingöl Üniversitesi</option>
                    <option value="Bitlis Eren Üniversitesi">Bitlis Eren Üniversitesi</option>
                    <option value="Boğaziçi Üniversitesi">Boğaziçi Üniversitesi</option>
                    <option value="Bolu Abant İzzet Baysal Üniversitesi">Bolu Abant İzzet Baysal Üniversitesi</option>
                    <option value="Çankaya Üniversitesi">Çankaya Üniversitesi</option>
                    <option value="Çukurova Üniversitesi">Çukurova Üniversitesi</option>
                    <option value="Dicle Üniversitesi">Dicle Üniversitesi</option>
                    <option value="Dokuz Eylül Üniversitesi">Dokuz Eylül Üniversitesi</option>
                    <option value="Ege Üniversitesi">Ege Üniversitesi</option>
                    <option value="Erciyes Üniversitesi">Erciyes Üniversitesi</option>
                    <option value="Fırat Üniversitesi">Fırat Üniversitesi</option>
                    <option value="Gazi Üniversitesi">Gazi Üniversitesi</option>
                    <option value="Gaziantep Üniversitesi">Gaziantep Üniversitesi</option>
                    <option value="Giresun Üniversitesi">Giresun Üniversitesi</option>
                    <option value="Hacettepe Üniversitesi">Hacettepe Üniversitesi</option>
                    <option value="Hakkari Üniversitesi">Hakkari Üniversitesi</option>
                    <option value="İstanbul Üniversitesi">İstanbul Üniversitesi</option>
                    <option value="İstanbul Teknik Üniversitesi">İstanbul Teknik Üniversitesi</option>
                    <option value="İzmir Ekonomi Üniversitesi">İzmir Ekonomi Üniversitesi</option>
                    <option value="İzmir Yüksek Teknoloji Enstitüsü">İzmir Yüksek Teknoloji Enstitüsü</option>
                    <option value="Kadir Has Üniversitesi">Kadir Has Üniversitesi</option>
                    <option value="Karadeniz Teknik Üniversitesi">Karadeniz Teknik Üniversitesi</option>
                    <option value="Kastamonu Üniversitesi">Kastamonu Üniversitesi</option>
                    <option value="Koç Üniversitesi">Koç Üniversitesi</option>
                    <option value="Kocaeli Üniversitesi">Kocaeli Üniversitesi</option>
                    <option value="Konya Gıda ve Tarım Üniversitesi">Konya Gıda ve Tarım Üniversitesi</option>
                    <option value="Kütahya Dumlupınar Üniversitesi">Kütahya Dumlupınar Üniversitesi</option>
                    <option value="Marmara Üniversitesi">Marmara Üniversitesi</option>
                    <option value="Mersin Üniversitesi">Mersin Üniversitesi</option>
                    <option value="Muğla Sıtkı Koçman Üniversitesi">Muğla Sıtkı Koçman Üniversitesi</option>
                    <option value="Muş Alparslan Üniversitesi">Muş Alparslan Üniversitesi</option>
                    <option value="Necmettin Erbakan Üniversitesi">Necmettin Erbakan Üniversitesi</option>
                    <option value="Nevşehir Hacı Bektaş Veli Üniversitesi">Nevşehir Hacı Bektaş Veli Üniversitesi
                    </option>
                    <option value="Niğde Ömer Halisdemir Üniversitesi">Niğde Ömer Halisdemir Üniversitesi</option>
                    <option value="Ondokuz Mayıs Üniversitesi">Ondokuz Mayıs Üniversitesi</option>
                    <option value="Ordu Üniversitesi">Ordu Üniversitesi</option>
                    <option value="Osmaniye Korkut Ata Üniversitesi">Osmaniye Korkut Ata Üniversitesi</option>
                    <option value="Pamukkale Üniversitesi">Pamukkale Üniversitesi</option>
                    <option value="Piri Reis Üniversitesi">Piri Reis Üniversitesi</option>
                    <option value="Sakarya Üniversitesi">Sakarya Üniversitesi</option>
                    <option value="Selçuk Üniversitesi">Selçuk Üniversitesi</option>
                    <option value="Siirt Üniversitesi">Siirt Üniversitesi</option>
                    <option value="Süleyman Demirel Üniversitesi">Süleyman Demirel Üniversitesi</option>
                    <option value="Şırnak Üniversitesi">Şırnak Üniversitesi</option>
                    <option value="Trakya Üniversitesi">Trakya Üniversitesi</option>
                    <option value="Türk Hava Kurumu Üniversitesi">Türk Hava Kurumu Üniversitesi</option>
                    <option value="Uludağ Üniversitesi">Uludağ Üniversitesi</option>
                    <option value="Yalova Üniversitesi">Yalova Üniversitesi</option>
                    <option value="Yeditepe Üniversitesi">Yeditepe Üniversitesi</option>
                    <option value="Zonguldak Bülent Ecevit Üniversitesi">Zonguldak Bülent Ecevit Üniversitesi</option>
                </select>
            </div>

            <div class="form-group">
                <label for="universite_bolumu">Hangi Bölümden Mezunsunuz:</label>
                <select name="universite_bolumu" id="universite_bolumu" required>
                    <option value="" disabled selected>Seçiniz</option>
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
            <div class="form-group">
                <label for="ingilizce">İngilizce Seviyesi:</label>
                <select name="ingilizce" id="ingilizce" required>
                    <option value="" disabled selected>Seçiniz</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                </select>
            </div>
            <div class="form-group">
                <label for="deneyim">Finansal Planlama, Raporlama ve Analiz alanındaki deneyiminiz:</label>
                <select name="deneyim" id="deneyim" required>
                    <option value="" disabled selected>Seçiniz</option>
                    <option value="Deneyimsiz">Deneyimsiz</option>
                    <option value="0-1 yıl">0-1 yıl</option>
                    <option value="1-3 yıl">1-3 yıl</option>
                    <option value="+3 yıl">+3 yıl</option>
                </select>
            </div>
            <div class="form-group">
                <label for="bdenetim">Bağımsız Denetim Tecrübeniz:</label>
                <select name="bdenetim" id="bdenetim" required>
                    <option value="" disabled selected>Seçiniz</option>
                    <option value="Var">Var</option>
                    <option value="Yok">Yok</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sap">SAP işlem ve raporlama platformlarına hakimiyetiniz:</label>
                <select name="sap" id="sap" required>
                    <option value="" disabled selected>Seçiniz</option>
                    <option value="Acemi">Acemi</option>
                    <option value="Hakim">Hakim</option>
                    <option value="Uzman">Uzman</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ms_office">Excel ve diğer MS Office uygulamalarına hakimiyetiniz:</label>
                <select name="ms_office" id="ms_office" required>
                    <option value="" disabled selected>Seçiniz</option>
                    <option value="Acemi">Acemi</option>
                    <option value="Hakim">Hakim</option>
                    <option value="Uzman">Uzman</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ufrs">Konsolidasyon ve UFRS raporlama alanındaki deneyiminiz:</label>
                <select name="ufrs" id="ufrs" required>
                    <option value="" disabled selected>Seçiniz</option>
                    <option value="Deneyimsiz">Deneyimsiz</option>
                    <option value="0-1 yıl">0-1 yıl</option>
                    <option value="1-3 yıl">1-3 yıl</option>
                    <option value="+3 yıl">+3 yıl</option>
                </select>
            </div>
            <div class="form-group">
                <label for="takim">Daha önce takım çalışmasında bulundunuz mu:</label>
                <select name="takim" id="takim" required>
                    <option value="" disabled selected>Seçiniz</option>
                    <option value="evet">Evet</option>
                    <option value="hayır">Hayır</option>
                </select>
            </div>
            <div class="form-group">
                <label>Daha önce iş deneyiminiz var mı?</label>
                <label><input type="radio" name="is_deneyimi" value="Evet" onclick="toggleIsDeneyimi()"> Evet</label>
                <label><input type="radio" name="is_deneyimi" value="Hayır" onclick="toggleIsDeneyimi()"> Hayır</label>
            </div>
            <div id="is_deneyimi_detay" style="display:none;" class="form-group">
                <label for="is_deneyimi_metni">Deneyiminiz Hakkında Bilgi:</label>
                <textarea id="is_deneyimi_metni" name="is_deneyimi_metni" rows="4"></textarea>
            </div>



            <div class="form-group">
                <label for="cv">Özgeçmiş Ekleyiniz:</label>
                <input type="file" name="cv" id="cv" accept=".pdf, .doc, .docx" required>
            </div>
            <button type="submit">Başvur</button>
        </form>
    </div>
    <script>
        function showAskerlikDurumu(show) {
            document.getElementById('askerlik_durumu').style.display = show ? 'block' : 'none';
        }

        function showTextArea(show) {
            document.getElementById('is_deneyimi_detay').style.display = show ? 'block' : 'none';
        }

        document.getElementById('ingilizce').addEventListener('input', function (e) {
            const levelMap = { 1: 'A1', 2: 'A2', 3: 'B1', 4: 'B2', 5: 'C1', 6: 'C2' };
            document.getElementById('ingilizce_level').textContent = `Seviye: ${levelMap[e.target.value]}`;
        });
    </script>
</body>

</html>