<?php

class Berita {
    public $id,$judul, $subjudul, $penulis, $deskripsi, $tanggal_publikasi, $gambar, $id_kategori;
    function setData($id, $judul, $penulis, $deskripsi, $tanggal_publikasi, $gambar, $id_kategori, $subjudul){
        $this->id = $id;
        $this->judul = $judul;
        $this->subjudul = $subjudul;
        $this->penulis = $penulis;
        $this->deskripsi = $deskripsi;
        $this->tanggal_publikasi = $tanggal_publikasi;
        $this->gambar = $gambar;
        $this->id_kategori = $id_kategori;
    }
}

?>