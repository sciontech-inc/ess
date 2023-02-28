<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeRequirement extends Model
{
    protected $fillable = [
        'employee_id',
        'valid_id',
        'resume',
        'nbi_clearance',
        'pag_ibig',
        'philhealth',
        'sss',
        'medical_certificate',
        'bank_name',
        'account_name',
        'account_no',
    ];
}
