<?php 
class buku {
  protected $ID; //++
  protected $Judul;
  protected $Pengarang;
  protected $Penerbit;
  protected $Tahun;

public function __construct($Judul, $Pengarang, $Penerbit, $Tahun) {
$this->Judul=$Judul;
$this->Pengarang=$Pengarang;
$this->Penerbit=$Penerbit;
$this->Tahun=$Tahun;
}

public function setId($ID){
  $this->ID=$ID;
}

public function getId($ID){
  return $this->ID;
}

public function getJudul() {
  return $this->Judul;
}

public function getPengarang() {
  return $this->Pengarang;
}

public function getPenerbit() {
  return $this->Penerbit;
}

public function getTahun() {
  return $this->Tahun;
}
}