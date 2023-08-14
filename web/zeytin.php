<?php
    include("taslak.php");
    include("yonetim/baglan.php");
?>
<html>
    <head>
        <style>
            body{
                background-image: url("images/zeytin.jpg");
                background-repeat:no-repeat;
                background-size:100%;
                background-color:#141a08;
            }
            .accordion-item{
                background-color:#b3c6ff;
                border-color:  #0040ff;
            }
            .accordion-item button{
               color: #001a66;
            }
            .accordion-item button:focus{
               color:   #002db3;
            }
        </style>
    </head>

    <body>
        
    <main>
    <div id="accordion">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Siyah Zeytin
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <?php
                            $sorgu = $baglan->query("select * from zeytin");
                            if ($sorgu && $sorgu->num_rows > 0) {
                                $satir = $sorgu->fetch_object();
                                echo $satir->aciklama;
                            } 
                        ?>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Yeşil Zeytin
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <?php
                            $sorgu = $baglan->query("select * from zeytin");
                            $satir = $sorgu->fetch_object();
                            echo $satir->aciklama2;
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