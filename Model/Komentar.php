<?php

class Komentar{
    public  $id, $komentar, $tanggal_komentar, $username, $id_berita;
    function setData($id, $komentar, $tanggal_komentar, $username, $id_berita){
        $this->id = $id;
        $this->komentar = $komentar;
        $this->tanggal_komentar = $tanggal_komentar;
        $this->username = $username;
        $this->id_berita = $id_berita;
    }
}