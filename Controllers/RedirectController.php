<?php 

function redirectLogin(){
    $loginDulu = 0;
    if(isset($_POST['redirectLogin'])){
        $loginDulu = 1;
    }
    return $loginDulu;
}

?>