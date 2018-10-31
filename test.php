<?php
require 'vendor/autoload.php';
$client = new \patrikpihlstrom\Tempo\Client();
$response = $client->getWorklogs(['from' => '2018-01-01', 'to' => '2018-02-01']);
print_r(json_decode($response->getBody()->getContents()));
