<?php

namespace App\Controllers;

class ActivityTracker extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Personnel Activity Tracker';
        return view('activity-tracker', $data);
    }
}