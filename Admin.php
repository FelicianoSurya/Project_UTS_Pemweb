<?php

session_start();
if(isset($_SESSION['role'])){
    if($_SESSION['role'] == 'karyawan' || $_SESSION['role'] == 'admin'){
<<<<<<< Updated upstream
        include "Views/Admin/Dashboard.php";
=======
        include "Views/Admin/addEmployee.php";
>>>>>>> Stashed changes
    }else{
        header("location:index.php");
    }
}else{
    header("location:index.php");
}

