<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rest Web Service</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php


//Resources
$url = 'http://localhost:8080/service/webresources/web.tbsnack/';

//Mengambil data string dari resources
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER,1);
$response = curl_exec($client);
curl_close($client);

$xml =  simplexml_load_string($response);

?>

<nav class=" nav nav-tabs">
    <div class="container">
        <b><a class="navbar-brand" href="#">
            Data Snack
        </a></b>
    </div>
</nav>

<div class="container">
    <div class="row mt-3 mb-3 justify-content-center">
        <div class="col-mb-8">
            <a href="tambah.php" class="btn btn-primary">Tambah Data Snack</a>
        </div>
    </div>

    <div class="row">
    <?php
    //Perulangan untuk Memasukkan Data ke dalam tabel HTML
    foreach($xml->tbSnack as $snack){?>
    <div class="col-md-4 mb-3 float-left" style="width: 18rem;">
    <div class="card border-info ">
        <div class="card-body">
        <!-- nama properti sesuaikn dg yg ada di XML -->
            <h5 class="card-title text-info">#<?= $snack->idSnack ?> <?= $snack->namaSnack ?></h5>
            <span class="badge badge-pill badge-dark">Jenis</span>
            <p class="card-text"><?= $snack->jenisSnack ?></p>
            <span class="badge badge-pill badge-dark">Supplier</span>
            <p class="card-text"><?= $snack->supplier ?></p>
        </div>
        <div class="card-body">
            <a class="btn btn-danger" href="">Delete</a>
            <a class="btn btn-info" href="">Update</a>
        </div>
    </div>
    </div>
    <?php } ?>
    </div>
</div>

</body>
</html>