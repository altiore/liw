<?php
use liw\console\ConsoleApp;
require __DIR__ . '/../vendor/autoload.php';
$app = new ConsoleApp();
$app->out('test', 'red', 'default', 'flash');

