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

}