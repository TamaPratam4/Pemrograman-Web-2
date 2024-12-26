<?php

require_once 'Model/ListBuku.php';

class BukuController{

    public function jalankan(){

        // Menggunakan Model
        $daftar_buku_model = new ListBuku();
        $daftar_buku = $daftar_buku_model->getData();

        // Mengirim Dan Menampilkan Data Ke View
        include_once "View/BukuView.php";

    }
}