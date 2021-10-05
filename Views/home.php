<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./Assets/css/home.css" rel="stylesheet">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- animate.js -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <title>Document</title>
    <script src="./Assets/js/home.js"></script>
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

</head>
<body>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <!-- <div class="modal-header"> -->
        <div class="titleModal">
        <h1 class="modal-title" id="exampleModalLabel">Log In</h1>
        </div>
        <form action="" method="POST">
        <div class="modal-body">
            <label for="Username" class="labelModal">Username</label>
            <input class="form-control" type="text" name="Username" required />
            <label for="Password" class="labelModal">Password</label>
            <input class="form-control" type="password" name="Password" required />
            <?php
                if(isset($_GET['pesan']))
                {
                    echo "<p style='color:red'>Username atau Password Salah!</p>";
                }
            ?>
        </div>
        <div class="modal-footer">
            <button class="btn btnModal" type="submit" name="login">Sign In</button>
        </div>
        </form>
        <p class="TanyaRegis">Belum memiliki akun? <a href="./Views/Register.php">Register</a></p>
    </div>
</div>
</div>
<nav class="">
    <div class="navbar navbar-light">
    <div class="container-fluid container">
        <a class="navbar-brand w-25"><img src="./Assets/images/home/logo.png" alt="" class="w-100"></a>
        <form class="d-flex w-25 justify-content-end" method="POST" action="">
            <?php if(!isset($_SESSION['role'])) { ?>
            <button class="btn btnModal btn-login"type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
            <?php }else{ ?>
            <button class="m-auto btn btnModal btn-login"type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" name="logout">Logout</button>
            <div class="d-flex justify-content-end">
                <p class="p-2 m-auto"><?php  if($_SESSION['role'] == 'pengguna'){ echo $pengguna->name ?></p>
                <div class="p-2 m-auto profile">
                    <img class="rounded-circle"src="./<?php echo $pengguna->image ?>" alt="profile">
                </div>
                <?php }else{ ?>
                <p>Admin</p>
                <img src="./Assets/images/home/blank.png" alt="profileAdmin">
                <?php } ?>
            </div>
            <?php } ?>
        </form>
    </div>
    </div>    
    <div class="navbar navbar-2">
        <div class="container-fluid container collapse navbar-collapse">
            <ul class="navigation-tab navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item category ">
                    <a class="nav-link " href="#">CATEGORY</a>
                    <ul class="dropdown-category ">
                        <?php foreach($kategories as $kategorie){ ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $kategorie->name ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Views/aboutUs.php">ABOUT US</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

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
            <div class="col-lg-3  col-md-6 col-12 p-2 news">
                <div class="box py-4">
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
</body>

<script>

function myFunction(x){
        if(x.matches){
            var maxHeight = 0;

            var divs = jQuery(".section-3 .news");
            jQuery.each(divs, function(){
                var height = jQuery(this).height();
                if(maxHeight<height)
                    maxHeight = height;

            });
            divs.height(maxHeight);
        }
        
        
    }
    var x = window.matchMedia("(min-width: 1200px)");
    
    myFunction(x);



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
