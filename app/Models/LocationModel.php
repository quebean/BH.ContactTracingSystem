<?php

namespace App\Models;

use CodeIgniter\Model;

class LocationModel extends Model
{
    protected $table = 'tbllocations';
    protected $primaryKey = 'locationID';
    protected $allowedFields = ['locationName'];
}