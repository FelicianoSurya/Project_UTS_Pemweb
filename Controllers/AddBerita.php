<?php

include_once(URL . "/Model/Berita.php");
include_once(URL . "/Model/Kategori.php");

if(isset($_POST['judul']) && isset($_POST['penulis']) && isset($_POST['deskripsi']) && isset($_POST['tanggal_publikasi'])
    && isset($_FILES['gambar']) && isset($_POST['id_kategori'])){

    $conn = Database();
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal_publikasi = $_POST['tanggal_publikasi'];
    $id_kategori = $_POST['id_kategori'];
    $image = $_FILES['gambar'];

    echo $id_kategori;
    $imageLink = '/Assets/images/berita/' . basename($image['name']);
    $targetImage = URL . $imageLink;

    move_uploaded_file($image['tmp_name'], $targetImage);
    
    $sql = "INSERT INTO berita (judul,penulis,deskripsi,tanggal_publikasi,gambar,id_kategori) 
            VALUES ('$judul','$penulis', '$deskripsi', '$tanggal_publikasi', '$imageLink' , $id_kategori)";
    $query = mysqli_query($conn,$sql);
    header("location:./Admin.php?pesan=berhasil");
}

function fetchBerita(){
    $News = array();
    $conn = Database();
    $sql = "SELECT id, judul, penulis, deskripsi, 
            CONCAT(DAY(tanggal_publikasi), ' ', MONTHNAME(tanggal_publikasi), ' ' , YEAR(tanggal_publikasi)) 'publikasi',
            gambar, (SELECT nama FROM kategori WHERE id = berita.id_kategori) 'nama_kategori' FROM berita";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query);
    foreach($result as $data){
        $berita = new Berita();
        $berita->setData($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6]);
        array_push($News,$berita);
    }
    return $News;
}

?>