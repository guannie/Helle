<?php

namespace app\Model;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	protected $table = 'patientinfo';
	protected $primaryKey = 'patientID';
	//protected $attributes = 'symbol';
	//protected $fillable = ['symbol'];
}