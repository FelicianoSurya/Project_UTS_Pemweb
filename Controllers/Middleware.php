<?php

include_once(URL . "/include_db/connection.php");
include_once(URL . "./Model/Users.php");
include_once(URL . "./Model/Admin.php");
include_once(URL . "./Model/Pengguna.php");

if(isset($_POST['logout'])){
    session_start();
    session_destroy();
}

function isLogin(){
    return isset($_SESSION['login']);
}

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['login'])){
    $username = $_POST['username'];
    $pass = md5($_POST['password']);
    $conn = Database();
    $user = new Users();
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$pass'";
    $query = mysqli_query($conn,$sql);
    $cek_login = mysqli_num_rows($query);
    $result = mysqli_fetch_array($query);

    if($cek_login == 1){
        $user->setData($username,$password,$result['role']);
        $_SESSION['role'] = $user->role;
        $_SESSION['username'] = $user->username;
        header("location:./index.php?pesan=berhasil");
    }else{
        header("location:./index.php?pesan=gagal");
    }
}else if(isset($_POST['NamaDepan']) && isset($_POST['NamaBelakang']) && isset($_POST['TanggalLahir']) && 
    isset($_POST['JenisKelamin']) && isset($_POST['Username']) && isset($_FILES['ProfilePic']) && isset($_POST['Password']) && 
    $_POST['Konfirmasi'] && isset($_POST['register'])){
    echo "halo";
    $NamaDepan = $_POST['NamaDepan'];
    $NamaBelakang = $_POST['NamaBelakang'];
    $TanggalLahir = $_POST['TanggalLahir'];
    $JenisKelamin = $_POST['JenisKelamin'];
    $Username = $_POST['Username'];
    $Password = md5($_POST['Password']);
    $profile = $_FILES['ProfilePic'];
    $role = "Pengguna";
    echo $profile['name'];
    $targetPicture = URL . "/Assets/images/profile/" . basename($profile['name']);

    move_uploaded_file($_FILES['ProfilePic']['tmp_name'], $targetPicture);

    $conn = Database();
    if($_POST['Password'] != $_POST['Konfirmasi']){
        header("location:../Views/Register.php?pesan=konfirmasigagal");
    }

    $sql = "INSERT INTO users VALUES('$Username','$Password','$role')";
    $sqlPengguna = "INSERT INTO pengguna VALUES ('$Username','$NamaDepan','$NamaBelakang','$JenisKelamin','$TanggalLahir','$targetPicture')";
    $query = mysqli_query($conn,$sql);
    $queryPengguna = mysqli_query($conn,$sqlPengguna);
    header("location:../index.php");
}

?>