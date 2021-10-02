<?php

class Admin {
    public $username, $first_name, $last_name;
    function setData($username, $first_name, $last_name){
        $this->username = $username;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
}

?>