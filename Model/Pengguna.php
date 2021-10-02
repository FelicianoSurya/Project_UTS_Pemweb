<?php

class Pengguna{
    public $username, $first_name, $last_name, $jenis_kelamin, $birth_date, $image;
    function setData($username, $first_name, $last_name, $jenis_kelamin, $birth_date, $image){
        $this->username = $username;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->birth_date = $birth_date;
        $this->image = $image;
    }
}

?>