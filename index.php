<?php
// berikut ini adalah array asosiatif ( array yang mempunyai nama )

    $mahasiswa = ]
        [
        'nama'=>'Barep Prihatin Prakoso'
        'nim' => '172410101079'
        'usia' =>'22'
        ],
        [
        'nama'=>'Oket'
        'nim' => '172410101111'
        'usia' =>'22'
        ]
        ];
//Jenis type 

$integer=2;
$double=2.1;
$string="true love";
$array=[];

// Menggabungkan string
    $satu="Biasa lah";
    $dua="Masih ting ting";
    echo $satu." ".$dua;

// Berikut adalah array
    $array=["Pemrograman","Website","Kelas B","Semester 4"];
var_dump($array);
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
    <h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Usia</th>
            </tr>
        </thead>
        <tbody>
            <?php
//Berikut ini adalah pengulangan untuk mengambil isi array assosiatif dan menampilkannya
 foreach($mahasiswa as $arr): ?>
                <tr>
                    <td> <?= $arr['nama']?></td>
                    <td> <?= $arr ['nim']?></td>
                    <td> <?= $arr ['mahasiswa']?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
</body>
</html>