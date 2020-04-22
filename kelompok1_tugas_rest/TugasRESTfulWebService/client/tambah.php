<html>
<head>
    <title>Rest Web Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    

</head>
<body>

<?php 

if (isset ($_POST['submit'])) {
    $url = 'http://localhost:8080/service/webresources/web.tbsnack/';
    $data = "
        <tbSnack> 
            <idSnack>".$_POST['idSnack']."</idSnack> 
            <jenisSnack>".$_POST['jenisSnack']."</jenisSnack> 
            <namaSnack>".$_POST['namaSnack']."</namaSnack> 
            <supplier>".$_POST['supplier']."</supplier> 
        </tbSnack> ";

    //cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    $result = curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    echo $data;
    echo $httpCode;

    if($httpCode == 200) {
        echo '
        <div class="card text-white bg-danger mb-3 mt-5" style="width: 100%; height:25%;">
        <div class="card-header"></div>
        <div class="card-body">
        <h5 class="card-title">Terimakasih, Data berhasil disimpan</h5>
        </div>
        </div>
        ';
    } else {
        echo '
        <div class="card text-white bg-danger mb-3 mt-5" style="width: 100%; height:25%;">
        <div class="card-header"></div>
        <div class="card-body">
        <h5 class="card-title">Maaf, Data gagal disimpan</h5>
        </div>
        </div>
        ';
    }

}
?>

<div class="container">

    <div class="row mt-3 mb-3">
        <div class="col-mb-8">
            <a href="index.php" class="btn btn-primary">Kembali</a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Form Tambah Buku
        </div>
        <div class="card-body">
        <div class="row justify-content-center">
        <form method="POST" action="tambah.php">
            <div class="row">
            <div class="col form-group">
                <label for="id">ID</label>
                <input type="number" class="form-control" id="id" name="idSnack" placeholder="0">
            </div>
            </div>
            <div class="row">
            <div class="col form-group">
                <label for="nama_snack">Nama Snack</label>
                <input type="text" class="form-control" id="nama_snack" name="namaSnack" placeholder="nama snack">
            </div>
            </div>
            <div class="row">
            <div class="col form-group">
                <label for="jenis_snack">Jenis Snack</label>
                <input type="text" class="form-control" id="jenis_snack" name="jenisSnack" placeholder="jenis_snack">
            </div>
            <div class="col form-group">
                <label for="supplier">Supplier</label>
                <input type="text" class="form-control" id="supplier" name="supplier" placeholder="supplier">
            </div>
            </div>
        <div class="row">
            <button type="submit" class="col btn btn-primary" height="10px" name="submit" id="submit" >Tambah Data Snack</button>
        </div>
        </form>
        </div>
        </div>
        
    </div>

</div>


</body>
</html>