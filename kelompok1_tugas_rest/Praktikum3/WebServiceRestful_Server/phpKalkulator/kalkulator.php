<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="kalkulator">
<h2 class="judul">
    Hasil Operasi Perhitungan
</h2>
<table class="hasil">
    <tr>
        <td>
            <h3>Hasil Penjumlahan (+) </h3>
            <span class="opt">
                <?php
                //tidak perlu jar file
                $url ="http://localhost:8080/WebServiceRestful_Server/rest/demo/tambah/20/5";
                // lewatkan URL dari RESTful Java-nya
                $client = curl_init($url);
                curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
                //curl_setopt($client,CURLOPT_POST,$data);
                $response = curl_exec($client);
                //$result = json_decode($response);
                if(!empty($response)) {
                    echo $response;
                } else {
                    echo "No data found";
                }
                ?>
            </span>
        </td>
        <td>
        <h3>Hasil Pengurangan (-) </h3>
        <span class="opt">
            <?php
            //tidak perlu jar file
            $url ="http://localhost:8080/WebServiceRestful_Server/rest/demo/kurang/20/5";
            // lewatkan URL dari RESTful Java-nya
            $client = curl_init($url);
            curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
            //curl_setopt($client,CURLOPT_POST,$data);
            $response = curl_exec($client);
            //$result = json_decode($response);
            if(!empty($response)) {
                echo $response;
            } else {
                echo "No data found";
            }
            ?>
        </span>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Hasil Perkalian (x) </h3>
            <span class="opt">
                <?php
                //tidak perlu jar file
                $url ="http://localhost:8080/WebServiceRestful_Server/rest/demo/kali/20/5";
                // lewatkan URL dari RESTful Java-nya
                $client = curl_init($url);
                curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
                //curl_setopt($client,CURLOPT_POST,$data);
                $response = curl_exec($client);
                //$result = json_decode($response);
                if(!empty($response)) {
                    echo $response;
                } else {
                    echo "No data found";
                }
                ?>
            </span>
        </td>
        <td>
        <h3>Hasil Pembagian (/) </h3>
        <span class="opt">
            <?php
            //tidak perlu jar file
            $url ="http://localhost:8080/WebServiceRestful_Server/rest/demo/bagi/20/5";
            // lewatkan URL dari RESTful Java-nya
            $client = curl_init($url);
            curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
            //curl_setopt($client,CURLOPT_POST,$data);
            $response = curl_exec($client);
            //$result = json_decode($response);
            if(!empty($response)) {
                echo $response;
            } else {
                echo "No data found";
            }
            ?>
        </span>
        </td>
    </tr>
</table>

    
        

</div>


</body>
</html>