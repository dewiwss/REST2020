<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restful BUKU</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php


//Resources
$url = 'http://localhost:8888/REST/server/books.php';

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
            Data Buku
        </a></b>
    </div>
</nav>

<div class="container">
    <div class="row mt-3 mb-3 justify-content-center">
        <div class="col-mb-8">
            <a href="tambah.php" class="btn btn-primary">Tambah Data Buku</a>
        </div>
    </div>

    <div class="row">
    <?php
    //Perulangan untuk Memasukkan Data ke dalam tabel HTML
    foreach($xml->book as $book){?>
    <div class="col-md-4 mb-3 float-left" style="width: 18rem;">
    <div class="card border-info ">
        <div class="card-body">
            <h5 class="card-title text-info">#<?= $book->id ?> <?= $book->title ?></h5>
            <h6 class="card-title">Rp. <?= $book->price ?></h6>
            <span class="badge badge-pill badge-dark">Author</span>
            <p class="card-text"><?= $book->author ?></p>
            <span class="badge badge-pill badge-light">Genre</span>
            <p class="card-text"><?= $book->genre ?></p>
            <span class="badge badge-pill badge-light">Publish Date</span>
            <p class="card-text"><?= $book->publish_date ?></p>
            <span class="badge badge-pill badge-light">Description</span>
            <p class="card-text"><?= $book->description ?></p>
        </div>
        <div class="card-body">
            <a class="btn btn-danger" href="delete.php?id=<?=$book->id?>">Delete</a>
            <a class="btn btn-info" href="ubah.php?id=<?=$book->id?>">Update</a>
        </div>
    </div>
    </div>
    <?php } ?>
    </div>
</div>

</body>
</html>