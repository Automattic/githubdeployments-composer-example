<?php
/*
* Plugin Name: My Cool Plugin
*/
require_once "vendor/autoload.php";

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('php://stdout', Level::Info));

$log->info('Foo');

echo 'Hello, World';