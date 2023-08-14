<?php
    session_start();
    include("baglan.php");
    include("menu.php");

    if ($_SESSION["giris"] != sha1(md5("var")) || $_COOKIE["kullanici"] != "msb") {
        header("Location: cikis.php");
        exit; // Eğer giriş doğrulaması yapılmazsa, kodun devam etmesini önlemek için exit kullanın.
    }

    // İçerikleri güncelleme işlemi
    if ($_POST) {
        if (isset($_POST["tiryaki"])) {
            $aciklama = $_POST["tiryaki"];
            $sorgu = $baglan->query("UPDATE anasayfa SET tiryaki = '$aciklama'");
        }

        if (isset($_POST["bal"])) {
            $aciklama = $_POST["bal"];
            $sorgu = $baglan->query("UPDATE anasayfa SET bal = '$aciklama'");
        }

        if (isset($_POST["filiz"])) {
            $aciklama = $_POST["filiz"];
            $sorgu = $baglan->query("UPDATE anasayfa SET filiz = '$aciklama'");
        }

        if (isset($_POST["zeytin"])) {
            $aciklama = $_POST["zeytin"];
            $sorgu = $baglan->query("UPDATE anasayfa SET zeytin = '$aciklama'");
        }

        if (isset($_POST["kral"])) {
            $aciklama = $_POST["kral"];
            $sorgu = $baglan->query("UPDATE anasayfa SET kral = '$aciklama'");
        }
        
    }
    

    // Mevcut içerikleri getirme işlemi
    $sorgu = $baglan->query("SELECT * FROM anasayfa");
    $satir = $sorgu->fetch_object();
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Yönetim Paneli Hakkımızda</title>
    <style>
        form{
            margin-bottom:65px;
        }
    </style>
</head>
<body style="text-align:center;">

    <form action="" method="post">
        <b>Tiryaki İçeriği:</b><br><br>
        <textarea style="width:60%;height:200px;" name="tiryaki"><?php echo $satir->tiryaki; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>

    <form action="" method="post">
        <b>Bal İçeriği:</b><br><br>
        <textarea style="width:60%;height:200px;" name="bal"><?php echo $satir->bal; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>

    <form action="" method="post">
        <b>Filiz İçeriği:</b><br><br>
        <textarea style="width:60%;height:200px;" name="filiz"><?php echo $satir->filiz; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>

    <form action="" method="post">
        <b>Zeytin İçeriği:</b><br><br>
        <textarea style="width:60%;height:200px;" name="zeytin"><?php echo $satir->zeytin; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>

    <form action="" method="post">
        <b>Kral İçeriği:</b><br><br>
        <textarea style="width:60%;height:200px;" name="kral"><?php echo $satir->kral; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>

</body>
</html>
