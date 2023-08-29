<?php
$client = new http\Client;
$request = new http\Client\Request;
$request->setRequestUrl('https://raw.githubusercontent.com/microsoft/sql-server-samples/master/samples/databases/northwind-pubs/instnwnd.sql');
$request->setRequestMethod('POST');
$request->setOptions(array());

$client->enqueue($request)->send();
$response = $client->getResponse();
echo $response->getBody();
?>