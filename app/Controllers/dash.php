<?php

namespace App\Controllers;

class dash extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }
}
