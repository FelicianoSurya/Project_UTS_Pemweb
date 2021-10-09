<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="Assets/css/admin/addNews.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- animate.js -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <?php
    
    define('URL', dirname(dirname(dirname(__FILE__))));


    include_once(URL . "/Controllers/Middleware.php");
    include_once(URL . "/include_db/connection.php");
    include_once(URL . "/Controllers/Middleware.php");
    include_once(URL . "/Controllers/KategoriController.php");
    include_once(URL . "/Controllers/BeritaController.php");
    include(URL . '/Views/base/includecss.php');

    $kategories = fetchKategori();
    $news = fetchBerita();
    $highlights = fetchHighlight();
    $beritaUtama = fetchBeritaUtama();
    if(isset($_POST['button'])){
        $detailEdit = editData();
    }

    ?>
</head>
<body>
<?php include_once(URL . '/Views/base/adminHeader.php'); ?>

    
    <?php if(isset($_GET['pesan']) == 'berhasil'){
        echo "berhasil";
    }else if(isset($_GET['pesan']) == 'highlight'){
        echo "highlight berhasi";
    } ?>
    <div class="container py-5">
        <div class="form-box py-4 container">
            <h1>News</h1>
            <hr>
            <form class="d-flex flex-column px-2"action="" method="POST" enctype="multipart/form-data">
                <div class="d-flex">
                    <?php if(isset($_POST['button'])){ ?>
                    <input type="hidden" name="id" value="<?php echo $detailEdit->id ?>">
                    <?php } ?>
                    <input type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>">
                </div>
                <div class="row justify-content-between py-2">
                    <label class="col-md-2 col-12" for="judul">Title </label>
                    <input class="col-md-9 col-12 rounded-pill" type="text" name="judul" value="<?php if(isset($_POST['button'])) echo $detailEdit->judul ?>" required />
                </div>
                <div class="row justify-content-between py-2">
                    <label class="col-md-2 col-12 rounded-pill" for="subtitle">Subtitle </label>

                    <input class="col-md-9 col-12 rounded-pill" type="text" name="subjudul" value="<?php if(isset($_POST['button'])) echo $detailEdit->subjudul ?>" required />
                </div>
                <div class="row justify-content-between py-2">
                <label class="col-md-2 col-12 rounded-pill" for="writer">Writer </label>

                    <input class="col-md-9 col-12 rounded-pill" type="text" value="<?php if(isset($_POST['button'])) echo $detailEdit->penulis ?>" name="penulis" required />
                </div>
                
                <div class="row justify-content-between py-2">
                <label class="col-md-2 col-12 rounded-pill" for="date">Date </label>

                    <input class="col-md-9 col-12 rounded-pill" type="date" name="tanggal_publikasi" value="<?php if(isset($_POST['button'])) echo $detailEdit->tanggal_publikasi ?>" required />
                </div>
                <div class="row justify-content-between py-2">
                <label class="col-md-2 col-12 " for="gambar">Image </label>

                    <input class="col-md-9 col-12  ps-0" type="file" name="gambar" <?php if(!isset($_POST['button'])) echo 'required' ?> />
                </div>


                <div class="row justify-content-between py-2">
                    <label class="col-md-2 col-12 rounded-pill" for="category">Category </label>

                    <select class="col-md-9 col-12 rounded-pill" name="id_kategori" required>
                        <option value="">Catogory</option>
                        <?php 
                        foreach($kategories as $kategori){ ?>
                        <option id="<?php echo $kategori->id ?>" value="<?php echo $kategori->id ?>" <?php if($detailEdit->id_kategori == $kategori->id) echo 'selected' ?>><?php echo $kategori->name ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="row justify-content-between py-2">
                    <label class="col-md-2 col-12 rounded-pill" for="desc">Description </label>

                    <textarea class="col-md-9 col-12" name="deskripsi" id="summernote" required><?php if(isset($_POST['button'])) echo $detailEdit->deskripsi ?></textarea>
                </div>
                <div class="row py-2 justify-content-end">
                    <div class="p-2 col-xxl-1 col-md-2 col-sm-3 col-5">
                       <a href="NewsAdmin.php"> <button class="button-add" type="button" name="cancel" class="btn btn-primary">Cancel</button></a>
                    </div>
                    <div class="p-2 col-xxl-1 col-md-2 col-sm-3 col-5">
                        
                        <input class="button-add" type="submit" <?php if(!isset($_POST['button'])){ ?> name="addBerita" value="Submit" <?php }else{ ?> name="editBerita" value="Update" <?php } ?> class="btn btn-primary"></input>
                    </div>
                </div>
            </form>
           
        </div>
    </div>
    <?php include(URL . '/Views/base/adminFooter.php') ?>
    

<script>

    $(document).ready(function() {
        $('#summernote').summernote();
        $( ".note-editor" ).addClass("col-md-9 col-12");
    });


</script>
</body>
</html>