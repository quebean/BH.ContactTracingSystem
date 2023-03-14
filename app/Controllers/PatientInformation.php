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

    public function addPatient()
    {
        $db = \Config\Database::connect();
        // $db->transStart();
        // Insert data into table1

        $data5 = [
            'cellphoneNumber' => $this->request->getVar('txtContactNum'),
            'emailAddress' => $this->request->getVar('txtEmail'),
        ];
        $db->table('tblcontactinformation')->insert($data5);
        $table4_id = $db->insertID();


        $data1 = [
            'firstName' => $this->request->getVar('txtFirstName'),
            'middleName' => $this->request->getVar('txtMiddleName'),
            'lastName' => $this->request->getVar('txtLastName'),
            'birthDate' => $this->request->getVar('txtBirthDate'),
            'sex' => $this->request->getVar('txtSex'),
            'bloodType' => $this->request->getVar('txtBloodType'),
            'contactInformationID' => $table4_id
        ];

        $db->table('tblpersons')->insert($data1);
        $table1_id = $db->insertID();


        $data2 = [
            'height' => $this->request->getVar('txtHeight'),
            'weight' => $this->request->getVar('txtWeight'),
            'citizenship' => $this->request->getVar('txtCitizenship'),
            'maritalStatus' => $this->request->getVar('txtMaritalStatus'),
            'sssNumber' => $this->request->getVar('txtSSSNum'),
            'philHealthNumber' => $this->request->getVar('txtPhilHealthNum'),
            'address' => $this->request->getVar('txtAddress'),
            'province' => $this->request->getVar('txtProvince'),
            'zipcode' => $this->request->getVar('txtZipCode'),
            'city' => $this->request->getVar('txtCity'),
            'barangay' => $this->request->getVar('txtBarangay'),
        ];

        $db->table('tblpersonalinfo')->insert($data2);
        $table2_id = $db->insertID();

        // $data3 = [
        //     // 'licenseNumber' => $this->request->getVar('txtLicenseNumber'),
        // ];

        // $db->table('tblnurse')->insert($data3);
        // $table3_id = $db->insertID();

        // Insert data into table4
        $data4 = [
            'patientNumber' => $this->request->getVar('txtPatientNumber'),
            'physician' => $this->request->getVar('txtPhysician'),
            'nextConsultation' => $this->request->getVar('txtNextAppointment'),
            'diagnoses' => $this->request->getVar('txtDiagnoses'),
            'personID' => $table1_id,
            'personalInformationID' => $table2_id,
            // 'nurseID' => $table3_id,
        ];
        $db->table('tblpatient')->insert($data4);




        // End the transaction
        // $db->transComplete();

        if ($db->transStatus() === false) {
            // print_r('An error occurred, the transaction has been rolled back');
            echo json_encode(array("status" => false));
        } else {
            // print_r('Data has been successfully inserted into both tables');
            echo json_encode(array("status" => true));
            return redirect()->back();
        }
    }

    public function getID()
    {
        $this->personalInfoID = $this->request->getVar('personalInfoID');
        $this->contactInfoID = $this->request->getVar('contactInfoID');
        echo "hello";
        $this->deleteEmployee();
    }

    public function updateEmployee()
    {
        $db = \Config\Database::connect();
        $personalInfoID = $this->request->getVar('personalInfoID');
        $contactInfoID = $this->request->getVar('contactInfoID');
        $personID = $this->request->getVar('employeeID');
        $employeeID = $this->request->getVar('employeeIDfinal');
        $builder = $db->table('tblemployeeinfo');
        $builder->where('employeeID', $employeeID);
        $data = [
            'employeeNumber' => $this->request->getVar('txtNumber'),
            'position' => $this->request->getVar('txtPosition'),
            'isNurse' => $this->request->getVar('txtNurse') ?? 'No',
            'nurseLicenseNumber' => $this->request->getVar('txtLicenseNum') ?? '',
        ];
        $builder->update($data);

        $builder = $db->table('tblpersonalinfo');
        $builder->where('personalInfoID', $personalInfoID);
        $data2 = [
            'height' => $this->request->getVar('txtHeight'),
            'weight' => $this->request->getVar('txtWeight'),
            'citizenship' => $this->request->getVar('txtCitizenship'),
            'maritalStatus' => $this->request->getVar('txtMaritalStatus'),
            'sssNumber' => $this->request->getVar('txtSSS'),
            'philHealthNumber' => $this->request->getVar('txtPhilNum'),
            'address' => $this->request->getVar('txtAddress'),
            'province' => $this->request->getVar('txtProvince'),
            'zipcode' => $this->request->getVar('txtZipCode'),
            'city' => $this->request->getVar('txtCity'),
            'barangay' => $this->request->getVar('txtBarangay'),
        ];
        $builder->update($data2);

        $builder = $db->table('tblpersons');
        $builder->where('personID', $personID);

        $data3 = [
            'firstName' => $this->request->getVar('txtFirstName'),
            'middleName' => $this->request->getVar('txtMiddleName'),
            'lastName' => $this->request->getVar('txtLastName'),
            'birthDate' => $this->request->getVar('txtBirthDate'),
            'sex' => $this->request->getVar('txtSex'),
            'bloodType' => $this->request->getVar('txtBloodType'),
        ];
        $builder->update($data3);


        $builder = $db->table('tblcontactinformation');
        $builder->where('contactInfoID', $contactInfoID);
        $data4 = [
            'cellphoneNumber' => $this->request->getVar('txtContactNum'),
            'emailAddress' => $this->request->getVar('txtEmail'),
        ];
        $builder->update($data4);

    }
}
