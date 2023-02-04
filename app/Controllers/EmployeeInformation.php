<?php

namespace App\Controllers;

class EmployeeInformation extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tblemployeeinfo');
        $builder->select('*, CONCAT(tblpersons.firstName," ", tblpersons.middleName," " ,tblpersons.lastName) as fullName', FALSE);
        $builder->join('tblpersonalinfo', 'tblpersonalinfo.personalInfoID = tblemployeeinfo.personalInfoID');
        $builder->join('tblpersons', 'tblpersons.personID= tblemployeeinfo.personID');
        $query = $builder->get();
        $result = $query->getResult();
        // var_dump($result);
        $data["result"] = $result;
        $data['pageTitle'] = 'Employee Information';
        // $data['employee'] = $employeeModel->findAll();
        return view('employee-information', $data);

    }
}