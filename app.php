<?php

use App\App;

require_once('vendor/autoload.php');

try {
    $app = new App();
    $app->run();
} catch (Exception $e) {
    // todo Перехват исключений
}