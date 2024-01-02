<?php

declare(strict_types=1);
include  "functions.php";

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;

$app = new App;

$app->get('/');

dd($app);

return $app;

