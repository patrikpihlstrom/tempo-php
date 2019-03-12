<?php
require 'vendor/autoload.php';
$client = new \patrikpihlstrom\Tempo\Client();
$response = $client->getWorklogs(['from' => '2019-03-01', 'to' => '2019-03-13', 'limit' => '1', 'user' => 'patrik.pihlstrom']);
print_r(json_decode($response->getBody()->getContents()));
$response = $client->getWorklogs(['from' => '2019-01-01', 'to' => '2019-03-13', 'limit' => '1', 'user' => 'patrik.pihlstrom', 'project' => 'LILLYNAILS']);
print_r(json_decode($response->getBody()->getContents()));
$response = $client->getWorklogs(['from' => '2019-01-01', 'to' => '2019-03-13', 'limit' => '1', 'project' => 'LILLYNAILS']);
print_r(json_decode($response->getBody()->getContents()));
