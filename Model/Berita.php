<?php

class Berita {
    public $id,$judul, $penulis, $deskripsi, $tanggal_publikasi, $gambar, $id_kategori;
    function setData($id, $judul, $penulis, $deskripsi, $tanggal_publikasi, $gambar, $id_kategori){
        $this->id = $id;
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->deskripsi = $deskripsi;
        $this->tanggal_publikasi = $tanggal_publikasi;
        $this->gambar = $gambar;
        $this->id_kategori = $id_kategori;
    }
}

?>