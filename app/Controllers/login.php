<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Activity Tracker';
        return view('login-form', $data);
    }
}
