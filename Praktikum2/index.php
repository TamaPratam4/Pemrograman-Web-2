<?php
include "Orang.php";
include "Visibility.php";
include "Nilai.php";
?>

<html long="end">
    <head>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <h2>Praktikum 2</h2>
            <div>
                <?php
                $James = new Orang();
                $James->nama = "James Arthur";
                $James->ucapSalam();

                echo "<br>";

                $Alan = new Orang();
                $Alan->nama = "Alan Walker";
                $Alan->ucapSalam();

                echo "<br>";

                $visibility = new Visibility();
                $visibility->tampilkanProperty();

                echo "Ini akses di luar kelas <br>";
                echo "Public : " . $visibility->public . '<br>';
                //echo "Private : " . $visibility->private . '<br>';
                //echo "Protected : " . $visibility->protected . '<br>';

                echo "Nilai MK Pemrograman Web : <br>";
                $nilai = new Nilai();
                $nilai->setTugas(79);
                $nilai->setUts(90);
                $nilai->setUas(89);

                echo "Nilai TUGAS : " . $nilai->getTugas() . "<br>";
                echo "Nilai UTS : " . $nilai->getUts() . "<br>";
                echo "Nilai UAS : " . $nilai->getUas() . "<br>";
                echo "Total Nilai: " . $nilai->hitungTotal() . "<br>";
                ?>
            </div>
        </body>
        </html>
    </head>
</html>