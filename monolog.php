<?php
require 'vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$log -> pushHandler(new StreamHandler('monolog.log',Logger::WARNING));

$log -> warn('JingGaoRiZhi');
$log -> err('CuoWuRiZhi');