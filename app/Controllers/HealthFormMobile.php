<?php

namespace App\Controllers;

class HealthFormMobile extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Activity Tracker';
        // echo "<script>console.log('asdsadadsadas')</script>";
        return view('health-form', $data);
    }
    public function insertPersonaldata(){
        $db = \Config\Database::connect();
        
    //     $radio1 = $this->request->getVar('radio1');
    //     $radio2 = $this->request->getVar('radio2');  
    //     $radio3 = $this->request->getVar('radio3'); 

       $q1 = $this->request->getVar('q1');
       $q2 = $this->request->getVar('q2');
       $q3 = $this->request->getVar('q3');
       $q4 = $this->request->getVar('q4');
       $q5 = $this->request->getVar('q5');
       $q6 = $this->request->getVar('q6');
       $q7 = $this->request->getVar('q7');
        $data = [
            'firstName' => $this->request->getVar('firstName'),
            'middleName' => $this->request->getVar('middleName'),
            'lastName' => $this->request->getVar('lastName'),
            'birthDate' => $this->request->getVar('birthDate'),
            'sex' => $this->request->getVar('sex'),
        ];
        $db->table('tblpersons')->insert($data);

        $data2 = [ 
            'address' => $this->request->getVar('address'),
            'country' => $this->request->getVar('picountry'), 
            'province' => $this->request->getVar('province'),
            'city' => $this->request->getVar('city'),
            'barangay' => $this->request->getVar('barangay'),
        ];

        $db->table('tblpersonalinfo')->insert($data2);
        $data3 = [ 
            'bodyTemperature' => $this->request->getVar('temperature'),
            'natureOfVisit' => $this->request->getVar('natureOfVisit'), 
            'physicianName' => $this->request->getVar('physicianName'),
            'timeOfConsultation' => $this->request->getVar('timeOfConsultation'),
            'patientName' => $this->request->getVar('patientName'),
            'travelHistory' => $this->request->getVar('travelHistory'),
            'countryTravelled' => $this->request->getVar('country'), 
            'dateOfArrival' => $this->request->getVar('dateOfArrival'),
            'personalContact' => $this->request->getVar('personalContact'),
            'questionOne' => $this->request->getVar('q1'),
            'question2' => $this->request->getVar('q2'),
            'question3' => $this->request->getVar('q3'),
            'question4' => $this->request->getVar('q4'),
            'question5' => $this->request->getVar('q5'),
            'question6' => $this->request->getVar('q6'),
            'question7' => $this->request->getVar('q7'),
            'question8' => $this->request->getVar('q8'),
            'question9' => $this->request->getVar('q9'),
            'question10' => $this->request->getVar('q10'),
        ];
        $db->table('tblhealthdeclaration')->insert($data3);
      
       
        echo "<script>console.log('q1 = {$q1}')</script>";
        echo "<script>console.log('q2 = {$q2}')</script>";
        echo "<script>console.log('q3 = {$q3}')</script>";
        echo "<script>console.log('q4 = {$q4}')</script>";
        echo "<script>console.log('q5 = {$q5}')</script>";
        echo "<script>console.log('q6 = {$q6}')</script>";
        echo "<script>console.log('q7 = {$q7}')</script>";
        // echo "<script>console.log('RADIO2 = {$radio2}')</script>";
        // echo "<script>console.log('RADIO3 = {$radio3}')</script>";
    }
}
