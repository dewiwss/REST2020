<?php
//tidak perlu jar file
$url ="http://localhost:8080/RESTfulWebServiceExample/hello/welcome";
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