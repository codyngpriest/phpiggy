<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Paths;

class Aboutcontroller
{
    private TemplateEngine $view;

    public function __construct()
    {
        $this->view = new TemplateEngine(PATHS::VIEW);
    }

    public function about()
    {
        echo $this->view->render('about.php', [
            'title' => 'About',
            'dangerousData' => '<script>alert(123)</script>'
        ]);
    }
}
