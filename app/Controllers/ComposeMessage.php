<?php

namespace App\Controllers;

class ComposeMessage extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Compose Message';
        return view('compose-message', $data);
    }
}
