<?php

include_once(URL . "/Model/Komentar.php");

if(isset($_POST['username']) && isset($_POST['id_berita']) && isset($_POST['komentar'])){
    $conn = Database();
    $username = $_POST['username'];
    $berita = $_POST['id_berita'];
    $komentar = $_POST['komentar'];
    $date = date('Y-m-d');
    $sql = "INSERT INTO komentar (username,id_berita,tanggal_komentar, komentar) VALUES ('$username', '$berita', '$date' ,'$komentar')";
    $query = mysqli_query($conn,$sql);
}

function fetchKomentar(){
    $detail = $_GET['detail'];
    $komentarArray = array();
    $conn = Database();
    $sql = "SELECT komentar.id, komentar, CONCAT(DAY(tanggal_komentar), ' ', MONTHNAME(tanggal_komentar), ' ' , YEAR(tanggal_komentar)) 
    'tanggal', username, id_berita FROM komentar INNER JOIN berita ON komentar.id_berita = berita.id WHERE berita.id = '$detail' ORDER BY komentar.id DESC";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query);

    foreach($result as $data){
        $komentar = new Komentar();
        $komentar->setData($data[0],$data[1],$data[2],$data[3],$data[4]);
        array_push($komentarArray , $komentar);
    }
    return $komentarArray;
}