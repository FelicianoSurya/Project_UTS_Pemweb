<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include_once(URL . "/Views/base/includecss.php"); ?>
    

    <link rel="stylesheet" href="Assets/css/admin/dashboard.css" />
    <title>Home Admin</title>
  </head>
  <body>
    <?php include_once(URL . '/Views/base/header.php'); ?>

    <div class="p-3">
      <div class="container mainbox">
        <div class="card-container row p-3">
          <div
            class="col-lg-4 col-md-6 col-12 p-4 d-flex justify-content-center"
          >
            <div class="maincard">
              <div class="logo-card">
                <img src="https://img.icons8.com/ios/50/000000/news.png" />
              </div>
              <div class="card-name">
                <p>News</p>
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 col-12 p-4 d-flex justify-content-center"
          >
            <div class="maincard">
              <div class="logo-card">
                <img
                  src="https://img.icons8.com/dotty/50/000000/category.png"
                />
              </div>
              <div class="card-name">
                <p>Category</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12 p-4 d-flex justify-content-center">
            <div class="maincard">
              <div class="logo-card">
                <img
                  src="https://img.icons8.com/dotty/80/000000/men-age-group-5.png"
                />
              </div>
              <div class="card-name">
                <p>Employee</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include(URL . '/Views/base/footer.php') ?>    

  </body>
</html>
