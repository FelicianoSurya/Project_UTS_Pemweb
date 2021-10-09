<!DOCTYPE html>
<html lang="en">
<head>
<?php
    session_start();
    define('URL', dirname(dirname(__FILE__)));
    include_once(URL . "/Controllers/Middleware.php");
    include_once(URL . "/include_db/connection.php");
    if(isset($_SESSION['role'])){
        include_once(URL . "/Controllers/UserController.php");
    }
    include_once(URL . "/Controllers/KategoriController.php");
    include_once(URL . "/Controllers/BeritaController.php");

    $kategories = fetchKategori();
    $news = fetchBerita();
    $highlights = fetchHighlight();
    $beritaUtama = fetchBeritaUtama();
    $beritaTerbaru = fetchBeritaTerbaru();
    
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <?php include(URL . '/Views/base/includecss.php');?>

    <!-- bootstrap -->
    

    <link href="Assets/css/aboutUs.css" rel="stylesheet">
</head>
<body>
    <?php include_once(URL . "/Views/base/header.php") ?>
    <div class="d-flex justify-content-center" data-aos="zoom-out">
        <div class="history container py-4">
            <div class="history-title">History</div>
            <div class="line"></div>
            <div class="history-image">
                <img src="Assets/images/home/logo.png" alt=""></img>
            </div>
            <div class="history-teks container">
                <p>News Paper, disingkat NP, adalah perusahaan Indonesia yang bergerak di bidang media massa yang didirikan pada tanggal 2 Oktober 2021, oleh 4 orang yang bernama Feliciano Surya Marcelo, Lifosmin Simon, Fernando Khorasani, dan Dea Noveriyanti. Kehadiran News Paper tidak terlepas dari sejarah panjang demi mencapai cita-cita mulia dalam rangka mencerdaskan bangsa.</p></br>
                <p>Pada tahun 2021 perusahaan ini mulai berkembang pesat, terutama dalam bidang komunikasi. Saat ini, Kompas Gramedia memiliki beberapa anak perusahaan/bisnis unit yang bervariatif dari media massa cetak maupun daring, toko buku, percetakan, penerbitan, radio, hotel, lembaga pendidikan, bentara budaya, penyelenggara acara, stasiun televisi, hingga universitas.</p>
            </div>
        </div>
    </div>
    <div class="team ">
        <div class="d-flex header align-items-center ">
            <div class="line1 flex-grow-1"></div>
            <div class="px-5 team-title">Our Team</div>
            <div class="line1 flex-grow-1"></div>
        </div>
        <div class="box-container row">
            <div class="col-lg-3 col-md-6 col-12 co p-4" data-aos="fade-up">
                <div class="box">
                    <div class="img-container m-auto d-flex justify-content-center w-100">
                        <img src="Assets/images/aboutUs/nando.png" alt=""></img>
                    </div>
                    <div class="box-name">
                        <p>Fernando Khorasani</p>
                        <p>000 000 43088</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12  p-4" data-aos="fade-up">
                <div class="box">
                <div class="img-container m-auto d-flex justify-content-center w-100">
                    <img src="Assets/images/aboutUs/lifos.png" alt=""></img> 
                </div>    
                    <div class="box-name">
                        <p>Lifosmin Simon</p>
                        <p>000 000 45574</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 p-4" data-aos="fade-up">
                <div class="box">
                <div class="img-container m-auto d-flex justify-content-center w-100">
                    <img src="Assets/images/aboutUs/ano.png" alt=""></img>
                </div>    
                    <div class="box-name">
                        <p>Feliciano Surya Marcelo</p>
                        <p>000 000 43255</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 p-4" data-aos="fade-up">
                <div class="box">
                <div class="img-container m-auto d-flex justify-content-center w-100">
                    <img src="Assets/images/aboutUs/dea.png" alt=""></img>    
                </div>    
                    <div class="box-name">
                        <p>Dea Noveriyanti</p>
                        <p>000 000 42550</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php include(URL . '/Views/base/footer.php') ?>

</body>

<script>
    var maxHeight = 0;

    var divs = jQuery(".box");
    jQuery.each(divs, function(){
        var height = jQuery(this).height();
        if(maxHeight<height)
            maxHeight = height;

    });
    divs.height(maxHeight);
</script>
<script>
      AOS.init();
    </script>
</html>