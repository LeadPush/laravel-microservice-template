<?php

namespace App\Web\Home\Controllers;

class IndexController
{
    public function __invoke()
    {
        return view('welcome');
    }
}
