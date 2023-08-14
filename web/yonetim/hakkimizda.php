<?php
    session_start();
    include("baglan.php");
    include("menu.php");

    if ($_SESSION["giris"] != sha1(md5("var")) || $_COOKIE["kullanici"] != "msb") {
        header("Location: cikis.php");
    }

    if ($_POST) {
        $aciklama = $_POST["aciklama"];
        $sorgu = $baglan->query("delete from hakkimizda");
        $sorgu = $baglan->query("insert into hakkimizda (aciklama) values ('$aciklama')");
        echo "<script> window.location.href='hakkimizda.php'; </script>";
    }

    $sorgu = $baglan->query("select * from hakkimizda");
    $satir = $sorgu->fetch_object();

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Yönetim Paneli Hakkımızda</title>
</head>
<body style="text-align:center;">

    <form action="" method="post">
        <b>Hakkımızda İçeriği:</b><br><br>
        <textarea style="width:80%;height:300px;" name="aciklama"><?php echo $satir->aciklama; ?></textarea><br><br>
        <input type="submit" value="Kaydet">
    </form>

    

</body>
</html>
