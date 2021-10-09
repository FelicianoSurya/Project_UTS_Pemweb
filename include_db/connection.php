<?php

function Database(){
    $host = "localhost";
    $user = "id17733695_lifosss";
    $pass = "Lifosmin@123";
    $db = "id17733695_newspapers";

    $conn = mysqli_connect($host,$user,$pass,$db);
    return $conn;
}

?>