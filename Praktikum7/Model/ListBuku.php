<?php

require_once "Buku.php";
require_once "Database/Database.php";


class LisBuku
{
  public function getData()
  {
    $db = new Database();
    $koneksi = $db->getKoneksi();

    $sql = "SELECT * FROM buku";

    $query = $koneksi->query($sql);

    $daftar_buku = [];

    if ($query->num_rows > 0) {
      while ($row = $query->fetch_assoc()) {
        $buku = new Buku($row['Judul'], $row['Pengarang'], $row['Penerbit'], $row['Tahun']);
        $buku->setId($row['ID']);
        array_push($daftar_buku, $buku);
      }
    }
    return $daftar_buku;
  }

  public function getDataById($ID){
    $db = new Database();
    $koneksi = $db->getKoneksi();

    $sql = "SELECT * FROM buku WHERE Id=" . $ID;

    $query = $koneksi->query($sql);

    if($query->num_rows > 0){
      $row = $query->fetch_assoc();

      $buku = new Buku($row['Judul'], $row['Pengarang'], $row['Penerbit'], $row['Tahun']);
      $buku->setId($row['ID']);

      return $buku;
    }
  }

  public function simpan($buku){
    $db = new Database();
    $koneksi = $db->getKoneksi();

    $sql = "INSERT INTO buku (Judul, Pengarang, Penerbit, Tahun) VALUES ('".$buku->getJudul()."', '".$buku->getPengarang()."', '".$buku->getPenerbit()."', '".$buku->getTahun()."')";

    $query = $koneksi->query($sql);

    return $query;
  }

  public function update($buku){
    $db = new Database();
    $koneksi = $db->getKoneksi();

    $sql = "UPDATE buku SET judul='".$buku->getJudul()."', pengarang='".$buku->getPengarang()."', penerbit='".$buku->getPenerbit()."', tahun='".$buku->getTahun()."' WHERE id='".$buku->getId()."'";

    $query = $koneksi->query($sql);

    return $query;
  }

  public function delete($ID){
    $db = new Database();
    $koneksi = $db->getKoneksi();

    $sql = "DELETE FROM buku WHERE id=". $ID;

    $query = $koneksi->query($sql);

    return $query;
  }

  public function getKolomTabel()
  {
    $kolom_tabel = array(
      'No',
      'Judul',
      'Pengarang',
      'Penerbit',
      'Tahun'
    );

    return $kolom_tabel;
  }
  // database: perpusatakaan 
  // tabel: buku
  // id int (11) primary key auto_increment
  // judul varchar (150)
  // pengarang varchar (!50)
  // penerbit (150)
  // tahun int (5)
}
