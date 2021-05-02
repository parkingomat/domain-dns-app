<?php
require('vendor/autoload.php');


use Symfony\Component\HttpClient\HttpClient;

$url = 'http://localhost:8080/index.php';

$httpClient = HttpClient::create();
$response = $httpClient->request('GET', $url, [
    'body' => [
        'domain_list' => []
    ]
]);
$content = $response->getContent();
echo $content . "\n";


$httpClient = HttpClient::create();
$response = $httpClient->request('POST', $url, [
    'body' => [
        'domain_list' => []
    ]
]);
$content = $response->getContent();
echo $content . "\n";


$httpClient = HttpClient::create();
$response = $httpClient->request('POST', $url, [
    'body' => [
        'domain_list' => "
        
        "
    ]
]);
$content = $response->getContent();
echo $content . "\n";


$httpClient = HttpClient::create();
$response = $httpClient->request('POST', $url, [
    'body' => [
        'domain_list' => "
apifoundation.com
apipong.com
apiprogram.com
apiexec.com
devopsterminal.com
apiunit.com
apicra.com
apibuild.com
promagen.com
        "
    ]
]);
$content = $response->getContent();
echo $content . "\n";


die;
