<?php

include_once(URL . "/Model/Komentar.php");

function fetchKomentar(){
    $komentarArray = array();
    $conn = Database();
    $sql = "SELECT komentar.id, komentar, CONCAT(DAY(tanggal_komentar), ' ', MONTHNAME(tanggal_komentar), ' ' , YEAR(tanggal_komentar)) 
    'tanggal', username, id_berita FROM komentar INNER JOIN berita ON komentar.id_berita = berita.id";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query);

    foreach($result as $data){
        $komentar = new Komentar();
        $komentar->setData($data[0],$data[1],$data[2],$data[3],$data[4],$data[5]);
        array_push($komentarArray , $komentar);
    }
    return $komentarArray;
}