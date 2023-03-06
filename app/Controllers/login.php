<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Bautistal Hospital';
        return view('loginform', $data);
    }
}