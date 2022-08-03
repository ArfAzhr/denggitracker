<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newcase extends Model
{
    protected $table = 'denguecase';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'patientname', 'sex','age', 'region', 'area', 'date', 'denguestatus', 'denguelevel',
	];
}
