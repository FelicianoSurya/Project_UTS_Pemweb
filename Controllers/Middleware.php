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
}

?>