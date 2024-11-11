<?php

class Orang{
    // Property
    public $nama;
    public $tglLahir;
    public $alamat;

    // Construktor
    public function __construct()
    {
        $this->nama = "Anonim";
    }

    // Method
    public function ucapSalam(){
        echo "<h2> Hallo, perkenalkan nama saya ". $this->nama."</h2>";
    }
    // Destruktor
    public function __destruct()
    {
        echo "Ini adalah destruktor dari " . $this->nama . "<br>";
    }
}