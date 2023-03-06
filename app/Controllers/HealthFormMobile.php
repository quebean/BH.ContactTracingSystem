<?php

namespace App\Controllers;

class HealthFormMobile extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Activity Tracker';
        return view('health-form', $data);
    }
}
