@extends('layouts/app')
@section('meta')

<title>{{ 'Registro' }}</title> 

<link rel="canonical" href="https://foroworkers.com/register" />

<meta name="description" content="Registrarse en foroworkers.com, crear una cuenta">

@endsection 
{{-- @section('title','Login') --}}
@section('content')
@include('inc/navbar')

<script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>

<style type="text/css">

  /*#editor {
    padding: 200px !important;
    }*/

    .ck.ck-editor__editable_inline>:last-child {
      margin-bottom: 250px;
    }
/*
  #mainContent div.FCKEditor {
    margin: 0 -14px 0 -6px;width: 
    }*/

  </style>

{{-- <x-guest-layout> --}}
  <!-- Session Status -->
  {{--    <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

  <div class="row">

    <div class="col-lg-8 mb-4 offset-md-2">

     <div class="card-body">

      <h1>Registro: Crear una cuenta</h1>
      <br>
      <br>

      <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- username -->

        <!-- Email Address -->
        <div>


         {{-- <div class="form-group">
          <input type="test" class="form-control form-control-user" name="username" id="username"  placeholder="Ejemplo: johndoe19" >
          @if($errors->has('username'))
          <div class="text-danger" id="msg_email">{{ $errors->first('username') }}</div>
          @endif

        </div> --}}
      </div>

    @if(empty($forum))

      <!-- forum_name -->
      <div>              

       <div class="form-group">
        <label>Nombre Foro</label>
        <input type="text" class="form-control form-control-user" name="forum_name" id="forum_name"  placeholder="foroworkers" >
       

      </div>
    </div>   

     <!-- forum_tittle -->
      <div>              

       <div class="form-group">
         <label>Titulo</label>
        <input type="text" class="form-control form-control-user" name="forum_tittle" id="forum_tittle"  placeholder="forum bussiness" >
       {{--  @if($errors->has('forum_tittle'))
        <div class="text-danger" id="msg_forum_tittle">{{ $errors->first('forum_tittle') }}</div>
        @endif --}}

      </div>
    </div>

    <!-- forum_desc -->
      <div>              

       <div class="form-group">
        <label>Meta Descripcion</label>
        <input type="text" class="form-control form-control-user" name="forum_description" id="forum_description"  placeholder="the best forum bussiness" >
        {{-- @if($errors->has('forum_tittle'))
        <div class="text-danger" id="msg_forum_tittle">{{ $errors->first('forum_tittle') }}</div>
        @endif --}}

      </div>
    </div>



     <!-- forum_description -->
      <div>              

       <div class="form-group">
        <label>Cuerpo</label>
        <textarea name="forum_content" id="editor">

              </textarea>
       {{--  @if($errors->has('forum_description'))
        <div class="text-danger" id="msg_forum_description">{{ $errors->first('forum_description') }}</div>
        @endif --}}

      </div>
    </div>

     <!-- forum_description -->
      <div>              

       <select class="form-control" name="is_digitalp" id="is_digitalp">
              <option id="option" value="">Propiedades Digitales</option>              
              <option id="option" value="0">No</option>
               <option id="option" value="1">Si</option>
                            
            </select> 
       {{--  @if($errors->has('forum_description'))
        <div class="text-danger" id="msg_forum_description">{{ $errors->first('forum_description') }}</div>
        @endif --}}

      </div>

       <!-- forum_description -->
      <div>              

       <select class="form-control" name="is_services" id="is_services">
              <option id="option" value="">Servicios</option>              
              <option id="option" value="0">No</option>
               <option id="option" value="1">Si</option>
                            
            </select> 
       {{--  @if($errors->has('forum_description'))
        <div class="text-danger" id="msg_forum_description">{{ $errors->first('forum_description') }}</div>
        @endif --}}

      </div>

       <!-- forum_description -->
      <div>              

       <select class="form-control" name="is_community" id="is_community">
              <option id="option" value="">Comunidad</option>              
              <option id="option" value="0">No</option>
               <option id="option" value="1">Si</option>
                            
            </select> 
       {{--  @if($errors->has('forum_description'))
        <div class="text-danger" id="msg_forum_description">{{ $errors->first('forum_description') }}</div>
        @endif --}}

      </div>

      @endif





      <!-- Email Address -->
      <div>              

       <div class="form-group">
        <input type="email" class="form-control form-control-user" name="email" id="email"  placeholder="JonDoe@gmail.com" >
        @if($errors->has('email'))
        <div class="text-danger" id="msg_email">{{ $errors->first('email') }}</div>
        @endif

      </div>
    </div>

    <!-- Password -->
    <div class="">


     <div class="form-group">
      <input type="password" class="form-control form-control-user" name="password" id="password"  placeholder="Password ...." > 
      @if($errors->has('password'))
      <div class="text-danger" id="msg_email">{{ $errors->first('password') }}</div>
      @endif     
    </div>

  </div>

   <!-- Sum -->
    <div class="">

      @if (session('msg_exception'))
          <div class="alert alert-danger">
            {{ session('msg_exception') }}
          </div>
          @endif


     <div class="form-group">
      <label>Cual es la suma de? {{$numberone}}+{{$numbertwo}}</label>
      <input type="number" class="form-control form-control-user" name="totalsum" id="sum" placeholder="ejem: 100"> 
      @if($errors->has('totalsum'))
      <div class="text-danger" id="msg_totalsum">{{ $errors->first('totalsum') }}</div>
      @endif     
    </div>

  </div>

  <!-- Remember Me -->
  <div class="block mt-4">
    <label for="remember_me" class="inline-flex items-center">
      <input id="terms" name="terms" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
      <span class="ml-2 text-sm text-gray-600">{{ __('Aceptar Términos de ForoWorkers') }}</span>
    </label>
  </div>

  <div class="flex items-center justify-end mt-4">
            {{-- @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif --}}


                <button type="submit" class="btn btn-primary btn-user btn-block">Send</button>

              </div>








            </form>

          </div> {{-- end card --}}

        </div> {{-- end col --}}

      </div> {{-- end row --}}

      @include('inc/footer')

        <script>

  ClassicEditor
  .create( document.querySelector( '#editor' ), {
    link: {
      decorators: {               
                openInNewTab: {
                  mode: 'manual',                  
                    defaultValue: true,     
                    attributes: {
                      target: '_blank',                    
                        rel: 'nofollow',
                    }
                }
            }
        }
        
  } )
  .then( /* ... */ )
  .catch( /* ... */ );
</script>

      @endsection
