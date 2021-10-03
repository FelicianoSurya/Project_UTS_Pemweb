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
    include_once(URL . "/Controllers/AddBerita.php");

    $kategories = fetchKategori();
    ?>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="judul" required />
        <input type="text" name="penulis" required />
        <textbox name="deskripsi" required></textbox>
        <input type="date" name="tanggal_publikasi" required />
        <input type="file" name="gambar" required />
        <select name="id_kategori" required>
            <option value="">Kategori</option>
            <?php 
            foreach($kategories as $kategori) echo "<option value='$kategori->id'>$kategori->name </option>"; ?>
        </select>
    </form>
</body>
</html>