<?php
// ob_start();
define('LARAVEL_START', microtime(true));

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;


// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
  require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
// $app = require_once __DIR__.'/../bootstrap/app.php';
$app = require __DIR__.'/../bootstrap/app.php';

$response = $app->handle(Request::capture());
$response->send();

// ob_end_clean();