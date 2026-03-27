<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\UserCourse;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    	Schema::create('users_courses', function (Blueprint $table) {
    		$table->id();       
    		$table->unsignedInteger('user_id');
    		$table->unsignedInteger('course_id');       	             
    		$table->timestamps();
    	});

    	$reply = new UserCourse;    	
    	$reply->user_id = 1;
    	$reply->course_id = 1;      	        
    	$reply->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    	Schema::dropIfExists('users_courses');
    }
};
