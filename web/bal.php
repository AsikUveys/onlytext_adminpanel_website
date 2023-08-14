<?php
    include("yonetim/baglan.php");
    include("taslak.php");
?>
<html>
    <head>
        <style>
            body{
                background-image: url("images/bal.jpg");
                background-repeat:no-repeat;
                background-size:100%;
                background-color:#996600;
            }
            li a:hover{
                color: #ff9900;
            }
            li a:active{
                color:#4d2e00;
            }
            .fa-shake:hover {
                filter: invert(36%) sepia(78%) saturate(1219%) hue-rotate(27deg) brightness(97%) contrast(100%);
            }
            .accordion-item{
                background-color:#ffcc66;
                border-color: #ffcc66;
            }
            .accordion-item button{
               color:#805500;
            }
            .accordion-item button:focus{
               color:#cc8800;
            }

        </style>
    </head>

    <body>
        <main>
            <div id="accordion" >
                <div class="accordion" id="accordionExample">
                    <div  class="accordion-item" >
                        <h2 class="accordion-header" >
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                            Altın Süzme
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body" >
                        <?php
                            $sorgu = $baglan->query("select * from bal");
                            $satir = $sorgu->fetch_object();
                            echo $satir->aciklama;
                        ?>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Kestane Balı
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <?php
                            $sorgu = $baglan->query("select * from bal");
                            $satir = $sorgu->fetch_object();
                            echo $satir->aciklama2;
                        ?>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Çam Balı
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <?php
                            $sorgu = $baglan->query("select * from bal");
                            $satir = $sorgu->fetch_object();
                            echo $satir->aciklama3;
                        ?>
                        </div>
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