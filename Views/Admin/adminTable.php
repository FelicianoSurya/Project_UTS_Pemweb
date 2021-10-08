<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Assets/css/admin/adminTable.css" rel="stylesheet">
    <!-- <script src="Assets/js/detailNews.js"></script> -->
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

    $news = fetchBeritaAdmin();
    ?>
    
</head>
<body>

    <?php include_once(URL . '/Views/base/adminHeader.php'); ?>

    <div class="py-5 mt-5 container">
        <div class="row justify-content-between">
            <div class="col-4">
                <h1>News</h1>
                <p>HI = Highlight</p>
                <p>BU = Berita Utama</p>
            </div>
            <div class="d-flex col-2 my-auto justify-content-end flex-column">
                <a href="AddNews.php"><button class="button-add" class="btn btn-primary">+ Add News</button></a>
                <p class="pt-4 m-0">total news :</p>
            </div>
        </div>
    
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>Writer</th>
                <th>Editor</th>
                <th>Date</th>
                <th>Category</th>
                <th>HI</th>
                <th>BU</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($news as $new){ ?>
                <tr>
                    <td><?php echo $new->judul ?></td>
                    <td><?php echo $new->penulis ?></td>
                    <td><?php echo $new->username ?></td>
                    <td><?php echo $new->tanggal_publikasi ?></td>
                    <td><?php echo $new->id_kategori ?></td>

                    <!-- ini indikator hi dan bu, kalau lagi on, div nya kasih class active yeee -->
                    <td><div class="circle"></div></td>
                    <td><div class="circle active"></div></td>
                     <!--    -->
                    <td class="d-flex">
                        <form action="AddNews.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $new->id ?>">
                            <input type="hidden" name="button" value="Edit">
                            <button type="submit"><i class="fas fa-wrench"></i></button>
                        </form>
                        <form action="" method="POST">
                            <input type="hidden" name="id" value="<?php echo $new->id ?>">
                            <input type="hidden" name="button" value="Delete">
                            <button type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
<?php include(URL . '/Views/base/footer.php') ?>

</body>

<script>
    $(document).ready(function() {
    $('#example').DataTable();
    } );
</script>
</html>