<?php

namespace App\Controllers;

class PatientInformation extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Patient Information';
        return view('patient-information', $data);
    }
}
