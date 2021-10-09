<?php

session_start();
if(isset($_SESSION['role'])){
    if($_SESSION['role'] == 'karyawan'){
        include "Views/Admin/categoryTable.php";
    }else{
        header("location:index.php");
    }
}else{
    header("location:index.php");
}

