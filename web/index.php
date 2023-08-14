<?php
    include("taslak.php");
    include("yonetim/baglan.php");
?>

<html>
    <head>
        <style>
            body{
                background-image: url("images/premium.jpg");
                background-repeat:no-repeat;
                background-size:100%;
                background-color:#141a08;
            }
            footer{
                height: 85px;
                
            }
        </style>
    </head>

    <body>
        <main>
            <div id="maincard">
                <div class="card" style="width: 18rem;">
                    <img src="images/tiryaki.jpg" class="card-img-top" alt="tiryakicay">
                    <div class="card-body">
                        <h5 class="card-title">Tiryaki Çay</h5>
                        <?php
                            $sorgu = $baglan->query("select * from anasayfa");
                            $satir = $sorgu->fetch_object();
                            echo $satir->tiryaki;
                        ?>
                        <a href="tiryaki.php" class="btn btn-Success ">Ayrıntılı Bilgi</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="images/bal.jpg" class="card-img-top" alt="kralcay">
                    <div class="card-body">
                        <h5 class="card-title">Organik Bal</h5>
                        <?php
                            $sorgu = $baglan->query("select * from anasayfa");
                            $satir = $sorgu->fetch_object();
                            echo $satir->bal;
                        ?>
                        <a href="bal.php" class="btn btn-Success ">Ayrıntılı Bilgi</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="images/filiz.jpg" class="card-img-top" alt="filizcay">
                    <div class="card-body">
                        <h5 class="card-title">Filiz Çay</h5>
                        <?php
                            $sorgu = $baglan->query("select * from anasayfa");
                            $satir = $sorgu->fetch_object();
                            echo $satir->filiz;
                        ?>
                        <a href="filiz.php" class="btn btn-Success ">Ayrıntılı Bilgi</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="images/zeytin.jpg" class="card-img-top" alt="kralcay">
                    <div class="card-body">
                        <h5 class="card-title">Organik Zeytin</h5>
                        <?php
                            $sorgu = $baglan->query("select * from anasayfa");
                            $satir = $sorgu->fetch_object();
                            echo $satir->zeytin;
                        ?>
                        <a href="zeytin.php" class="btn btn-Success ">Ayrıntılı Bilgi</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="images/kral.jpg" class="card-img-top" alt="kralcay">
                    <div class="card-body">
                        <h5 class="card-title">Kral Çay</h5>
                        <?php
                            $sorgu = $baglan->query("select * from anasayfa");
                            $satir = $sorgu->fetch_object();
                            echo $satir->kral;
                        ?>
                        <a href="kral.php" class="btn btn-Success ">Ayrıntılı Bilgi</a>
                    </div>
                </div>
            </div>
        </main>
            
        <hr>

        <footer>
            <div id="sosyal">
                <a href="https://www.instagram.com/" target="_blank" ><i class="fa-brands fa-square-instagram fa-shake fa-3x" style="color: #fafafa;"></i></a>
                <a href="https://web.whatsapp.com/" target="_blank" ><i class="fa-brands fa-square-whatsapp fa-shake fa-3x" style="color: #ffffff;"></i></a>
                <a href="https://tr-tr.facebook.com/" target="_blank" ><i class="fa-brands fa-square-facebook fa-shake fa-3x" style="color: #ffffff;"></i></a>
                <a href="https://twitter.com/?lang=tr" target="_blank" ><i class="fa-brands fa-square-twitter fa-shake fa-3x" style="color: #ffffff;"></i></a>
            </div>
        </footer>
    
    </body>
</html>