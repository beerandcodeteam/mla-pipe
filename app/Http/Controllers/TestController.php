<?php

namespace App\Http\Controllers;

class TestController
{
    public function index(): string
    {
        return dd('test');
    }
}
