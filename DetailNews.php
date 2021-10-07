<?php

if(isset($_GET['detail'])){
    include "Views/news.php";
}else{
    header("location:index.php");
}

?>