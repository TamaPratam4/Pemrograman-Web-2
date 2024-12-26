<?php

require_once "Orang.php";

class OrangInggris extends Orang{
    //Overide
    public function UcapSalam(){
        echo "Hello My Name Is " . $this->nama . "<br>";
    }
}