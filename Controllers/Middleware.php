<?php

include_once(URL . "/include_db/connection.php");
include_once(URL . "/Model/Users.php");
include_once(URL . "/Model/Employees.php");
include_once(URL . "/Model/Pengguna.php");

if(isset($_POST['logout'])){
    session_start();
    session_destroy();
    header("location:./index.php");
}

function isLogin(){
    return isset($_SESSION['login']);
}

function errorLogin(){
    $loginUlang = 0;
    if(isset($_POST['login'])){
        $loginUlang = 1;
    }
    return $loginUlang;
}

if(isset($_POST['Username']) && isset($_POST['Password']) && isset($_POST['login']) && isset($_POST['captcha'])){
    session_start();
    $captcha = htmlspecialchars($_POST["captcha"]);
    $captchaUser = filter_var($_POST["captcha"], FILTER_SANITIZE_STRING);
    if(empty($captchaUser)) {
      $captchaError = "Please enter the captcha.";
      return $captchaError;
    }

    if($_SESSION['CAPTCHA_CODE'] == $captchaUser){
      $captchaError = "success";
    }else{
      $captchaError = "Captcha is invalid.";
      return $captchaError;
    }

if($captchaError == 'success'){
    $username = htmlspecialchars($_POST['Username']);
    $pass = htmlspecialchars(md5($_POST['Password']));
    $conn = Database();
    $user = new Users();
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$pass'";
    $query = mysqli_query($conn,$sql);
    $cek_login = mysqli_num_rows($query);
    $result = mysqli_fetch_array($query);

    if($cek_login == 1){
        $user->setData($username,$pass,$result['role']);
        $_SESSION['role'] = $user->role;
        $_SESSION['username'] = $user->username;
    }else if($cek_login == 0){
        errorLogin();
    }
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
    $picture = "/Assets/images/profile/" . basename($profile['name']);
    $targetPicture = URL . $picture;

    move_uploaded_file($_FILES['ProfilePic']['tmp_name'], $targetPicture);

    $conn = Database();
    if($_POST['Password'] != $_POST['Konfirmasi']){
        header("location:../Views/Register.php?pesan=konfirmasigagal");
    }

    $sql = "INSERT INTO users VALUES('$Username','$Password','$role')";
    $sqlPengguna = "INSERT INTO pengguna VALUES ('$Username','$NamaDepan','$NamaBelakang','$JenisKelamin','$TanggalLahir','$picture')";
    $query = mysqli_query($conn,$sql);
    $queryPengguna = mysqli_query($conn,$sqlPengguna);
    header("location:../index.php");
}

// function passwordStatus(){
//     if(isset($_SESSION['role'])){
//         $username = $_SESSION['username'];
//         if($_SESSION['role'] == 'karyawan'){
//             $passwordStatus = 1;
//             $sql = "SELECT * FROM users WHERE username = '$username'";
//             $query = mysqli_query();
//             $result = mysqli_fetch_array($query);
//             if($result['password'] == NULL){
//                 $passwordStatus = 0;
//             }
//         }
//         return $passwordStatus; 
//     }
// }

?>