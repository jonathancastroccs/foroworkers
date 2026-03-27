<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Course;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    		 if (env('APP_AUTHOR') == 'jonathancastro') {   

    	Schema::create('courses', function (Blueprint $table) {
    		$table->id();
    		$table->string('course_name');
    		$table->string('course_img');
    		$table->string('course_icon');
    		$table->string('course_url');
    		$table->longText('course_content')->nullable();
    		$table->longText('course_body')->nullable();        
    		$table->unsignedInteger('price_id');
        $table->string('promo_url')->nullable();    	             
        $table->timestamps();
      });

    	$reply = new Course;
    	$reply->course_name = 'Foroworkers';
    	$reply->course_img = 'learn-how-to-create-a-forum.png';
    	$reply->course_icon = 'fa-solid circle-play';    	
      $reply->course_url = 'foroworkers';
      $reply->course_content = '<p>Learn to create an open source forum with the Laravel framework with instructor Jonathan Castro on Udemy</li>      
      </ul>';
      $reply->price_id = 1;
      $reply->promo_url = 'https://www.udemy.com/course/curso-laravel-desde-cero-a-programador-de-sistemas/';    	        
      $reply->save();

       }

     
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    	Schema::dropIfExists('courses');
    }
  };
