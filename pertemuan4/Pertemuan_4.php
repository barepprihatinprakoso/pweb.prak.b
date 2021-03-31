<?php
    require 'Tabung.php';
    $_POST['nama'] = 'Barep Prihatin P';
        var_dump($_POST;)

//    $luas = 0;
//    $volume = 0;
//    if (isset($_POST['button_submit'])) {
//        $diameter = $_POST['diameter'];
//        $tinggi = $_POST['tinggi'];
//        $r = $diameter / 2;
//
//        $luas = 3.14 * $diameter * $tinggi;
//        $volume = 3.14 * $r * $r;

//        echo "diameternya $diameter <br/>";
//        echo "tinggi $tinggi <br/>";
//    } 

$tabung= new Tabung;
    if (isset($_POST['button_submit'])) {
        $tabung->setDiameter($_POST['diameter']);
        $tabung->setTinggi($_POST['tinggi']);
        $tabung->hitungluas();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <!--action jika tidak diisi akan ke halaman itu sendiri-->
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name='button_submit'>Hitung</button>
    </form>

    <hr>

        <ul>
            <!--<li>Luas Permukaan : <?=$luas;?></li>
            <li>Volume : <?=$volume;?></li>
            <li>Luas selimut : <?= is_null($Tabung) ? 'Tabung Kosong' : $tabung->getLuasSelimut();?> </li>-->
            <li>Luas Sisi : <?=$tabung->getLuasSelimut(); ?></li>
        </ul>
</body>
</html>