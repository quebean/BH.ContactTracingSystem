<?php

namespace App\Controllers;

class PatientInformation extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tblpatient');
        $builder->select('*, CONCAT(tblpersons.firstName," ", tblpersons.middleName," " ,tblpersons.lastName) as fullName', FALSE);
        $builder->join('tblpersons', 'tblpersons.personID= tblpatient.personID');
        $builder->join('tblcontactinformation', 'tblcontactinformation.contactinfoID= tblpatient.personalInformationID');
        $query = $builder->get();
        $result = $query->getResult();
        $data["result"] = $result;
        $data['pageTitle'] = 'Patient Information';
        return view('patient-information', $data);
    }
}
