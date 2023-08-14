<?php
    include("yonetim/baglan.php");
    include("taslak.php");
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
            #text{
                margin-left:15px;
                margin-top:210px;
                color:white;
                text-align:center;
            }
  
        </style>
    </head>

    <body>
        <header>

        </header>

        <main>
            
            <div id="text">
                <h2>Hakkımızda</h2>
                <br>
                <?php
                    $sorgu = $baglan->query("select * from hakkimizda");
                    $satir = $sorgu->fetch_object();
                    echo $satir->aciklama;
                ?>
            </div>
        </main>

        <hr>

        <footer>
            <div id="sosyal">
                    <a href="https://www.instagram.com/" target="_blank" ><i  class="fa-brands fa-square-instagram fa-shake fa-3x" style="color: #fafafa;"></i></a>
                    <a href="https://web.whatsapp.com/" target="_blank" ><i class="fa-brands fa-square-whatsapp fa-shake fa-3x" style="color: #ffffff;"></i></a>
                    <a href="https://tr-tr.facebook.com/" target="_blank" ><i class="fa-brands fa-square-facebook fa-shake fa-3x" style="color: #ffffff;"></i></a>
                    <a href="https://twitter.com/?lang=tr" target="_blank" ><i class="fa-brands fa-square-twitter fa-shake fa-3x" style="color: #ffffff;"></i></a>
            </div>
        </footer>
    </body>


</html>