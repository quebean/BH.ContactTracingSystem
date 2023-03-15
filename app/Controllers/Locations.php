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


    public function checkLocation()
    {
        $db = \Config\Database::connect();
        $locationName = $this->request->getPost('locationName');
        $location = $db->table('tbllocations')->getWhere(['locationName' => $locationName])->getRow();

        if ($location) {
            // echo 'exists';
            print_r("exist");
        } else {
            $data = [
                'locationName' => $this->request->getPost('locationName')
            ];
            $db->table('tbllocations')->insert($data);
            echo '';
            // return redirect()->back(); 
        }

    }


    public function updateLocation($id)
    {
        $db = \Config\Database::connect();
        $locationName = $this->request->getPost('locationName');
        $location = $db->table('tbllocations')->getWhere(['locationName' => $locationName])->getRow();

        if ($location) {
            echo 'exists';
        } else {
            $builder = $db->table('tbllocations');
            $builder->where('locationID', $id);
            $locationName = $this->request->getPost('locationName');
            $data = [
                'locationName' => $locationName
            ];

            $builder->update($data);
            echo '';
        }



    }
    public function deleteLocation($id = null)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbllocations');
        $builder->where('locationID', $id);
        $builder->delete();
    }

    // public function viewLocation($id = null)
    // {
    //     $db = \Config\Database::connect();
    //     $builder = $db->table('tbllocations')->select('*')->where('locationID', $id)->get();
    //     $data = $builder->getResultArray();


    //     if ($data) {
    //         echo json_encode(array("status" => true, 'data' => $data));
    //     } else {
    //         echo json_encode(array("status" => false));
    //     }
    // }


    public function viewLocation()
    {
        $db = \Config\Database::connect();
        $query = $db->table('tbllocations')->select('*')->get();
        $data = $query->getResultArray();
        return json_encode($data);
    }
// public function viewLocationdata()
// {
//     $id = $this->input->get('id');
//     $data = $this->Your_model->get_data($id); // Replace Your_model with your model name

//     echo $data; // Return data as a string
// }

}