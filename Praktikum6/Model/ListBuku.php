<?php

require_once "Buku.php";
require_once "Database/Database.php";

class ListBuku{
    
public function getData(){
    $db = new Database();
    $koneksi = $db->getKoneksi();

    $sql = "SELECT * FROM buku";

    $query = $koneksi->query($sql);

    $daftar_buku = [];

    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $buku = new Buku($row['Judul'], $row['Pengarang'], $row['Penerbit'], $row['Tahun']);
            array_push($daftar_buku, $buku);
        }
    }

    return $daftar_buku;
}

public function getKolomTabel(){
    return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun', 'Aksi');
}

public function simpan($buku){
    $db = new Database();
    $koneksi = $db->getKoneksi();

    $sql = "INSERT INTO buku VALUES ('".$buku->getJudul()."', '".$buku->getPengarang()."', '".$buku->getPenerbit()."', '".$buku->getTahun()."')";

    $query = $koneksi->query($sql);

    return $query;  
}


}