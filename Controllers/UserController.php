<?php

include_once(URL . "/Model/Admin.php");
include_once(URL . "/Model/Pengguna.php");

$username = $_SESSION['username'];

if($_SESSION['role'] == 'admin'){
    $conn = Database();
    $sql = "SELECT * FROM admin WHERE username = '$username'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($query);
    $admin = new Admin();
    $admin->setData($result['username'],$result['nama_depan'],$result['nama_belakang']);
    
    return $admin;
    
}else if($_SESSION['role'] == 'pengguna'){
    $conn = Database();
    $sql = "SELECT username, CONCAT(first_name , ' ', COALESCE(last_name,'')) 'name',
            CASE
            WHEN jenis_kelamin = 'L' THEN 'Laki-Laki'
            WHEN jenis_kelamin = 'P' THEN 'Perempuan'
            END as jk,
            CONCAT(DAY(birth_date), ' ', MONTHNAME(birth_date), ' ' , YEAR(birth_date)) 'birth',
            image FROM pengguna WHERE username = '$username'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($query);
    $pengguna = new Pengguna();
    $pengguna->setData($result['username'],$result['name'],$result['jk'],$result['birth'],$result['image']);

    return $pengguna;
}

?>