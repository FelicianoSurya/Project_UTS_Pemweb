<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./Assets/css/home.css" rel="stylesheet">
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <title>Newspapers</title>

    <?php
    define('URL', dirname(dirname(__FILE__)));
    include_once(URL . "/include_db/connection.php");
    include(URL . '/Views/base/includecss.php');
    include_once(URL . "/Controllers/Middleware.php");
    if(isset($_SESSION['role'])){
        include_once(URL . "/Controllers/UserController.php");
    }
    include_once(URL . "/Controllers/KategoriController.php");
    include_once(URL . "/Controllers/BeritaController.php");
    include_once(URL . "/Controllers/RedirectController.php");

    $kategories = fetchKategori();
    $news = fetchBerita();
    $highlights = fetchHighlight();
    $beritaUtama = fetchBeritaUtama();
    $beritaTerbaru = fetchBeritaTerbaru();
    $login = redirectLogin();
    
?>
</head>
<body>

<?php include_once(URL . '/Views/base/header.php'); ?>

<div class="section-1 py-2" data-aos="zoom-in">
    <div class="swiper-container container py-4" >
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php foreach($highlights as $highlight){ ?>
                <div  class="swiper-slide m-auto px-3">
                        <div onclick="detailBerita(<?php echo $highlight->id ?>)"class="img-container m-auto" style="background-image:url('./<?php echo $highlight->gambar ?>')">
                            <div class="overlay-span"></div>
                            <span>
                                <h2><?php echo $highlight->judul ?></h2>
                                <h6><?php echo $highlight->tanggal_publikasi ?></h6>
                                <div class="description-wrapper">
                                    <h6 class="description"><?php echo $highlight->subjudul ?></h6>
                                </div>
                            </span>
                        </div>
                </div>
                <?php } ?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"><div class="container-navi-swipe"> </div></div>                                                                  
            <div class="swiper-button-next"><div class="container-navi-swipe"> </div></div>
        </div>
    </div>
</div>

<div class="section-2">
    <div class="container">
        <div class="d-flex header align-items-center">
            <div class="line flex-grow-1"></div>
            <h2 class="px-5 py-2">Berita Utama</h2>
            <div class="line flex-grow-1"></div>
        </div>
        <div class="row">
            <?php 
                $i = 1;
                foreach($beritaUtama as $utama){ 
                    if($i > 4){
                        break;
                    }
                    else{
            ?>
            <div onclick="detailBerita(<?php echo $utama->id ?>)" class="col-lg-3  col-md-6 col-12 p-2 news" data-aos="fade-right" data-aos-duration="1000">
                <div class="box ">
                    <div class="box-tag">
                        <h5><?php echo $utama->id_kategori ?></h5>
                    </div>
                    <div class="img-container m-auto">
                        <img src="./<?php echo $utama->gambar ?>" width="100%" alt="">
                    </div>
                    <span>
                        <h4><?php echo $utama->judul ?></h3>
                        <h6><?php echo $utama->tanggal_publikasi ?></h5>
                    </span>
                </div>
            </div>
            <?php $i++;}} ?>
        </div>
    </div>
</div>

<div class="section-3 py-3">
    <div class="container beritabaru p-5">
        <div class="d-flex header align-items-center pb-4">
            <div class="line flex-grow-1"></div>
            <h2 class="px-5 ">Berita Terbaru</h2>
            <div class="line flex-grow-1"></div>
        </div>

        <div class="row">
            <?php $i = 1;
            foreach($beritaTerbaru as $baru){ 
                if($i > 4){
                    break;
                }
                else{
            ?>
            
            <div onclick="detailBerita(<?php echo $baru->id ?>)" class="col-lg-3  col-md-6 col-12 p-2 " data-aos="fade-left">
                <div class="box py-4 news">
                    <div class="img-container" >
                        <div class="box-tag">
                            <h5><?php echo $baru->id_kategori ?></h5>
                        </div>
                        <img src="./<?php echo $baru->gambar ?>" width="100%" alt="">
                    </div>
                    
                    <div class="p-4 flex-grow-1">
                        <h3 class="text-start"><?php echo $baru->judul ?></h3>
                        <div class="description-wrapper">
                            <p class="text-start description"><?php echo $baru->subjudul ?></p>
                        </div>
                        
                    </div>
                    <div class="px-4">
                        <h6 class="text-end"><?php echo $baru->tanggal_publikasi ?></h6>
                    </div>
                    
                </div>
            </div>     
            <?php $i++;}} ?>

        </div>
    </div>
</div>


<div class="section-4">
    <div class="container py-4">
        <div class="d-flex header align-items-center">
            <div class="line flex-grow-1"></div>
            <h2 class="px-5 text-center">Update Berita </br> Covid</h1>
            <div class="line flex-grow-1"></div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-fb7c1fdb-7d53-4845-b5ac-b08e95ab4fd1"></div>
        </div>
        
    </div>

</div>

<?php include(URL . '/Views/base/footer.php'); ?>


</body>

<script>



// var maxHeight3 = 0;

// var divs3 = jQuery(".section-2 img");
// jQuery.each(divs3, function(){
//     var height = jQuery(this).height();
//     if(maxHeight3<height)
//         maxHeight3 = height;

// });
// divs3.height(maxHeight3);

// var maxHeight2 = 0;

// var divs2 = jQuery(".section-3 img");
// jQuery.each(divs2, function(){
//     var height = jQuery(this).height();
//     if(maxHeight2<height)
//         maxHeight2 = height;

// });
// divs2.height(maxHeight2);

var maxHeight = 0;

var divs = jQuery(".section-3 .news");
jQuery.each(divs, function(){
    var height = jQuery(this).height();
    if(maxHeight<height)
        maxHeight = height;

});
divs.height(maxHeight);

// function myFunction(x){
//         if(x.matches){
            
//         }
        
        
//     }
//     var x = window.matchMedia("(min-width: 1200px)");
    
//     myFunction(x);



 


const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
});


     AOS.init();

</script>


</html>
