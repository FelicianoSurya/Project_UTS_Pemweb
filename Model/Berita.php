<?php

class Berita {
    public $id,$judul, $subjudul, $penulis, $deskripsi, $tanggal_publikasi, $gambar, $id_kategori, $editor;
    function setData($id, $judul, $penulis, $deskripsi, $tanggal_publikasi, $gambar, $id_kategori, $subjudul, $editor){
        $this->id = $id;
        $this->judul = $judul;
        $this->subjudul = $subjudul;
        $this->editor = $editor;
        $this->penulis = $penulis;
        $this->deskripsi = $deskripsi;
        $this->tanggal_publikasi = $tanggal_publikasi;
        $this->gambar = $gambar;
        $this->id_kategori = $id_kategori;
    }
}

?>