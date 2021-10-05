<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./Assets/css/news.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <title>Document</title>
    <script src="./Assets/js/news.js"></script>

    <?php
    define('URL', dirname(dirname(__FILE__)));
    include_once(URL . "/Controllers/Middleware.php");
    include_once(URL . "/include_db/connection.php");
    if(isset($_SESSION['role'])){
        include_once(URL . "/Controllers/UserController.php");
    }
    include_once(URL . "/Controllers/KategoriController.php");
    include_once(URL . "/Controllers/BeritaController.php");

    $detail = fetchDetailBerita();
    $kategories = fetchKategori();
    $news = fetchBerita();
    $highlights = fetchHighlight();
    $beritaUtama = fetchBeritaUtama();
    $beritaTerbaru = fetchBeritaTerbaru();
    ?>
    
</head>
<body>
    <div class="container py-5">
        <div class="navigation">
            <a href="">Category</a>
            >
            <a href=""><?php echo $detail->id_kategori ?></a>
        </div>
        <div class="news-title">
            <h1><?php echo $detail->judul ?></h1>
        </div>
        <div class="news-sub pb-2">
            <p>NewsPaper.com  |  <?php echo $detail->tanggal_publikasi ?></p>
        </div>
        <div class="news-image pb-2">
            <img src="./<?php echo $detail->gambar ?>" alt="" width="100%">
        </div>
        <div class="news-image-sub pb-3">
            <p>Ekspor barang dari Sumatera Utara (Sumut) ke China mencapai US$166,18 juta pada Agustus 2021. Porsinya merupakan yang terbesar dari total ekspor. Ilustrasi. (ANTARA FOTO/Akbar Nugroho Gumay).</p>
        </div>
        <div class="news-writer">
            <h5>Penulis <?php echo $detail->penulis ?> | Editor Yuharrani Aisyah</h5>
        </div>
        <div class="news-body pb-4">
            <h6>JAKARTA, NEWSPAPER.com - <?php echo $detail->deskripsi ?></h5>
        </div>

        <div class="comment-section p-4">
            <h3>Komentar</h1>
            <hr>
            <form class=""action="">
                <div class="row addComment py-3 justify-content-around">
                    <div class="profile-comment col-1">

                    </div>
                    
                    <div class="col-9">
                    <input type="text" placeholder="Type your comments here...">
                    </div>

                
                    <div class="col-1">
                        <button class="button-send" type="submit" class="btn btn-primary" " >Send</button>
                    </div>
                </div>

                <!-- ini yang bakal repetitif -->
                <div class="row comments py-3 justify-content-around">
                    <div class="profile-comment col-1">

                    </div>

                    <div class="col-9">
                    <p class="m-0"><b>Fenina Sihombing</b></p>
                    <p>Baik sekali, 100 sih</p>
                    </div>


                    <div class="col-1 justify-content-around align-items-center d-flex">
                        <form action="">
                            <button class="like-button w-100" type="submit" ><img src="./Assets/images/news/graylove.png" alt=""></button>
                        </form>
                    </div>
                </div>
                <!--  -->
            </form>
        </div>

        <div class="recommended-news py-5">
            <div class="d-flex header align-items-center">
                <div class="line flex-grow-1"></div>
                <h1 class="px-5 ">Halo Gais</h1>
                <div class="line flex-grow-1"></div>
            </div>
            <div class="row">
            <div class="col-3 p-2 news"  >
                <div class="box ">
                    <div class="box-tag">
                        <h5>Politics</h3>
                    </div>
                    <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=882&q=80" width="100%" alt="">
                </div>
            </div>
            <div class="col-3 p-2 news"  >
                <div class="box ">
                    <div class="box-tag">
                        <h5>Politics</h3>
                    </div>
                    <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=882&q=80" width="100%" alt="">
                </div>
            </div>
            <div class="col-3 p-2 news" >
                <div class="box ">
                    <div class="box-tag">
                        <h5>Politics</h3>
                    </div>
                    <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=882&q=80" width="100%" alt="">
                </div>
            </div>
            <div class="col-3 p-2 news" >
                <div class="box ">
                    <div class="box-tag">
                        <h5>Politics</h3>
                    </div>
                    <img src="https://images.unsplash.com/photo-1504600770771-fb03a6961d33?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=882&q=80" width="100%" alt="">
                </div>
            </div>

        </div>
        </div>
    </div>
</body>
</html>