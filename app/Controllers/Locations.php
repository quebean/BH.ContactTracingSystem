<?php

namespace App\Controllers;

use App\Models\LocationModel;

class Locations extends BaseController
{
    public function index()
    {
        $locationModel = new LocationModel();
        $data['locations'] = $locationModel->findAll();
        $data['pageTitle'] = 'Manage Locations';
        return view('locations', $data);
    }

    public function addLocation()
    {
        $db = \Config\Database::connect();
        $data = [
            'locationName' => $this->request->getPost('formLocation')
        ];
        $db->table('tbllocations')->insert($data);
        return redirect()->back(); 
    }

    public function checkLocation()
    {
        $db = \Config\Database::connect();
        $locationName = $this->request->getPost('locationName');
        $location = $db->table('tbllocations')->getWhere(['locationName' => $locationName])->getRow();

        if ($location) {
         echo 'exists';
        } else {
            $data = [
                'locationName' => $this->request->getPost('locationName')
            ];
            $db->table('tbllocations')->insert($data);
            echo '';
           // return redirect()->back(); 
        }
       
    }

    public function deleteLocation($id)
    {
        $locationModel = new LocationModel();
        $locationModel->delete($id);
        return redirect()->to('/locations');
    }
}
