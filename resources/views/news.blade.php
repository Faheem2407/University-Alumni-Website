@extends('layout')
@section('content')

<div class="container">
	<br>
	<h3 class="text-center">JKKNIU Alumni News</h3>
	
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-inner">
			<div class="carousel-item">
			  <img src="{{asset('images/slider-02.jpg')}}" width="1295" height="400" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="{{asset('images/dept.jpg')}}" width="1295" height="400" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item active">
			  <img src="{{asset('images/slider-02.jpg')}}" width="1295" height="400" class="d-block w-100" alt="...">
			</div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		  </button>
		</div>	
	<p class="fs-5 varsity-content p-5">
		Jatiya Kabi Kazi Nazrul Islam University was established by the Government of Bangladesh on 09 May 2006, though the initiative for its establishment was taken some years before, firstly by a non-official group of socio-cultural local elites, namely Greater Mymensingh Cultural Forum. The university was originally conceived to be built as the first cultural university in Bangladesh, but the JKKNIU Act enacted in 2006 made it a general university with a special focus on liberal-cum-performing arts education and research.
	</p>
	<p>
		The JKKNIU Alumni Scocity maintains and enhances a highly engaged, vibrant community of alumni and friends worldwide. It helps connect alumni to the University and each other through a wealth of community activities, continuing education programs, online services, and events around the world.
	</p>	
	

</div>

@endsection