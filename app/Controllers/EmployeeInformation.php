<?php

namespace App\Controllers;

class EmployeeInformation extends BaseController
{
    public function index()
    {
        // $employeeModel = new EmployeeModel();
        $data['pageTitle'] = 'Employee Information';
        // $data['employee'] = $employeeModel->findAll();
        return view('employee-information', $data);
    }
}