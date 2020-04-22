<?php

//header untuk format XML, jika dihilangkan maka akan berbentuk data String
header('Content-Type: text/xml; charset=ISO-8859-1');

include "koneksi.php";

//	Check for the path elements
$path = @$_SERVER['PATH_INFO'];
if ($path != null)
{
    $path_params = explode("/", $path);
}

//	METODE REQUEST untuk POST
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $input = file_get_contents("php://input");
    $xml = simplexml_load_string($input); 
    // $xml->book = mysqli_fetch_object($xml);
    //problem: $xml->book tidak terbaca sebagai object
    // Notice</b>:  Trying to get property of non-object
    //Warning</b>:  Invalid argument supplied for foreach() 
    foreach ($xml->book as $book)
    {
        $querycek = "SELECT * FROM book WHERE id ='$book->id'";
        //mysqli_num_rows() untuk mengetahui berapa jumlah baris di dalam tabel database yang dipanggil oleh perintah $querycheck sehingga nilai dapat ditampilkan dalam bentuk angka numerik.
        $num_rows = mysqli_num_rows($querycek);
        if ($num_rows == 0)
        {
            $query = "INSERT INTO book (id, author, title, genre, price, publish_date, description) VALUES (
            '$book->id',
            '$book->author',
            '$book->title',
            '$book->genre',
            '$book->price',
            '$book->publish_date',
            '$book->description')";
        } 
        else if ($num_rows == 1)
        {
            $query = "UPDATE book SET
                author = '$book->author',
                title = '$book->title',
                genre = '$book->genre',
                price = '$book->price',
                publish_date = '$book->publish_date',
                description = '$book->description'
            WHERE id = '$book->id'";
        }

        $result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error());
    }



}
// METODE REQUEST untuk DELETE
else if ($_SERVER['REQUEST_METHOD'] == 'DELETE')
{ 
    $input = file_get_contents("php://input");
    $xml = simplexml_load_string($input);
    foreach ($xml->book as $book)
    {
        $query = "DELETE FROM book WHERE id='$book->id'";
        $result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error());
    }

} 
// METODE REQUEST untuk GET
else if ($_SERVER['REQUEST_METHOD'] == 'GET')
{ 
    if (@$path_params[1] != null)
    {
        $query = "SELECT id, author, title, genre, price, publish_date, description FROM book WHERE id = $path_params[1]";
    }
    else
    {
        $query = "SELECT id, author, title, genre, price, publish_date, description FROM book";
    }
    
    $result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error());
    
    echo "<data>";
    while ($line = mysqli_fetch_array($result,MYSQLI_ASSOC))
    { 
        echo "<book>";
        foreach ($line as $key => $col_value)
        {
            echo "<$key>$col_value</$key>";
        }
        echo "</book>";
    }
    echo "</data>";
    mysqli_free_result($result);
}


mysqli_close($link);

?>
