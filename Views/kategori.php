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
    if(isset($_GET['kategori'])){
      error_reporting(0);
      $null = "KAMI TIDAK PUNYA BERITA UNTUK KATEGORI INI";
    }
    include_once(URL . "/Controllers/KategoriController.php");
    include_once(URL . "/Controllers/BeritaController.php");
    // include_once(URL . "/Controllers/KomentarController.php");
    // include_once(URL . "/Controllers/LikeController.php");
    include_once(URL . "/Controllers/RedirectController.php");

    $detail = fetchDetailBerita();
    $kategories = fetchKategori();
    $namaKategori = getNameKategori();
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

    <?php if($newskategoriHighlight->judul != ""){ ?>
    <div class="container">
       <div class="d-flex header align-items-center py-5">
        <div class="lineheading flex-grow-1"></div>
        <?php if(isset($_GET['kategori'])){ ?>
          <h1 class="px-5"><?php echo $namaKategori->name ?></h1>
        <?php }else{ ?>
          <h1 class="px-5">All News</h1>
        <?php } ?>
        <div class="lineheading flex-grow-1"></div>
      </div>
      <div class="section-1 row">
        <div onclick="detailBerita(<?php echo $newskategoriHighlight->id ?>)" class="col-lg-6 col-12 headline" data-aos="fade-right">
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

        <div class="sampingswiper m-auto col-lg-6 col-12 py-4 py-lg-0" >
          <?php foreach($beritaSamping as $samping){ ?>
            <div data-aos="fade-left">
              <div  onclick="detailBerita(<?php echo $samping->id ?>)" class="beritasamping pb-3 py-1  row" >
                <img
                  class="p-0 col-lg-2 col-md-3 col-sm-4 col-5"
                  src="./<?php echo $samping->gambar ?>"
                  alt=""
                />
                <div class="isiberitasamping ps-2 col-lg-10 col-md-9 col-sm-8 col-7">
                  <h5><?php echo $samping->judul ?></h5>
                  <h6><?php echo $samping->id_kategori ?></h6>
                  <p><?php echo $samping->tanggal_publikasi ?></p>
                </div>
              </div>
            </div>
            <?php } ?>
        </div>    
      </div>
    </div>

      <div class="section-2 beritabawah container pt-5">
        <?php foreach($allBerita as $all){ ?>
          <div data-aos="fade-up">
            <div onclick="detailBerita(<?php echo $all->id ?>)" class="beritakecil py-1 row">
              <img
                class="p-0 col-lg-2 col-md-3 col-sm-4 col-5"
                src="./<?php echo $all->gambar ?>"
                alt=""
              />
              <div class="isibawah ps-2 d-flex flex-column col-lg-10 col-md-9 col-sm-8 col-7">
                <div class="linekecil w-100"></div>
                <div class="isiberitakecil ps-2 py-2 flex-grow-1">
                  <h4><?php echo $all->judul ?></h4>
                  <h5 class="pb-5"><?php echo $all->id_kategori ?></h5>
                  <h6><?php echo $all->tanggal_publikasi ?></h6>
                </div>
                <div class="linekecil w-100"></div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <?php }else{ ?>
      <div class="container" style="height:45vh">
        <h1 class="text-center d-flex justify-content-center align-items-center" style="height:100%;">Tidak Ada Berita</h1>
      </div>
    <?php } ?>
    <?php include_once(URL . '/Views/base/footer.php'); ?>

    <script>

      // top 
      // var maxHeight = 0;

      // var divs = jQuery(".section-1 .col-lg-6");
      // jQuery.each(divs, function(){
      //     var height = jQuery(this).height();
      //     if(maxHeight<height)
      //         maxHeight = height;

      // });
      // divs.height(maxHeight);

      // bot 
      var maxHeight = 0;

      var divs = jQuery(".section-2 img");
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
  </body>
</html>
