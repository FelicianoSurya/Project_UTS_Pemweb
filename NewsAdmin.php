<?php

session_start();
if(isset($_SESSION['role'])){
    if($_SESSION['role'] == 'karyawan'){
        include "Views/Admin/adminTable.php";
    }else{
        header("location:index.php");
    }
}else{
    header("location:index.php");
}

