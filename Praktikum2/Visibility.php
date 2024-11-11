<!-- Visibility.php -->
<?php

class Visibility{
    public $public = 'Public';
    public $private = 'Private';
    public $protected = 'Protected';

    function tampilkanProperty(){
        echo "Ini diakses di dalam kelas <br>";
        echo "Public : " . $this->public . "<br>";
        echo "Private : " . $this->private . "<br>";
        echo "Protected : " . $this->protected . "<br>";
    }
}