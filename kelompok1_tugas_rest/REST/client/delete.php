<html>
<head>
    <title>Rest Web Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class="container" center>
<?php


$id = $_GET['id'];

// URL untuk service yang digunakan dalam hal ini books.php dengan ID tertentu
$url = "http://localhost:8888/REST/server/books.php/'.$id.'";
$data = "
    <data>
        <book>
            <id>" . $id . "</id>
        </book>
    </data>";

$ch = curl_init();
// Bagian untuk memanggil request DELETE dari books.php
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
$result = curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if($httpCode == 200) {
    echo '
    <div class="card text-white bg-danger mb-3 mt-5" style="width: 100%; height:25%;">
    <div class="card-header"><a href="index.php" class="badge badge-light">Kembali ke Halaman Data Buku</a></div>
    <div class="card-body">
    <h5 class="card-title">Data buku dengan id '.$id.' telah terhapus</h5>
    </div>
    </div>
';
}else{
    echo '
    <div class="card text-white bg-danger mb-3 mt-5" style="width: 100%; height:25%;">
    <div class="card-header"><a href="index.php" class="badge badge-light">Kembali ke Halaman Data Buku</a></div>
    <div class="card-body">
    <h5 class="card-title">Data buku dengan id '.$id.' gagal terhapus</h5>
    </div>
    </div>
';
}

?>
</div>




</body>
</html>
