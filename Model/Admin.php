<?php

class Admin {
    public $username, $nama_depan, $nama_belakang;
    function setData($username, $nama_depan, $nama_belakang){
        $this->username = $username;
        $this->nama_depan = $nama_depan;
        $this->nama_belakang = $nama_belakang;
    }
}

?>