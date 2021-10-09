<?php

session_start();
if(isset($_SESSION['role'])){
    if($_SESSION['role'] == 'admin'){
        include "Views/Admin/employeeTable.php";
    }else{
        header("location:index.php");
    }
}else{
    header("location:index.php");
}

