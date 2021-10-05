<?php

class Like{
    public $id_komentar,  $username;
    function setData($id_komentar, $username){
        $this->id_komentar = $id_komentar;
        $this->username = $username;
    }
}