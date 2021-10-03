<?php

class Berita {
    public $judul, $penulis, $deskripsi, $tanggal_publikasi, $gambar, $id_kategori;
    function setData($judul, $penulis, $deskripsi, $tanggal_publikasi, $gambar, $id_kategori){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->deskripsi = $deskripsi;
        $this->tangga_publikasi = $tangga_publikasi;
        $this->gambar = $gambar;
        $this->id_kategori = $id_kategori;
    }
}

?>