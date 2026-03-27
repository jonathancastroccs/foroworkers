<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Pensum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

    	 if (env('APP_AUTHOR') == 'jonathancastro') {     

    	Schema::create('pensums', function (Blueprint $table) {
    		$table->id();
            $table->string('pensum_img');
            $table->string('pensum_name');
            $table->string('pensum_kwone');
            $table->string('pensum_kwtwo');
            $table->string('pensum_kwthree');
            $table->string('pensum_url');
            $table->string('pensum_video');      
            $table->unsignedInteger('course_id');    	             
            $table->timestamps();
        });

    	$reply = new Pensum;
        $reply->pensum_img = 'installatton-tutorial-step-by-step';
        $reply->pensum_name = 'Installatton Tutorial Step By Step';
        $reply->pensum_kwone = 'Composer';
        $reply->pensum_kwtwo = 'Install';
        $reply->pensum_kwthree = 'Server local';
        $reply->pensum_url = 'installatton-tutorial-step-by-step';    
        $reply->pensum_video = 'https://www.youtube.com/embed/U1zIbFJqXHU';
        $reply->course_id = 1;    	        
        $reply->save();

        $reply = new Pensum;
        $reply->pensum_img = 'post-my-first-service';
        $reply->pensum_name = 'Post my first service';
        $reply->pensum_kwone = 'Publish forum';
        $reply->pensum_kwtwo = 'Freelance';
        $reply->pensum_kwthree = 'Services';
        $reply->pensum_url = 'post-my-first-service';    
        $reply->pensum_video = 'https://www.youtube.com/embed/r8JGzp6Sw28';
        $reply->course_id = 1;    	        
        $reply->save();

        $reply = new Pensum;
        $reply->pensum_img = 'post-questions-and-answers';
        $reply->pensum_name = 'Post questions and answers';
        $reply->pensum_kwone = 'QA';
        $reply->pensum_kwtwo = 'Stackoverflow';
        $reply->pensum_kwthree = 'Answers';
        $reply->pensum_url = 'post-questions-and-answers';    
        $reply->pensum_video = 'https://www.youtube.com/embed/LFSVE42mkmI';
        $reply->course_id = 1;    	        
        $reply->save();

          }


       

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    	Schema::dropIfExists('pensums');
    }
};
