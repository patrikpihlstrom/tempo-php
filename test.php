<?php
require 'vendor/autoload.php';
$client = new \patrikpihlstrom\Tempo\Client();
$response = $client->getWorklogs(['from' => '2018-09-01', 'to' => '2018-10-31', 'limit' => '1000000', 'project' => 'LILLYNAILS']);
print_r(json_decode($response->getBody()->getContents()));
