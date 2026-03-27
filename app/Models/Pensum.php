<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pensum extends Model
{


	protected $table = 'pensums';

	

	protected $fillable = [		
		'pensum_name',
		'pensum_video',
		'course_id'			
	];

	
}
