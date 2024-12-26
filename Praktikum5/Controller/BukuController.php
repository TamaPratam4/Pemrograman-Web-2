<?php 

require_once 'model/listBuku.php';

class bukuController{
  public function jalankan(){
    // menggunakan model
    $daftar_buku_model=new listBuku();
    $daftar_buku= $daftar_buku_model->getData();

    // mengirim dan menampilkan data ke view
    include_once 'view/bukuView.php';
  }
}