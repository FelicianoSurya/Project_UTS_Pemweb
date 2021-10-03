<?php

class Pengguna{
    public $username, $name, $jenis_kelamin, $birth_date, $image;
    function setData($username, $name, $jenis_kelamin, $birth_date, $image){
        $this->username = $username;
        $this->name = $name;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->birth_date = $birth_date;
        $this->image = $image;
    }
}

?>