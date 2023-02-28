<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncidentReports extends Model
{
    protected $fillable = [
        'id',
        'date_filed',
        'incident_report',
        'submitted_by',
        'workstation_id',
        'created_by',
        'updated_by'
    ];
}
