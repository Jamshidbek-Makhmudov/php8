<?php

declare(strict_types = 1);

namespace src\app\Controllers;

use src\app\View;

class HomeController
{
    public function index(): View
    {
        return View::make('index');
    }
}
