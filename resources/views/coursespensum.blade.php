@extends('layouts/app')

@section('meta')

<title>{{ $courses->pensum_name }} | {{$courses->course_name}}</title>


<link rel="canonical" href="https://laravelcoders.online/curso/{{$courses->course_url}}/{{$courses->pensum_url}}" />




<meta name="description" content="Curso {{$courses->course_name}}, aprende {{$courses->pensum_kwone}},{{$courses->pensum_kwtwo}},{{$courses->pensum_kwthree}} en laravelcoders.online">

<meta property="og:type" content="website" />



<meta property="og:title" content="{{ $courses->pensum_name }} | {{$courses->course_name}}" />


<meta property="og:description" content="Curso {{$courses->course_name}}, aprende {{$courses->pensum_kwone}},{{$courses->pensum_kwtwo}},{{$courses->pensum_kwthree}} en laravelcoders.online" />

<meta property="og:url" content="https://laravelcoders.online/curso/{{$courses->course_url}}/{{$courses->pensum_url}}" />

<meta property="og:image" content="{{URL('public/images/cursos')}}/{{ $courses->pensum_img }}" />  

@endsection 

@section('content')

<style type="text/css">
	
	p{
		font-size: 18px;	
	}

</style>

@include('inc/navbar')

<div class="row">

	<div class="col-5 offset-2">


<iframe class="embed-responsive" width="420" height="345"  src="{{$courses->pensum_video}}" > </iframe>


			<br>

			<h1 class="display-4">{{$courses->pensum_id}}.{{$courses->pensum_name}} en {{$courses->course_name}}</h1>	
	</div>

	<div class="col-4">

			<div class="card">

				<a href="/courses/{{$courses->course_url}}" class="btn btn-dark text-center">Curso Aprende {{$courses->course_name}} Desde Cero</a>

				<br>
				@if($courses->promo_url)

				<a href="{{$courses->promo_url}}" class="btn btn-danger text-center" rel="nofollow" target="_blank">Ver Curso Completo en Udemy</a>

				@endif

		@foreach($pensums as $pensum)

			<div class="ubforum-row">

				<div class="ubforum-description subforum-column">

					@if($pensum->course_id == $pensum->id )

					<h4><i class="{{ $pensum->course_icon  }}"></i>{{ $loop->iteration  }}<a href="/course/{{ $pensum->course_url  }}/{{ $pensum->pensum_url  }}" class="">{{ $pensum->pensum_name }}</a></h4>


				

					@endif

					

				</div>


			</div>


			@endforeach
	</div>

</div>

</div>
{{-- end row --}}



@include('inc/footer')
@endsection 



