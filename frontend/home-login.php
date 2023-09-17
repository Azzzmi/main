<?php
include '../conn/config.php';
error_reporting();
define("URL_SITUS", "http://localhost/project_webapp/");
define("PATH_GAMBAR", "photo");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB AKhir</title>


    <!-- FEATRES ICON -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@100;200;300;400;500;600;700;800&family=Lexend+Deca:wght@600;700;800;900&family=Mukta:wght@300;400;500;600;700;800&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <!--NAv BAR-->
    <nav class="navbar">
        <a href="#" class="navbar-logo"><span>HO</span>RPG.</a>

        <div class="navbar-isi">
            <a href="#home">HOME</a>
            <a href="#trending">TRENDING</a>
            <a href="#list">LIST GAME</a>
            <a href="#SOCIAL">SOCIAL</a>
        </div>

        <div class="navbar-tambahan">
            <a href="#" id="menuBar"><i data-feather="menu"></i></a>
            <a href="login.php" id="message"><i data-feather="log-in"></i></a>
        </div>
    </nav>
    <!--NAV END-->

    <!--Hero Section-->
    <section class="hero" id="home">
        <main class="content">
            <h2><span>HO</span>RPG.</h2>
            <p>HOUSE OF RPG adalah situs yg dibuat untuk para komunitas game rpg<br>di seluruh indonesia, yang terbentuk untuk mengumpulkan informasi <br>apa saja yang para pemain game rpg dapatkan selama ini</p>

            <a href="login.php">BACA SEKARANG</a>
        </main>
    </section>

    <!--Hero Section-->

    <!-- Trending mulai-->
    <!--konterner 1 start-->
    <sec id="trending" class="container-trending">
        <h1><span>TR</span>ENDING</h1>
        <br>
        <br>
        <div class="kontainer">
            <?php
            include '../conn/config.php';
            error_reporting();
            $sql = "SELECT * FROM artikel";
            $hasil = mysqli_query($conn, $sql);
            $jmlArtikel = mysqli_num_rows($hasil);
            if ($jmlArtikel > 0) {
                while ($row = mysqli_fetch_assoc($hasil)) {
            ?>
                    <div class="card">
                        <div class="header">
                            <?= $row["image"]; ?>
                        </div>
                        <div class="info">
                            <p class="title">
                                <?= $row["judul"]; ?>
                            </p>
                        </div>
                        <div class="footer">
                            <p>
                            </p>
                            <button onclick="location.href='login.php'" class="btn">
                                <a href="login.php">
                                    Baca selengkapnya
                                </a>
                            </button>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </sec>

<!-- BERITA -->
<sec id="trending" class="container-trending">
    <h1><span>BE</span>RITA</h1>
    <br>
    <br>
    <div class="content-berita">
        <div class="kontainer-berita">
            <div class="card-group">
                <!-- Card 1 -->
                <div class="card-berita">
                    <img src="../photo/5_Fitur_Baru_Genshin_Impact_4_0__Map_Fontaine_Resmi_Dibuka_.jpg">
                    <div class="header-berita"></div>
                    <div class="card-text">
                        <h3>5 Fitur Baru Gensihn Imapact 4.0, Map Fontaine Resmi Dibuka!.</h3>
                        <br>
                        <p>awdaiwudhuadaihduaiudiaudhiaudwiaudhiauhduwiud</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card-berita">
                    <img src="../photo/5_Alasan_Exiled_Kingdoms_RPG_Layak_Dimainkan__Seru_.jpg">
                    <div class="header-berita"></div>
                    <div class="card-text">
                        <h3>5 Alasan Exiled Kingdom RPG Layak Dimainkan, SERU!.</h3>
                        <p>awdaiwudhuadaihduaiudiaudhiaudwiaudhiauhduwiud</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card-berita">
                    <img src="../photo/Daftar_7_Game_MMORPG_Terbaik_untuk_iOS__Gameplay_Menantang_.jpg">
                    <div class="header-berita"></div>
                    <div class="card-text">
                        <h3>Daftar Game MMORPG Terbaik untuk IOS, Gameplay Menantang!.</h3>
                        <p>awdaiwudhuadaihduaiudiaudhiaudwiaudhiauhduwiud</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 (Kecil) -->
            <div class="card-kecil left-position">
                <div class="card-kecil-populer">
                        <div class="header-kecil-populer"></div>
                        <div class="card-teks-populer">
                            <h3>Berta Populer</h3>
                        </div>
                </div>
                <div class="card-berita-kecil">
                    <img src="../photo/asdasd.jpg">
                    <div class="header-berita-kecil"></div>
                    <div class="card-text-kecil">
                        <h3>Daftar Game MMORPG Terbaik untuk IOS, Gameplay Menantang!.</h3>
                    </div>
                </div>
                <div class="card-berita-kecil">
                    <img src="../photo/asdasd.jpg">
                    <div class="header-berita-kecil"></div>
                    <div class="card-text-kecil">
                        <h3>Daftar Game MMORPG Terbaik untuk IOS, Gameplay Menantang!.</h3>
                    </div>
                </div>
                <div class="card-berita-kecil">
                    <img src="../photo/asdasd.jpg">
                    <div class="header-berita-kecil"></div>
                    <div class="card-text-kecil">
                        <h3>Daftar Game MMORPG Terbaik untuk IOS, Gameplay Menantang!.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</sec>


    <!-- kontener 1 end-->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Trending akhir-->

    <!-- List Game mulai**************************************************************************-->
    <section id="list" class="list">
        <h1>LIST<span>GAME</span></h1>
        <br>
        <br>

        <ul class="gallery">
            <li class="image1">
                <a href="https://ragnarok-origin.com/" target="_blank">
                    <img src="../img/ragnarog.jpeg">
                </a>
            </li>
            <li class="image2">
                <a href="http://www.monsterhunterworld.com/us/">
                    <img src="../img/monter_hunter.jpeg" alt="monter_hunter">
                </a>
            </li>
            <li class="image3">
                <a href="https://www.sea.playblackdesert.com/en-US/Main/Index" target="_blank">
                    <img src="../img/blackDesert.jpg">
                </a>
            </li>
            <li class="image4">
                <a href="https://genshin.hoyoverse.com/id/" target="_blank">
                    <img src="../img/gensin.jpeg">
                </a>
            </li>
        </ul>
    </section>



    <section id="SOCIAL" class="sosial">
        <h1>SO<span>CIAL</span></h1>
        <br>
        <br>

        <div class="image-container">
            <div class="gambar1">
                <img src="../img/gambar_wa.jpg" alt="Gambar 1" class="taller-image">
                <p class="text1"><button id="whatsappBtn"><a href="https://chat.whatsapp.com/IJX1WpleDiR0ENnNrOIwmT" target="_blank">WhatsApp</a></button></p>
            </div>

            <div class="gambar2">
                <img src="../img/gambar_dc.jpg" alt="Gambar 2" class="fade-image">
                <p class="text2"><button id="discordBtn"><a href="https://discord.gg/Nu4899hwEH" target="_blank">Discord</a></button></p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </section>

    <div class="lisensi">
        <br>
        <p>Copyright © Jakastat Co., Hatta gymnastyar,Azmi,Rifqi(studio DTDS). All Rights Reserved</p>
        <br>
        <br>
    </div>
    <!--AKHIR********************************************************************************-->

    <!-- List Game mulai-->





    <!-- CADANGAN
<sec id="list" class="list_1">
    <div class="card-list">
        <div class="header-list"></div>
            <div class="info-list">
                <p class="title-list">How to make this material card ?</p>
                <p class="lorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                molestiae quas vel sint commodi. </p>
            </div>
        <div class="footer-list">
            <p class="tag-list">#HTML #CSS </p>
                <button type="button" class="action-list">Get started </button>
        </div>
    </div>
</sec>
-->
    <!-- List Game mulai-->

    <!-- FEATERS ICON -->
    <script>
        feather.replace()
    </script>

    <script src="../js/script.js"></script>

</body>

</html>