<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCalificationCourse extends Model
{
	
	protected $table = 'users_califications_courses';



	protected $fillable = [		
		'user_id',
		'course_id',
		'calification_id',
		'review',		
		'accept'		
		
	];

	
}
