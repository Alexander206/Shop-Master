<?php

require_once __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

$folderPath = dirname($_SERVER["SCRIPT_NAME"]);
$urlPath = $_SERVER["REQUEST_URI"];
$url = substr($urlPath, strlen($folderPath));

define("URL", $url);
define("URL_PATH", $_ENV['URL_SITE']);
define("NAME_SITE", "Shop Master");
