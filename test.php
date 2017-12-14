<?php
//phpinfo();

/*
// Not possible to contact directly external bdd
$host = 'localhost';
$host = 'https://api-obs-sandbox.kmt.orange.com/MyAdmin/index.php';
$host = '84.39.42.179:3306/MyAdmin/index.php';
$host = '10.237.25.2:3306';
$user = 'root';
$pass = 'JHfrB30hNW4IbStG';
$dbh  = new PDO('mysql:host='.$host.';dbname=oqt', $user, $pass);
*/

$ch                = curl_init();
$request_headers   = array();
$request_headers[] = 'Cache-Control:no-cache';
$request_headers[] = 'Content-Type: application/json;charset=UTF-8';
$request_headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:52.0) Gecko/20100101 Firefox/52.0';
$url               = 'http://api-obs-demo-vstn3330.kermit.itn.intraorange/mysql.php/db/oqt/tables/requests';

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_HEADER,         false);
curl_setopt($ch, CURLOPT_URL,            $url);
curl_setopt($ch, CURLOPT_POST,           false);
curl_setopt($ch, CURLOPT_HTTPHEADER,     $request_headers);

$result   = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
echo $result;
