<?php

namespace App\Traits;

// use Illuminate\Support\Facades\Route;

// se usa para redirect, pero no se puede ni en modelo por que no es apto para mvc
use lluminate\Http\RedirectResponse;

use App\Providers\RouteServiceProvider;

use App\Models\Forum;

trait CheckTutorial
{	

   public function getTutorial()
	{		

      // exit;

      // return redirect()->route('cursospensum');

      //rutas con parametros
      // return redirect()->route('cursospensum', ['cursoname' => 'foroworkers','pensunname' => 'post-questions-and-answers']);

		 $forum = Forum::select('forums.forum_name','forums.forum_tittle','forums.forum_description')
      ->where('id', 1)
      ->first();  
      
      //  if (empty($forum) || env('APP_ENV') == 'local') {

      //   // return redirect('/course/foroworkers/post-questions-and-answers');

      //    return redirect()->intended('/course/foroworkers/post-questions-and-answers');

      // }
 return redirect()->intended(RouteServiceProvider::HOME);

	}

	
}