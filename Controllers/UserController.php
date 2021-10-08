<?php

include_once(URL . "/Model/Employees.php");
include_once(URL . "/Model/Pengguna.php");

$username = $_SESSION['username'];

if($_SESSION['role'] == 'karyawan'){
    $conn = Database();
    $sql = "SELECT * FROM employees WHERE username = '$username'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($query);
    $employee = new Employee();
    $employee->setData($result['username'],$result['nama_depan'],$result['nama_belakang']);
    
    return $employee;
    
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