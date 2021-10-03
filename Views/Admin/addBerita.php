<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
        <input type="text" name="judul" required />
        <input type="text" name="penulis" required />
        <textarea name="deskripsi" required></textarea>
        <input type="date" name="tanggal_publikasi" required />
        <input type="file" name="gambar" required />
        <select name="id_kategori" required>
            <option value="">Kategori</option>
            <?php 
            foreach($kategories as $kategori) echo "<option value='$kategori->id'>$kategori->name </option>"; ?>
        </select>
        <input type="submit" name="berita">
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
                    <td>$new->id_kategori</td>";
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
</body>
</html>