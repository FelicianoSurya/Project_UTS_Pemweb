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
    include_once(URL . "/Controllers/KomentarController.php");
    include_once(URL . "/Controllers/LikeController.php");
    include_once(URL . "/Controllers/RedirectController.php");

    $detail = fetchDetailBerita();
    $kategories = fetchKategori();
    $news = fetchBerita();
    $highlights = fetchHighlight();
    $beritaUtama = fetchBeritaUtama();
    $beritaTerbaru = fetchBeritaTerbaru();
    $komentars = fetchKomentar();
    $login = redirectLogin();
    
    ?>
  </head>
  <body>
    
    <?php include_once(URL . '/Views/base/header.php'); ?>

    <div class="container">
      <div class="d-flex header align-items-center">
        <div class="lineheading flex-grow-1"></div>
        <h1 class="px-5">All News</h1>
        <div class="lineheading flex-grow-1"></div>
      </div>
      <div class="ataskategori">
        <div class="section-swiper py-5 col-6">
          <div class="swiper-container container">
            <!-- Slider main container -->
            <div class="swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <div class="overlay-span"></div>
                  <span>
                    <h2>Iyaaaaaaaa Deaaa Anoooo</h2>
                    <h6>11 Agustus 2021</h6>
                  </span>
                  <img
                    width="100%"
                    src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sampingswiper m-auto col-6">
          <div class="beritakecil pb-3">
            <img
              width="23%"
              src="https://images.unsplash.com/photo-1494500764479-0c8f2919a3d8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80"
              alt=""
            />
            <div class="isiberitakecil ps-2">
              <h5>Hakim Lupa Pake Baju</h5>
              <h6>Sosial</h6>
              <p>13 Agustus 2021</p>
            </div>
          </div>
          <div class="beritakecil pb-3">
            <img
              width="23%"
              src="https://images.unsplash.com/photo-1494500764479-0c8f2919a3d8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80"
              alt=""
            />
            <div class="isiberitakecil ps-2">
              <h5>Hakim Lupa Pake Baju</h5>
              <h6>Sosial</h6>
              <p>13 Agustus 2021</p>
            </div>
          </div>
          <div class="beritakecil pb-3">
            <img
              width="23%"
              src="https://images.unsplash.com/photo-1494500764479-0c8f2919a3d8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80"
              alt=""
            />
            <div class="isiberitakecil ps-2">
              <h5>Hakim Lupa Pake Baju</h5>
              <h6>Sosial</h6>
              <p>13 Agustus 2021</p>
            </div>
          </div>
          <div class="beritakecil pb-3">
            <img
              width="23%"
              src="https://images.unsplash.com/photo-1494500764479-0c8f2919a3d8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80"
              alt=""
            />
            <div class="isiberitakecil ps-2">
              <h5>Hakim Lupa Pake Baju</h5>
              <h6>Sosial</h6>
              <p>13 Agustus 2021</p>
            </div>
          </div>
        </div>
      </div>
      <div class="beritabawah ps-5">
        <div class="beritakecil py-1">
          <img
            width="21%"
            src="https://images.unsplash.com/photo-1494500764479-0c8f2919a3d8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80"
            alt=""
          />
          <div class="isibawah ps-2 py-2">
            <div class="linekecil flex-grow-1"></div>
            <div class="isiberitakecil ps-2 py-2">
              <h4>Hakim Lupa Pake Baju aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</h4>
              <h5 class="pb-5">Sosial</h5>
              <h6>13 Agustus 2021</h6>
            </div>
            <div class="linekecil flex-grow-1"></div>
          </div>
        </div>
        <div class="beritakecil py-1">
          <img
            width="21%"
            src="https://images.unsplash.com/photo-1494500764479-0c8f2919a3d8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80"
            alt=""
          />
          <div class="isibawah ps-2 py-2">
            <div class="linekecil"></div>
            <div class="isiberitakecil ps-2 py-2">
              <h4>Hakim Lupa Pake Baju aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</h4>
              <h5 class="pb-5">Sosial</h5>
              <h6>13 Agustus 2021</h6>
            </div>
            <div class="linekecil flex-grow-1"></div>
          </div>
        </div>
        <div class="beritakecil py-1">
          <img
            width="21%"
            src="https://images.unsplash.com/photo-1494500764479-0c8f2919a3d8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80"
            alt=""
          />
          <div class="isibawah ps-2 py-2">
            <div class="linekecil flex-grow-1"></div>
            <div class="isiberitakecil ps-2 py-2">
              <h4>Hakim Lupa Pake Baju aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</h4>
              <h5 class="pb-5">Sosial</h5>
              <h6>13 Agustus 2021</h6>
            </div>
            <div class="linekecil flex-grow-1"></div>
          </div>
        </div>
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
