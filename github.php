<?php
require_once __DIR__ . '/vendor/autoload.php';

$client = new \Github\Client();
$repositories = $client->api('repository')->find('magento2')['repositories'];
var_dump($repositories);
