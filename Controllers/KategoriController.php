<?php

include_once(URL. "/Model/Kategori.php");

function fetchKategori(){
    $kategories = array();
    $conn = Database();
    $sql = "SELECT * FROM kategori";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query);
    foreach($result as $data){
        $kategori = new Kategori();
        $kategori->setData($data[0],$data[1]);
        array_push($kategories,$kategori);
    }
    return $kategories;
}