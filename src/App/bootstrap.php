<?php

declare(strict_types=1);
include  "functions.php";

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use App\Config\Paths;

use function App\Config\registerRoutes;

$app = new App(Paths::SOURCE . "App/container-definitions.php");

registerRoutes($app);

return $app;
