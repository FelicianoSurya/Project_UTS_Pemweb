<?php

    class Users{
        public $username, $password, $role;
        function setData($username,$password,$role){
            $this->username = $username;
            $this->password = $password;
            $this->role = $role;
        }
    }
    
?>