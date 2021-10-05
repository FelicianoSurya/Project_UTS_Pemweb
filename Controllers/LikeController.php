<?php

include_once(URL . "/Model/Like.php");

$conn = Database();
if(isset($_POST['username']) && isset($_POST['id_komentar'])){
    $username = $_POST['username'];
    $id_komentar = $_POST['id_komentar'];
    if(isset($_POST['belumLike'])){
        $sql = "INSERT INTO likes (username, id_komentar) VALUES ('$username','$id_komentar')";
        $query = mysqli_query($conn,$sql);
    }else if(isset($_POST['sudahLike'])){
        $sql = "DELETE FROM likes WHERE username = '$username' AND id_komentar = '$id_komentar'";
        $query = mysqli_query($conn,$sql);
    }
}

?>