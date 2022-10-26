<?php
 $datakrs = array(
    ["kodemk"=> "11S3109", "namamk"=> "Pengembangan Aplikasi Berbasis Web", "sks" => 4],
    ["kodemk"=> "11S3101", "namamk"=> "Analisis dan Perancangan Perangkat Lunak", "sks" => 3],
    ["kodemk"=> "10S3109", "namamk"=> "Kecerdasan Buatan", "sks" => 3],
    ["kodemk"=> "11S3116", "namamk"=> "Teori Bahasa Formal dan Automata", "sks" => 3],
    ["kodemk"=> "11S3112", "namamk"=> "Pengujian dan Penjaminan Mutu Perangkat Lunak", "sks" => 3],
    ["kodemk"=> "11S3105", "namamk"=> "Kriptografi dan Keamanan Informasi", "sks" => 3],
);
$sks = array(
    4,
    3,
    3,
    3,
    3,
    3,
);

$hitung = 0;
for($i = 0; $i<sizeof($sks); $i++){
    $hitung+=$sks[$i];
}
    $nim = "11S20043";
    $nama = "Putri Ruth Berliana Siahaan";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRS Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        hr{
            border: 8px black;
        }
    </style>
    </head>
    <body>
        <h2>Kartu Rencana Studi (KRS) </h2>
        <hr>
        <table cellspacing="5">
            <tr>
                <td width="60%"><b>NIM</b></td>
                <td><b>
                    <?php 
                    echo $nim 
                    ?></b>
                </td>
            </tr>
            <tr>
                <td><b>Nama</b></td>
                <td><b>
                    <?php 
                    echo $nama 
                    ?></b>
                </td>
            </tr>
        </table>

        <table class="table">
        <thead>
            <tr>
                <br><br>
                <th scope="col">Kode Mata Kuliah</th>
                <th scope="col">Nama Mata Kuliah</th>
                <th scope="col">SKS</th>
            </tr>
        </thead>

        <tbody>
            <?php for($i=0; $i<sizeof($datakrs); $i++){ ?>
            <tr>
                <th scope="row"><?= $datakrs[$i]["kodemk"] ?></th>
                <td><?= $datakrs[$i]["namamk"] ?></td>
                <td><?= $datakrs[$i]["sks"] ?></td>
            </tr>
            <?php } ?>
        </tbody>

        <tr>
            <td colspan="2">TOTAL</td>
            <td>
                <?php  echo($hitung); ?>
            </td>
        </tr>
    </table>
    </body>
</html>