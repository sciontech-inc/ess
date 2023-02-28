<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compensations extends Model
{
    protected $fillable = [
        'monthly_compensation',
        'annual_compensation',
        'tax',
        'government_mandated_benefits',
        'other_company_benefits',
        'employee_id',
        'created_by',
        'updated_by'
    ];
}
