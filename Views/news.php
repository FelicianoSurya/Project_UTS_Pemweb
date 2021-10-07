<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Assets/css/detailNews.css" rel="stylesheet">
    <script src="Assets/js/detailNews.js"></script>
    <?php
    define('URL', dirname(dirname(__FILE__)));
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
            <p><?php echo $detail->subjudul ?></p>
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
            <form class=""action="" method="POST">
                <div class="row addComment py-3 justify-content-around">
                    <?php
                    if(isset($_SESSION['username'])){
                        $username = $_SESSION['username'];
                        $sql = "SELECT * FROM pengguna WHERE username = '$username'";
                        $query = mysqli_query($conn,$sql);
                        $data = mysqli_fetch_array($query);
                    }
                    ?>
                    <div class="profile-comment col-1 d-flex justify-content-center align-items-start">
                        <?php if(isset($_SESSION['username'])){ ?>
                        <img src="./<?php echo $data['image'] ?>" alt="">
                        <?php } ?>
                    </div>
                    
                    <div class="col-9">
                    <input type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>">
                    <input type="hidden" name="id_berita" value="<?php echo $detail->id ?>">
                    <input class="comment-text"type="text" name="komentar" placeholder="Type your comments here...">
                    </div>
                
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <?php if(isset($_SESSION['username'])){?>
                        <button class="button-send" type="submit" class="btn btn-primary">Send</button>
                        <?php }else{ ?> <button class="button-send" type="submit" name="redirectLogin" class="btn btn-primary">Send</button> <?php } ?>
                    </div>
                </div>
            </form>
                <!-- ini yang bakal repetitif -->
                <?php foreach($komentars as $komentar){ 
                    $sql = "SELECT CONCAT(first_name , ' ' , COALESCE(last_name,'')) 'nama' , image FROM pengguna WHERE username = '$komentar->username'";
                    $query = mysqli_query($conn,$sql);
                    $user = mysqli_fetch_array($query); 
                    
                ?>
                    
                <div class="row comments py-3 justify-content-around">
                    <div class="profile-comment col-1 d-flex justify-content-center align-items-start pt-2">
                        <img src="./<?php echo $user[1] ?>" alt="">
                    </div>

                    <div class="col-9">
                        <p class="m-0 comment-text"><b><?php echo $user[0] ?></b></p>
                        <p class="m-0 comment-text"><?php echo $komentar->komentar ?></p>
                        <p class="comment-desc pt-2">
                            <?php
                                $countsql = "SELECT * FROM likes WHERE id_komentar = '$komentar->id'";
                                $querycount = mysqli_query($conn,$countsql);
                                $count = mysqli_num_rows($querycount);
                                echo $count;
                            ?> like
                        </p>
                    </div>

                    <div class="col-2 justify-content-around align-items-center d-flex">
                        <form action="" method="POST">
                            <input type="hidden" name="username" value="<?php echo $username ?>">
                            <input type="hidden" name="id_komentar" value="<?php echo $komentar->id ?>">
                            <?php 
                            $sql = "SELECT * FROM likes WHERE id_komentar = '$komentar->id' AND username = '$username'";
                            $query = mysqli_query($conn,$sql);
                            $row = mysqli_num_rows($query);

                            
                            if($row == 0){
                                if(isset($_SESSION['username'])){
                            ?>
                                <button class="like-button" type="submit" name="belumLike" ><img class="w-100" src="./Assets/images/news/graylove.png" alt=""></button>
                                <?php }else{ ?>
                                <button class="like-button " type="submit" name="redirectLogin" name="belumLike" ><img class="w-100" src="./Assets/images/news/graylove.png" alt=""></button>
                                <?php } ?>
                            <?php }else{ ?>
                                <button class="like-button" type="submit" name="sudahLike"><img class="w-100" src="./Assets/images/news/redlove.png" alt=""></button>
                                <?php } ?>
                        </form>
                    </div>
                </div>
                <?php } ?>
                <!--  -->
        </div>

        <div class="recommended-news py-5">
            <div class="d-flex header align-items-center">
                <div class="line flex-grow-1"></div>
                <h1 class="px-5 ">Rekomendasi Berita</h1>
                <div class="line flex-grow-1"></div>
            </div>
            <div class="row">
            <div class="col-lg-3 col-6  p-2 news"  >
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

    
<?php include(URL . '/Views/base/footer.php') ?>

</body>

<script>
    $(document).ready(function() {
    $('#example').DataTable();
    } );
</script>
</html>