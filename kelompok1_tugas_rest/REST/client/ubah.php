<html>
<head>
    <title>Rest Web Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    

</head>
<body>

<?php 

//GET DATA
//Resources
// $id = $_GET['id'];
$url = "http://localhost:8888/REST/server/books.php/".@$_GET['id']."";

//Mengambil data string dari resources
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$response = curl_exec($ch);
curl_close($ch);

$xml =  simplexml_load_string($response);
// echo $url;

//post data yang diubah
if (isset ($_POST['submit'])) {
    $id = $_POST['id'];
    $url = "http://localhost:8888/REST/server/books.php/".$id."";
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
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    $result = curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    echo $url;
    echo $data;
    



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
            Form Update Buku
        </div>
        <div class="card-body">
        <div class="row justify-content-center">
        <form method="POST" action="ubah.php">
            <div class="row">
            <div class="col form-group">
                <label for="id">ID</label>
                <input type="number" class="form-control" id="id" name="id" placeholder="0" value="<?php if(isset($_POST['submit'])) echo $_POST['id']; else echo $xml->book->id ?>">
            </div>
            </div>
            <div class="row">
            <div class="col form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="title" value="<?php if(isset($_POST['submit'])) echo ""; else echo $xml->book->title ?> ">
            </div>
            </div>
            <div class="row">
            <div class="col form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="author" value="<?php if(isset($_POST['submit'])) echo ""; else echo $xml->book->author ?>">
            </div>
            <div class="col form-group">
                <label for="genre">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" placeholder="genre" value="<?php if(isset($_POST['submit'])) echo ""; else echo $xml->book->genre ?>">
            </div>
            </div>
            <div class="row">
            <div class="col form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Rp. ,-" value="<?php if(isset($_POST['submit'])) echo ""; else echo $xml->book->price ?>">
            </div>
            <div class="col form-group">
                <label for="publish_date">Publish Date</label>
                <input type="date" class="form-control" id="publish_date" name="publish_date" placeholder="" value="<?php if(isset($_POST['submit'])) echo ""; else echo $xml->book->publish_date ?>">
            </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" class="form-control" id="description" name="description" placeholder="description" value="<?php if(isset($_POST['submit'])) echo ""; else echo $xml->book->description ?>"></textarea>
            </div>
        <div class="row">
            <button type="submit" class="col btn btn-primary" height="10px" name="submit" id="submit" >Update Buku</button>
        </div>
        </form>
        </div>
        </div>
        
    </div>

</div>


</body>
</html>