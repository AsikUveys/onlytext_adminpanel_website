<?php
    session_start();
    include("baglan.php");
    include("menu.php");

    if ($_SESSION["giris"] != sha1(md5("var")) || $_COOKIE["kullanici"] != "msb") {
        header("Location: cikis.php");
    }

    if ($_POST) {
        if (isset($_POST["aciklama"])) {
            $aciklama = $_POST["aciklama"];
            $sorgu = $baglan->query("UPDATE filiz SET aciklama = '$aciklama'");
        }

        if (isset($_POST["aciklama2"])) {
            $aciklama = $_POST["aciklama2"];
            $sorgu = $baglan->query("UPDATE filiz SET aciklama2 = '$aciklama'");
        }

        if (isset($_POST["aciklama3"])) {
            $aciklama = $_POST["aciklama3"];
            $sorgu = $baglan->query("UPDATE filiz SET aciklama3 = '$aciklama'");
        }
    }

    $sorgu = $baglan->query("select * from filiz");
    $satir = $sorgu->fetch_object();

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Yönetim Paneli Filiz İçeriği</title>
</head>
<body style="text-align:center;">

<form action="" method="post">
        <b>Filiz Accordion İçeriği 1:</b><br><br>
        <textarea style="width:40%;height:100px;" name="aciklama"><?php echo $satir->aciklama; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>
    <br><br><br><br><br><br>
    <form action="" method="post">
        <b>Filiz Accordion İçeriği 2:</b><br><br>
        <textarea style="width:40%;height:100px;" name="aciklama2"><?php echo $satir->aciklama2; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>
    <br><br><br><br><br><br>
    <form action="" method="post">
        <b>Filiz Accordion İçeriği 3:</b><br><br>
        <textarea style="width:40%;height:100px;" name="aciklama3"><?php echo $satir->aciklama3; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>

</body>
</html>
