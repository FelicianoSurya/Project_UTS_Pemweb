<?php

include_once(URL . "/Model/Berita.php");
include_once(URL . "/Model/Kategori.php");

if(isset($_POST['judul']) && isset($_POST['penulis']) && isset($_POST['deskripsi']) && isset($_POST['tanggal_publikasi'])
    && isset($_FILES['gambar']) && isset($_POST['id_kategori'])){

    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal_publikasi = $_POST['tanggal_publikasi'];
    $id_kategori = $_POST['id_kategori'];
       

}

?>