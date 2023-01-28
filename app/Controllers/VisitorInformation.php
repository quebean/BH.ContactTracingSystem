<?php

namespace App\Controllers;

class VisitorInformation extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Visitor Information';
        return view('visitor-information', $data);
    }
}
