<?php

include_once(URL. "/Model/Kategori.php");
include_once(URL. "/Model/Berita.php");

if(!isset($_GET['kategori'])){
    error_reporting(0);
}

function fetchKategori(){
    $kategories = array();
    $conn = Database();
    $sql = "SELECT * FROM kategori ORDER BY 1 DESC";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query);
    foreach($result as $data){
        $kategori = new Kategori();
        $kategori->setData($data[0],$data[1]);
        array_push($kategories,$kategori);
    }
    return $kategories;
}

function getNameKategori(){
    $conn = Database();
    if($_GET['kategori']){
        $nama = $_GET['kategori'];
        $sql = "SELECT * FROM kategori WHERE id = '$nama'";
        $query = mysqli_query($conn,$sql);
        $result = mysqli_fetch_array($query);

        $kategori = new Kategori();
        $kategori->setData($result[0],$result[1]);
        return $kategori;
    }
}

$conn = Database();
if(isset($_POST['addKategori'])){
    $nama = $_POST['nama'] ;
    $sql = "INSERT INTO kategori (nama) VALUES ('$nama')";
    $query = mysqli_query($conn,$sql);
}

function fetchKategoriEdit(){
    $conn = Database();
    $id = $_POST['id'];
    $sql = "SELECT * FROM kategori WHERE id = '$id'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($query);
    $kategori = new Kategori();
    $kategori->setData($result[0],$result[1]);
    return $kategori;
}

if(isset($_POST['button'])){
    $id = $_POST['id'];
    if($_POST['button'] == 'DeleteKategori'){
        $sql = "DELETE FROM kategori WHERE id = '$id'";
        $query = mysqli_query($conn,$sql);
    }
}

if(isset($_POST['editKategori'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $sql = "UPDATE kategori SET nama = '$nama' WHERE id = '$id'";
    $query = mysqli_query($conn,$sql);
}

function fetchBeritaKategori(){
    $conn = Database();

    $News = array();
    if(isset($_GET['kategori'])){
        $sql = "SELECT berita.id, judul, penulis, deskripsi,
        CONCAT(DAYNAME(tanggal_publikasi) , ', ' , DAY(tanggal_publikasi), ' ', MONTHNAME(tanggal_publikasi), ' ' , YEAR(tanggal_publikasi)) 'publikasi',
        gambar, kategori.nama, subjudul, username FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id WHERE berita.id_kategori = 2 ORDER BY 6 DESC";
    }else{  
        $sql = "SELECT berita.id, judul, penulis, deskripsi,
        CONCAT(DAYNAME(tanggal_publikasi) , ', ' , DAY(tanggal_publikasi), ' ', MONTHNAME(tanggal_publikasi), ' ' , YEAR(tanggal_publikasi)) 'publikasi',
        gambar, kategori.nama, subjudul, username FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id ORDER BY 6 DESC";
    }
    $query = mysqli_query($conn,$sql);
        $result = mysqli_fetch_all($query);
        foreach($result as $data){
            $berita = new Berita();
            $berita->setData($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7], $data[8]);
            array_push($News , $berita);
        }
    return $News;
}

function fetchKategoriBeritaHighlight(){
    $conn = Database();
    $kategori = $_GET['kategori'];
    if(isset($_GET['kategori'])){
        $sql = "SELECT berita.id, judul, penulis, deskripsi,
        CONCAT(DAY(tanggal_publikasi), ' ', MONTHNAME(tanggal_publikasi), ' ' , YEAR(tanggal_publikasi)) 'publikasi',
        gambar, kategori.nama, subjudul, username FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id WHERE berita.id_kategori = '$kategori' ORDER BY berita.tanggal_publikasi DESC LIMIT 0,1";
    }else{  
        $sql = "SELECT berita.id, judul, penulis, deskripsi,
        CONCAT(DAY(tanggal_publikasi), ' ', MONTHNAME(tanggal_publikasi), ' ' , YEAR(tanggal_publikasi)) 'publikasi',
        gambar, kategori.nama, subjudul, username FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id ORDER BY berita.tanggal_publikasi DESC LIMIT 0,1";
    }
    $query = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($query);
    $row = mysqli_num_rows($query);

    if($row != 0){
        $berita = new Berita();
        $berita->setData($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7], $data[8]);
    }

    return $berita;
}

function fetchKategoriBeritaSamping(){
    $conn = Database();

    $kategori = $_GET['kategori'];
    $News = array();
    if(isset($_GET['kategori'])){
        $sql = "SELECT berita.id, judul, penulis, deskripsi,
        CONCAT(DAYNAME(tanggal_publikasi) , ', ' , DAY(tanggal_publikasi), ' ', MONTHNAME(tanggal_publikasi), ' ' , YEAR(tanggal_publikasi)) 'publikasi',
        gambar, kategori.nama, subjudul, username FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id WHERE berita.id_kategori = '$kategori' ORDER BY berita.tanggal_publikasi DESC LIMIT 1,4";
    }else{  
        $sql = "SELECT berita.id, judul, penulis, deskripsi,
        CONCAT(DAYNAME(tanggal_publikasi) , ', ' , DAY(tanggal_publikasi), ' ', MONTHNAME(tanggal_publikasi), ' ' , YEAR(tanggal_publikasi)) 'publikasi',
        gambar, kategori.nama, subjudul, username FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id ORDER BY berita.tanggal_publikasi DESC LIMIT 1,4";
    }
    $query = mysqli_query($conn,$sql);
        $result = mysqli_fetch_all($query);
        foreach($result as $data){
            $berita = new Berita();
            $berita->setData($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7], $data[8]);
            array_push($News , $berita);
        }
    return $News;
}

function fetchKategoriAllBerita(){
    $conn = Database();

    $kategori = $_GET['kategori'];
    $News = array();
    if(isset($_GET['kategori'])){
        $sql = "SELECT berita.id, judul, penulis, deskripsi,
        CONCAT(DAYNAME(tanggal_publikasi) , ', ' , DAY(tanggal_publikasi), ' ', MONTHNAME(tanggal_publikasi), ' ' , YEAR(tanggal_publikasi)) 'publikasi',
        gambar, kategori.nama, subjudul, username FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id WHERE berita.id_kategori = '$kategori' ORDER BY berita.tanggal_publikasi DESC LIMIT 999 OFFSET 5";
    }else{  
        $sql = "SELECT berita.id, judul, penulis, deskripsi,
        CONCAT(DAYNAME(tanggal_publikasi) , ', ' , DAY(tanggal_publikasi), ' ', MONTHNAME(tanggal_publikasi), ' ' , YEAR(tanggal_publikasi)) 'publikasi',
        gambar, kategori.nama, subjudul, username FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id ORDER BY berita.tanggal_publikasi DESC LIMIT 999 OFFSET 5";
    }
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query);
    foreach($result as $data){
        $berita = new Berita();
        $berita->setData($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7], $data[8]);
        array_push($News , $berita);
    }
    return $News;
}