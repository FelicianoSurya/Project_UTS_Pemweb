<?php

include_once(URL . "/Model/Berita.php");
include_once(URL . "/Model/Kategori.php");

$conn = Database();

if(isset($_POST['judul']) && isset($_POST['subjudul']) && isset($_POST['penulis']) && isset($_POST['deskripsi']) && isset($_POST['tanggal_publikasi'])
    && isset($_FILES['gambar']) && isset($_POST['id_kategori']) && isset($_POST['username']) && isset($_POST['addBerita']) && $_FILES['gambar'] != ""){

    $judul = $_POST['judul'];
    $subjudul = $_POST['subjudul'];
    $editor = $_POST['username'];
    $penulis = $_POST['penulis'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal_publikasi = $_POST['tanggal_publikasi'];
    $id_kategori = $_POST['id_kategori'];
    $image = $_FILES['gambar'];

    $imageLink = '/Assets/images/berita/' . basename($image['name']);
    $targetImage = URL . $imageLink;

    move_uploaded_file($image['tmp_name'], $targetImage);
    
    $sql = "INSERT INTO berita (judul,subjudul, penulis,deskripsi,tanggal_publikasi,gambar,id_kategori,username) 
            VALUES ('$judul','$subjudul','$penulis', '$deskripsi', '$tanggal_publikasi', '$imageLink' , $id_kategori, '$editor')";
    $query = mysqli_query($conn,$sql);
    header("location:NewsAdmin.php");
}

if(isset($_POST['editBerita'])){
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $subjudul = $_POST['subjudul'];
    $editor = $_POST['username'];
    $penulis = $_POST['penulis'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal_publikasi = $_POST['tanggal_publikasi'];
    $id_kategori = $_POST['id_kategori'];
    $image = $_FILES['gambar'];

    $imageLink = '/Assets/images/berita/' . basename($image['name']);
    $targetImage = URL . $imageLink;

    move_uploaded_file($image['tmp_name'], $targetImage);

    if(basename($image['name']) != ""){
        $sql = "UPDATE berita SET judul = '$judul' , subjudul = '$subjudul', username = '$editor' , 
        penulis = '$penulis' , deskripsi = '$deskripsi', tanggal_publikasi = '$tanggal_publikasi' , id_kategori = '$id_kategori' , gambar = '$imageLink' WHERE id = '$id'";
    }else{
        $sql = "UPDATE berita SET judul = '$judul' , subjudul = '$subjudul', username = '$editor' , 
        penulis = '$penulis' , deskripsi = '$deskripsi', tanggal_publikasi = '$tanggal_publikasi' , id_kategori = '$id_kategori' WHERE id = '$id'";
    }
    $query = mysqli_query($conn,$sql);
    header("location:NewsAdmin.php");
}

if(isset($_POST['id']) && isset($_POST['button'])){
    $id = $_POST['id'];
    $button = $_POST['button'];
    if($button == 'Delete'){
        $sql = "DELETE FROM berita WHERE id = '$id'";
        $query = mysqli_query($conn,$sql);
    }
}

function editData(){
    $conn = Database();
    $id = $_POST['id'];
    $sql = "SELECT * FROM berita WHERE id = '$id'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($query);
    $berita = new Berita();
    $berita->setData($result[0],$result[1],$result[3],$result[4],$result[5],$result[6],$result[7],$result[2], $result[8]);
    return $berita;
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
    $sql = "SELECT id, judul, penulis, deskripsi,
            CONCAT(DAY(tanggal_publikasi), ' ', MONTHNAME(tanggal_publikasi), ' ' , YEAR(tanggal_publikasi)) 'publikasi',
            gambar, (SELECT nama FROM kategori WHERE id = berita.id_kategori) 'nama_kategori' , subjudul , username
            FROM berita WHERE berita.id NOT IN (SELECT id_berita FROM highlight) AND 
            berita.id NOT IN (SELECT id_berita FROM utama)";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query);
    foreach($result as $data){
        $berita = new Berita();
        $berita->setData($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7], $data[8]);
        array_push($News,$berita);
    }
    return $News;
}

function fetchHighlight(){
    $arrayHighlight = array();
    $conn = Database();
    $sql = "SELECT berita.id, judul, penulis, deskripsi, 
            CONCAT(DAY(tanggal_publikasi), ' ', MONTHNAME(tanggal_publikasi), ' ' , YEAR(tanggal_publikasi)) 'publikasi', 
            gambar, kategori.nama , subjudul , username FROM ((berita
            INNER JOIN highlight ON berita.id = highlight.id_berita)
            INNER JOIN kategori ON berita.id_kategori = kategori.id)";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query);
    foreach($result as $data){
        $berita = new Berita();
        $berita->setData($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7], $data[8]);
        array_push($arrayHighlight, $berita);
    }
    return $arrayHighlight;
}

function fetchBeritaUtama(){
    $arrayBeritaUtama = array();
    $conn = Database();
    $sql = "SELECT berita.id, judul, penulis, deskripsi, 
            CONCAT(DAY(tanggal_publikasi), ' ', MONTHNAME(tanggal_publikasi), ' ' , YEAR(tanggal_publikasi)) 'publikasi', 
            gambar, kategori.nama, subjudul , username FROM ((berita
    INNER JOIN utama ON berita.id = utama.id_berita)
    INNER JOIN kategori ON berita.id_kategori = kategori.id) ORDER BY tanggal_publikasi DESC";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query);
    foreach($result as $data){
        $berita = new Berita();
        $berita->setData($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7], $data[8]);
        array_push($arrayBeritaUtama, $berita);
    }
    return $arrayBeritaUtama;
}

function fetchBeritaTerbaru(){
    $arrayBeritaTerbaru = array();
    $conn = Database();
    $sql = "SELECT id, judul, penulis, deskripsi,
            CONCAT(DAY(tanggal_publikasi), ' ', MONTHNAME(tanggal_publikasi), ' ' , YEAR(tanggal_publikasi)) 'publikasi',
            gambar, (SELECT nama FROM kategori WHERE id = berita.id_kategori) 'nama_kategori' , subjudul , username
            FROM berita WHERE berita.id NOT IN (SELECT id_berita FROM highlight) AND 
            berita.id NOT IN (SELECT id_berita FROM utama) ORDER BY tanggal_publikasi DESC";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query);
    foreach($result as $data){
        $berita = new Berita();
        $berita->setData($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8]);
        array_push($arrayBeritaTerbaru,$berita);
    }
    return $arrayBeritaTerbaru;
}

function fetchDetailBerita(){
    $conn = Database();
    $detail = $_GET['detail'];
    $sql = "SELECT berita.id, judul, penulis, deskripsi, 
    CONCAT(DAYNAME(tanggal_publikasi) , ', ' , DAY(tanggal_publikasi), ' ', MONTHNAME(tanggal_publikasi), ' ' , YEAR(tanggal_publikasi)) 'publikasi', 
    gambar, kategori.nama, subjudul , CONCAT(employees.nama_depan , ' ' , COALESCE(employees.nama_belakang,'')) 'Editor' 
    FROM ((berita INNER JOIN kategori ON berita.id_kategori = kategori.id)
    INNER JOIN employees ON berita.username = employees.username)
    WHERE berita.id = '$detail'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);

    $berita = new Berita();
    $berita->setData($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8]);

    return $berita;
}

function fetchRekomendasi(){
    $id = $_GET['detail'];
    $conn = Database();
    $sqlBerita = "SELECT * FROM berita WHERE id = '$id'";
    $queryBerita = mysqli_query($conn,$sqlBerita);
    $resultBerita = mysqli_fetch_array($queryBerita);
    $id_kategori = $resultBerita['id_kategori'];
    $recomendations = array();
    $sql = "SELECT berita.id, judul, penulis, deskripsi, 
    CONCAT(DAYNAME(tanggal_publikasi) , ', ' , DAY(tanggal_publikasi), ' ', MONTHNAME(tanggal_publikasi), ' ' , YEAR(tanggal_publikasi)) 'publikasi', 
    gambar, kategori.nama, subjudul , username FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id WHERE berita.id_kategori = '$id_kategori' AND berita.id <> '$id' LIMIT 4";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query);

    foreach($result as $data){
        $berita = new Berita();
        $berita->setData($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8]);
        array_push($recomendations , $berita);
    }
    return $recomendations;
}

function fetchBeritaAdmin(){
    $News = array();
    $conn = Database();
    $sql = "SELECT id, judul, penulis, deskripsi,
            CONCAT(DAY(tanggal_publikasi), ' ', MONTHNAME(tanggal_publikasi), ' ' , YEAR(tanggal_publikasi)) 'publikasi',
            gambar, (SELECT nama FROM kategori WHERE id = berita.id_kategori) 'nama_kategori' , subjudul , 
            (SELECT CONCAT(nama_depan , ' ' , COALESCE(nama_belakang,'')) FROM employees WHERE username = berita.username) 'Editor' 
            FROM berita";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query);
    foreach($result as $data){
        $berita = new Berita();
        $berita->setData($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7], $data[8]);
        array_push($News,$berita);
    }
    return $News;
}

if(isset($_POST['utama'])){
    $errorUtama = 0;
    $id = $_POST['id'];
    $sql = "SELECT * FROM utama";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($query);
    if($row < 4){
        $sqlInsert = "INSERT INTO utama (id_berita) VALUES ('$id')";
        $queryInsert = mysqli_query($conn,$sqlInsert);
    }else{
        $errorUtama = 1;
    }
}

if(isset($_POST['highlight'])){
    $errorHighlight = 0;
    $id = $_POST['id'];
    $sql = "SELECT * FROM highlight";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($query);
    if($row < 3){
        $sqlInsert = "INSERT INTO highlight (id_berita) VALUES ('$id')";
        $queryInsert = mysqli_query($conn,$sqlInsert);
    }else{
        $errorHighlight = 1;
        
    }
}

if(isset($_POST['utamaDelete'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM utama WHERE id_berita = '$id'";
    $query = mysqli_query($conn,$sql);
}

if(isset($_POST['highlightDelete'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM highlight WHERE id_berita = '$id'";
    $query = mysqli_query($conn,$sql);
}

?>