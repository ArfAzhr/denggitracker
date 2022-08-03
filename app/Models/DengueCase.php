<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DengueCase extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'case_id';
    protected $fillable = [
        
		    'case_id',
            'patientname',
            'sex',
            'age',
            'region',
            'area',
            'date',
            'denguestatus',
            'denguelevel',
	];
}
