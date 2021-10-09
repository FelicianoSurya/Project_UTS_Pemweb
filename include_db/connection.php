<?php

function Database(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "newspapers";

    $conn = mysqli_connect($host,$user,$pass,$db);
    return $conn;
}

?>