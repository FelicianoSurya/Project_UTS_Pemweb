<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./Assets/css/home.css" rel="stylesheet">
    <link href="./Assets/js/home.js" rel="stylesheet">
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <title>Document</title>

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./Assets/css/home.css" rel="stylesheet">
    <script src="./Assets/js/home.js"></script>
    <title>Document</title>
</head>
<body>

<?php include_once(URL . '/Views/base/header.php'); ?>

<div class="section-1 py-5" data-aos="zoom-in">
    <div class="swiper-container container py-5" >
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php foreach($highlights as $highlight){ ?>
                <div class="swiper-slide">
                    <div class="overlay-span"></div>
                    <span>
                        <h2><?php echo $highlight->judul ?></h2>
                        <h6><?php echo $highlight->tanggal_publikasi ?></h6>
                        <h6><?php echo $highlight->deskripsi ?></h6>
                    </span>
                    <img width="100%" src="./<?php echo $highlight->gambar ?>" alt="">
                </div>
                <?php } ?>
                <!-- <div  class="swiper-slide">
                    <div class="overlay-span"></div>
                    <span>
                        <h2>Gempa Bumi di Surabaya</h2>
                        <h6>12 Agustus 2021</h6>
                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h6>
                    </span>
                    <img width="100%" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80" alt="">
                </div>
                <div class="swiper-slide">
                    <div class="overlay-span"></div>
                    <span>
                        <h2>Gempa Bumi di Surabaya</h2>
                        <h6>12 Agustus 2021</h6>
                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h6>
                    </span>
                    <img width="100%" src="https://images.unsplash.com/photo-1494500764479-0c8f2919a3d8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80" alt="">
                </div> -->
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</div>

<div class="section-2">
    <div class="container">
        <div class="d-flex header align-items-center">
            <div class="line flex-grow-1"></div>
            <h1 class="px-5 ">Berita Utama</h1>
            <div class="line flex-grow-1"></div>
        </div>
        <div class="row">
            <?php foreach($beritaUtama as $utama){ ?>
            <div class="col-lg-3  col-md-6 col-12 p-2 news" data-aos="fade-right" data-aos-delay="0" data-aos-duration="1500">
                <div class="box ">
                    <div class="box-tag">
                        <h5><?php echo $utama->id_kategori ?></h3>
                    </div>
                    <img src="./<?php echo $utama->gambar ?>" width="100%" alt="">
                </div>
            </div>
            <?php } ?>
            <!-- <div class="col-lg-3  col-md-6 col-12 p-2 news" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1500">
                <div class="box ">
                    <div class="box-tag">
                        <h5>Politics</h3>
                    </div>
                    <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=882&q=80" width="100%" alt="">
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-12 p-2 news" data-aos="fade-right" data-aos-delay="1000" data-aos-duration="1500">
                <div class="box ">
                    <div class="box-tag">
                        <h5>Politics</h3>
                    </div>
                    <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=882&q=80" width="100%" alt="">
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-12 p-2 news" data-aos="fade-right" data-aos-delay="1500" data-aos-duration="1500">
                <div class="box ">
                    <div class="box-tag">
                        <h5>Politics</h3>
                    </div>
                    <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=882&q=80" width="100%" alt="">
                </div>
            </div> -->

        </div>
    </div>
</div>

<div class="section-3">
    <div class="container py-4">
        <div class="d-flex header align-items-center">
            <div class="line flex-grow-1"></div>
            <h1 class="px-5 ">Berita Terbaru</h1>
            <div class="line flex-grow-1"></div>
        </div>

        <div class="row">
            <?php foreach($beritaTerbaru as $baru){ ?>
            <div class="col-lg-3  col-md-6 col-12 p-2 ">
                <div class="box py-4 news">
                    <div class="img-container">
                        <div class="box-tag">
                            <h5><?php echo $baru->id_kategori ?></h3>
                        </div>
                        <img src="./<?php echo $baru->gambar ?>" width="100%" alt="">
                    </div>
                    
                    <div class="p-4">
                        <h3 class="text-start"><?php echo $baru->judul ?></h3>
                        <p class="text-start"><?php echo $baru->deskripsi ?></p>
                        <h6 class="text-end"><?php echo $baru->tanggal_publikasi ?></h6>
                    </div>
                    
                </div>
            </div>     
            <?php } ?>
            <!-- <div class="col-lg-3  col-md-6 col-12 p-2 news">
                <div class="box py-4">
                    <div class="img-container">
                        <div class="box-tag">
                            <h5>Politics</h3>
                        </div>
                        <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=882&q=80" width="100%" alt="">
                    </div>
                    
                    <div class="p-4">
                        <h3 class="text-start">Cristiano Ronaldo Pensiun</h3>
                        <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi qui ipsam inventore, rem suscipit repellat quisquam assumenda sunt accusamus distinctio repellendus deserunt pariatur quidem numquam fuga molestias, dolorum magni. Itaque.</p>
                        <h6 class="text-end">1996-09-12</h6>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-12 p-2 news">
                <div class="box py-4">
                    <div class="img-container">
                        <div class="box-tag">
                            <h5>Politics</h3>
                        </div>
                        <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=882&q=80" width="100%" alt="">
                    </div>
                    
                    <div class="p-4">
                        <h3 class="text-start">Cristiano Ronaldo Pensiun</h3>
                        <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi qui ipsam inventore, rem suscipit repellat quisquam assumenda sunt accusamus distinctio repellendus deserunt pariatur quidem numquam fuga molestias, dolorum magni. Itaque.</p>
                        <h6 class="text-end">1996-09-12</h6>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-12 p-2 news">
                <div class="box py-4">
                    <div class="img-container">
                        <div class="box-tag">
                            <h5>Politics</h3>
                        </div>
                        <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=882&q=80" width="100%" alt="">
                    </div>
                    
                    <div class="p-4">
                        <h3 class="text-start">Cristiano Ronaldo Pensiun</h3>
                        <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi qui ipsam inventore, rem suscipit repellat quisquam assumenda sunt accusamus distinctio repellendus deserunt pariatur quidem numquam fuga molestias, dolorum magni. Itaque.</p>
                        <h6 class="text-end">1996-09-12</h6>
                    </div>
                    
                </div>
            </div> -->

        </div>
    </div>
</div>


<div class="section-4">
    <div class="container py-4">
        <div class="d-flex header align-items-center">
            <div class="line flex-grow-1"></div>
            <h1 class="px-5 ">Halo Gais</h1>
            <div class="line flex-grow-1"></div>
        </div>
        <div class="elfsight-app-63e421e2-f252-4279-b5a8-f66fbc3ddc07"></div>
    </div>

</div>

<?php include(URL . '/Views/base/footer.php'); ?>


</body>

<script>

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



  AOS.init();


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
</script>


</html>
