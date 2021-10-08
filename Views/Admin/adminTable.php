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
                <div class="d-flex info-color">
                    <div class="d-flex">
                        <p class="active circle"></p>
                        <p class="ps-2">Active</p>
                    </div>
                    <div class="d-flex px-2">
                        <p style="background-color:grey;" class="circle"></p>
                        <p class="ps-2">Disable</p>
                    </div>
                </div>
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
                <th>
                HI
                <?php if(isset($_POST['highlight'])){ if($errorHighlight == 1){ echo "<p style='color:red;margin:0;font-size:10px;'>Sudah mencapai Maximum</p>"; } } ?>
                </th>
                <th>BU
                <?php if(isset($_POST['utama'])){ if($errorUtama == 1){ echo "<p style='color:red;margin:0;font-size:10px;'>Sudah mencapai Maximum</p>"; } } ?>
                </th>
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

                    <td>
                        <form action="" method="POST">
                            <input type="hidden" name="id" value="<?php echo $new->id ?>">
                            <?php 
                                $conn = Database();
                                $sql = "SELECT * FROM highlight WHERE id_berita = '$new->id'";
                                $query = mysqli_query($conn,$sql);
                                $row = mysqli_fetch_row($query);

                                $sqlUtama = "SELECT * FROM utama WHERE id_berita = '$new->id'";
                                $queryUtama = mysqli_query($conn,$sqlUtama);
                                $rowUtama = mysqli_fetch_row($queryUtama);
                                if($row > 0 ){
                            ?>
                            <button name="highlightDelete" type="submit" class="circle active"></button>
                            <?php }else{ ?>
                            <button name="highlight" class="circle" <?php if($rowUtama > 0 ){ echo 'disabled' ?> style="background-color:grey;" <?php } ?>type="submit"></button>
                            <?php } ?>
                        </form>
                    </td>
                    <td>
                        <form action="" method="POST">
                            <input type="hidden" name="id" value="<?php echo $new->id ?>">
                            <?php 
                                $conn = Database();
                                $sql = "SELECT * FROM utama WHERE id_berita = '$new->id'";
                                $query = mysqli_query($conn,$sql);
                                $row = mysqli_fetch_row($query);

                                $sqlHighlight = "SELECT * FROM highlight WHERE id_berita = '$new->id'";
                                $queryHighlight = mysqli_query($conn,$sqlHighlight);
                                $rowHighlight = mysqli_fetch_row($queryHighlight);
                                if($row > 0 ){
                            ?>
                            <button name="utamaDelete" type="submit" class="circle active"></button>
                            <?php }else{ ?>
                            <button name="utama" type="submit" <?php if($rowHighlight > 0 ){ echo 'disabled' ?> style="background-color:grey;" <?php } ?> class="circle"></button>
                            <?php } ?>
                        </form>
                    </td>
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