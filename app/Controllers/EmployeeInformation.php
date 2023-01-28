<?php

namespace App\Controllers;

class EmployeeInformation extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Employee Information';
        return view('employee-information', $data);
    }
}
