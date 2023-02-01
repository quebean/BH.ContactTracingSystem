<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'tblemployeeinfo';
    protected $primaryKey = 'employeeID';
    protected $allowedFields = ['employeeNumber,isPositive, isArchived, personID, personalInfoID'];
}