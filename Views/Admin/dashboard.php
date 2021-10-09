<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
    define('URL', dirname(dirname(dirname(__FILE__))));
    include_once(URL . "/include_db/connection.php");   
    include(URL . '/Views/base/includecss.php');
    if(!isset($_SESSION['username'])){
        error_reporting(0);
    }
    ?>
    
    <?php
    include_once(URL . "/Controllers/Middleware.php");
    if(isset($_SESSION['role'])){
        include_once(URL . "/Controllers/UserController.php");
    }
    include_once(URL . "/Controllers/KategoriController.php");
    include_once(URL . "/Controllers/BeritaController.php");
    include_once(URL . "/Controllers/KomentarController.php");
    include_once(URL . "/Controllers/LikeController.php");
    include_once(URL . "/Controllers/RedirectController.php");

    ?>
    

    <link rel="stylesheet" href="Assets/css/admin/dashboard.css"/>
    <title>Home Admin</title>
  </head>
  <body>
    <?php include_once(URL . '/Views/base/adminHeader.php'); ?>


    <div class="py-5">
      <div class="container mainbox">
        <div class="card-container row p-3 justify-content-around">
          <?php if($_SESSION['role'] == 'karyawan'){ ?>
          
          <div class="col-lg-4 col-md-6 col-12 p-2 d-flex justify-content-center">
            <a href="NewsAdmin.php">
              <div class="maincard">
                <div class="logo-card">
                  <img src="https://img.icons8.com/bubbles/150/000000/news.png"/>
                </div>
                <div class="card-name">
                  <p>News</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-12 p-2 d-flex justify-content-center">
            <a href="CategoryTable.php">
              <div class="maincard">
                <div class="logo-card">
                  <img src="https://img.icons8.com/bubbles/150/000000/transaction-list.png"/>
                </div>
                <div class="card-name">
                  <p>Category</p>
                </div>
              </div>
            </a>
          </div>

          <?php } ?>
          <?php if($_SESSION['role'] == 'admin'){ ?>
          <div class="col-12 p-2 d-flex justify-content-center">
            <a href="Employee.php">
              <div class="maincard">
                <div class="logo-card">
                  <img src="https://img.icons8.com/bubbles/150/000000/crowd--v1.png"/>
                </div>
                <div class="card-name">
                  <p>Employee</p>
                </div>
              </div>
            </a>
          </div> 
          <?php } ?>
        </div> 
      </div>
    </div>
          
    <?php include(URL . '/Views/base/adminFooter.php') ?>    

  </body>
</html>
