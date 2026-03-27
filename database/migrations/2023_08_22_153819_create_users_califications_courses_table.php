<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\UserCalificationCourse;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_califications_courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('course_id');
            $table->unsignedInteger('calification_id');                
            $table->longText('review');         
            $table->boolean('accept');
            $table->timestamps();
        });

        $userpost = new UserCalificationCourse;
        $userpost->user_id = 1;
        $userpost->course_id = 1;
        $userpost->calification_id = 1;    
        $userpost->review = 'the best tutorial open source';       
        $userpost->accept = 1;              
        $userpost->save();        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_califications_courses');
    }
};
