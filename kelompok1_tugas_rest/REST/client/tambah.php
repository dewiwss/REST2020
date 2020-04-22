<html>
<head>
    <title>Rest Web Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    

</head>
<body>

<?php 

if (isset ($_POST['submit'])) {
    $url = 'http://localhost:8888/REST/server/books.php';
    $data = "
    <data>
        <book>
            <id>" . $_POST['id'] . "</id>
            <author>" . $_POST['author'] ."</author>
            <title>" . $_POST['title'] ."</title>
            <genre>" . $_POST['genre'] . "</genre>
            <price>" . $_POST['price'] . "</price>
            <publish_date>" . $_POST['publish_date'] . "</publish_date>
            <description>" . $_POST['description'] . "</description>
        </book>
    </data>";

    // validasi form
    if (isset ($_POST['id']) && isset ($_POST['title']) && isset ($_POST['author']) && isset ($_POST['genre']) && isset ($_POST['price']) && isset ($_POST['publish_date']) && isset ($_POST['description']) ) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $genre = $_POST['genre'];
        $price = $_POST['price'];
        $publish_date = $_POST['publish_date'];
        $description = $_POST['description'];
    }

    if(empty($id) || empty($title) || empty($author) || empty($genre) || empty($price) || empty($publish_date) || empty($description))
    {
    // die("Data harus diisi");
    die( '
    <div class="card text-white bg-danger mb-3 mt-5" style="width: 100%; height:25%;">
        <div class="card-header"><a href="tambah.php" class="badge badge-light">Kembali</a></div>
        <div class="card-body">
        <h5 class="card-title">Data harus diisi lengkap</h5>
        </div>
        </div>
        ');
    }
    else
    {
    if (is_numeric($title) || is_numeric($author) || is_numeric($genre))
    {
        // die("Maaf, data title, author, dan genre harus berupa huruf");
        die( '
        <div class="card text-white bg-danger mb-3 mt-5" style="width: 100%; height:25%;">
            <div class="card-header"><a href="tambah.php" class="badge badge-light">Kembali</a></div>
            <div class="card-body">
            <h5 class="card-title">Maaf, data title, author, dan genre harus berupa huruf</h5>
            </div>
            </div>
            ');
    
    }
    }

    //cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    $result = curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

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
                <input type="number" class="form-control" id="id" name="id" placeholder="0">
            </div>
            </div>
            <div class="row">
            <div class="col form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="title">
            </div>
            </div>
            <div class="row">
            <div class="col form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="author">
            </div>
            <div class="col form-group">
                <label for="genre">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" placeholder="genre">
            </div>
            </div>
            <div class="row">
            <div class="col form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Rp. ,-">
            </div>
            <div class="col form-group">
                <label for="publish_date">Publish Date</label>
                <input type="date" class="form-control" id="publish_date" name="publish_date" placeholder="">
            </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" class="form-control" id="description" name="description" placeholder="description"></textarea>
            </div>
        <div class="row">
            <button type="submit" class="col btn btn-primary" height="10px" name="submit" id="submit" >Tambah Buku</button>
        </div>
        </form>
        </div>
        </div>
        
    </div>

</div>


</body>
</html>