<?php

include_once(URL . "/Model/Berita.php");
include_once(URL . "/Model/Kategori.php");

$conn = Database();

if(isset($_POST['judul']) && isset($_POST['penulis']) && isset($_POST['deskripsi']) && isset($_POST['tanggal_publikasi'])
    && isset($_FILES['gambar']) && isset($_POST['id_kategori'])){

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

if(isset($_POST['id_berita']) && isset($_POST['highlight'])){
    $id_berita = $_POST['id_berita'];

    $highlights = fetchHighlight();
    
    $sql = "INSERT INTO highlight (id_berita) VALUES ('$id_berita')";
    $query = mysqli_query($conn,$sql);
    header("location:./Admin.php?pesan=highlight");
}

if(isset($_POST['id_berita']) && isset($_POST['beritaUtama'])){
    $id_berita = $_POST['id_berita'];

    $beritaUtama = fetchBeritaUtama();

    $sql = "INSERT INTO utama (id_berita) VALUES ('$id_berita')";
    $query = mysqli_query($conn,$sql);
    header("location:./Admin.php?pesan=utama");
}

function fetchBerita(){
    $News = array();
    $conn = Database();
    $sql = " SELECT id, judul, penulis, deskripsi,
            CONCAT(DAY(tanggal_publikasi), ' ', MONTHNAME(tanggal_publikasi), ' ' , YEAR(tanggal_publikasi)) 'publikasi',
            gambar, (SELECT nama FROM kategori WHERE id = berita.id_kategori) 'nama_kategori' 
            FROM berita WHERE berita.id NOT IN (SELECT id_berita FROM highlight) AND 
            berita.id NOT IN (SELECT id_berita FROM utama)";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query);
    foreach($result as $data){
        $berita = new Berita();
        $berita->setData($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6]);
        array_push($News,$berita);
    }
    return $News;
}

function fetchHighlight(){
    $arrayHighlight = array();
    $conn = Database();
    $sql = "SELECT highlight.id, judul, penulis, deskripsi, 
            CONCAT(DAY(tanggal_publikasi), ' ', MONTHNAME(tanggal_publikasi), ' ' , YEAR(tanggal_publikasi)) 'publikasi', 
            gambar, kategori.nama FROM ((berita
            INNER JOIN highlight ON berita.id = highlight.id_berita)
            INNER JOIN kategori ON berita.id_kategori = kategori.id)";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query);
    foreach($result as $data){
        $berita = new Berita();
        $berita->setData($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6]);
        array_push($arrayHighlight, $berita);
    }
    return $arrayHighlight;
}

function fetchBeritaUtama(){
    $arrayBeritaUtama = array();
    $conn = Database();
    $sql = "SELECT utama.id, judul, penulis, deskripsi, 
            CONCAT(DAY(tanggal_publikasi), ' ', MONTHNAME(tanggal_publikasi), ' ' , YEAR(tanggal_publikasi)) 'publikasi', 
            gambar, kategori.nama FROM ((berita
    INNER JOIN utama ON berita.id = utama.id_berita)
    INNER JOIN kategori ON berita.id_kategori = kategori.id)";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query);
    foreach($result as $data){
        $berita = new Berita();
        $berita->setData($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6]);
        array_push($arrayBeritaUtama, $berita);
    }
    return $arrayBeritaUtama;
}

?>