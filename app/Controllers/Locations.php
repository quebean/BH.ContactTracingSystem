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
        $locationModel = new LocationModel();
        $data = [
            'locationName' => $this->request->getPost('formLocation')
        ];
        $locationModel->insert($data);
        // if($save != false)
        // {
        //     $data = $model->where('id', $save)->first();
        //     echo json_encode(array("status" => true , 'data' => $data));
        // }
        // else{
        //     echo json_encode(array("status" => false , 'data' => $data));
        // 
        return redirect()->back();
    }

}