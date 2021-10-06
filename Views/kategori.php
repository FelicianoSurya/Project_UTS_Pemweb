<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Assets/css/kategori.css" />
    <title>Kategori</title>

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
    // include_once(URL . "/Controllers/KomentarController.php");
    // include_once(URL . "/Controllers/LikeController.php");
    include_once(URL . "/Controllers/RedirectController.php");

    $detail = fetchDetailBerita();
    $kategories = fetchKategori();
    $news = fetchBerita();
    // $highlights = fetchHighlight();
    // $beritaUtama = fetchBeritaUtama();
    // $beritaTerbaru = fetchBeritaTerbaru();
    // $komentars = fetchKomentar();
    $login = redirectLogin();
    $newskategori = fetchBeritaKategori();
    $newskategoriHighlight = fetchKategoriBeritaHighlight();
    $beritaSamping = fetchKategoriBeritaSamping();
    $allBerita = fetchKategoriAllBerita();

    ?>
  </head>
  <body>
    
    <?php include_once(URL . '/Views/base/header.php'); ?>

    <div class="container">
      <div class="d-flex header align-items-center py-5">
        <div class="lineheading flex-grow-1"></div>
        <h1 class="px-5">All News</h1>
        <div class="lineheading flex-grow-1"></div>
      </div>
      <div class="section-1 row">
        <div class="col-lg-6 col-12 headline">
          <div class="img-container">
            <span>
              <h2><?php echo $newskategoriHighlight->judul ?></h2>
              <h6><?php echo $newskategoriHighlight->tanggal_publikasi ?></h6>
            </span>
            <img
              width="100%"
              src="./<?php echo $newskategoriHighlight->gambar ?>"
              alt=""
            />
          </div>
        </div>

        <div class="sampingswiper m-auto col-lg-6 col-12 py-4 py-lg-0">
          <?php foreach($beritaSamping as $samping){ ?>
          <div class="beritakecil pb-3">
            <img
              width="23%"
              src="./<?php echo $samping->gambar ?>"
              alt=""
            />
            <div class="isiberitakecil ps-2">
              <h5><?php echo $samping->judul ?></h5>
              <h6><?php echo $samping->id_kategori ?></h6>
              <p><?php echo $samping->tanggal_publikasi ?></p>
            </div>
          </div>
            <?php } ?>
        </div>    
      </div>


      <div class="section-2 beritabawah">
        <?php foreach($allBerita as $all){ ?>
        <div class="beritakecil py-1">
          <img
            width="21%"
            src="./<?php echo $all->gambar ?>"
            alt=""
          />
          <div class="isibawah ps-2 ">
            <div class="linekecil flex-grow-1"></div>
            <div class="isiberitakecil ps-2 py-2">
              <h4><?php echo $all->judul ?></h4>
              <h5 class="pb-5"><?php echo $all->id_kategori ?></h5>
              <h6><?php echo $all->tanggal_publikasi ?></h6>
            </div>
            <div class="linekecil flex-grow-1"></div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
    
    <?php include_once(URL . '/Views/base/header.php'); ?>

    <script>
      const swiper = new Swiper(".swiper", {
        // Optional parameters
        // direction: "horizontal",
        // loop: true,

        // If we need pagination
        pagination: {
          el: ".swiper-pagination",
        },

        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        // And if we need scrollbar
      });
    </script>
  </body>
</html>
