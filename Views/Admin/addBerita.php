<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    include_once(URL . "/include_db/connection.php");
    include_once(URL . "/Controllers/KategoriController.php");
    include_once(URL . "/Controllers/BeritaController.php");

    $kategories = fetchKategori();
    $news = fetchBerita();
    $highlights = fetchHighlight();
    $beritaUtama = fetchBeritaUtama();

    ?>
</head>
<body>
    <?php if(isset($_GET['pesan']) == 'berhasil'){
        echo "berhasil";
    }else if(isset($_GET['pesan']) == 'highlight'){
        echo "highlight berhasi";
    } ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>">
        <input type="text" name="judul" required />
        <input type="text" name="subjudul" required />
        <input type="text" name="penulis" required />
        <textarea name="deskripsi" id="summernote" required></textarea>
        <input type="date" name="tanggal_publikasi" required />
        <input type="file" name="gambar" required />
        <select name="id_kategori" required>
            <option value="">Kategori</option>
            <?php 
            foreach($kategories as $kategori) echo "<option value='$kategori->id'>$kategori->name </option>"; ?>
        </select>
        <input type="submit" name="addBerita">
    </form>
    <table border="1">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Deskripsi</th>
            <th>Tanggal Publikasi</th>
            <th>Foto</th>
            <th>Nama Kategori</th>
        </tr>
        <?php

        foreach($news as $new){
            echo "<tr>
                    <td>$new->judul</td>
                    <td>$new->penulis</td>
                    <td>$new->deskripsi</td>
                    <td>$new->tanggal_publikasi</td>
                    <td><img src='./$new->gambar' width='100' /></td>
                    <td>$new->id_kategori</td>
                    <td>
                        <form action='' method='POST'>
                            <input type='hidden' name='id' value='$new->id' />
                            <input type='hidden' name='button' value='Edit' />
                            <button>Edit</button>
                        </form>
                        <form action='' method='POST'>
                            <input type='hidden' name='id' value='$new->id' />
                            <input type='hidden' name='button' value='Delete' />
                            <button type='submit'>Delete</button>
                        </form>
                    </td>";
                    
        }

        ?>
    </table>
    <br><br><br><br>
    <form action="" method="POST">
        <select name="id_berita" required>
            <option value="">Berita</option>
            <?php foreach($highlights as $highlight) echo "<option disabled value='$highlight->id'>$highlight->judul</option>"; ?>
            <?php foreach($news as $new) echo "<option value='$new->id'>$new->judul </option>"; ?>
        </select>
        <input type="submit" name="highlight">
    </form>
    <br><br><br><br>
    <form action="" method="POST">
        <select name="id_berita" required>
            <option value="">Berita</option>
            <?php foreach($beritaUtama as $utama) echo "<option disabled value='$utama->id'>$utama->judul</option>"; ?>
            <?php foreach($news as $new) echo "<option value='$new->id'>$new->judul </option>"; ?>
        </select>
        <input type="submit" name="beritaUtama">
    </form>

<script>

    $(document).ready(function() {
        $('#summernote').summernote();
    });

</script>
</body>
</html>