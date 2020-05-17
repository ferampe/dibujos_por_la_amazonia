@extends('frontend.layout')

@section('content')

<div class="home__works-grid">
	@foreach($obras as $obra)
	@if(isset($lang) && $lang == 'en')
	<a class="home__works-grid-element c1" href="en/page/obra/?numero={{ $obra->numero }}">
	@else
	<a class="home__works-grid-element c1" href="/page/obra/?numero={{ $obra->numero }}">
	@endif
		<div class="">
			<figure>
				<img data-src="/thumbnails/thumb_{{ $obra->imagen}}" class="img-loaded lazy">
			</figure>
		</div>
		
		<div class="home__overlay">
			<span>{{ $obra->numero}}</span>
		</div>
	</a>
	@endforeach
</div>

@endsection

@section('slide')
<div class="text-home">

	<p><strong>Drawings for the Amazon</strong> brings together a volunteer group of visual artists to help the indigenous Amazon communities in Peru, who are going through difficult times due to the COVID-19 pandemic.</p> 

	<p>All funds raised will be directed to three social organizations that have a decisive role in communication, assistance and help in the health emergency: the <strong>Apostolic Vicariate of Iquitos, Ucamara Radio</strong> in Nauta, and <strong>Coshikox (Shipibo-Konibo and Xetebo Council)</strong> in Pucallpa. More than 250 artists have donated more than 400 original works in A4 format (approximate), which will be distributed among the project donors.</p>
	<p>By contributing a one-time fee of US$ 150, you will receive a link to discover which work was selected for you, through an automated system in the form of a raffle. The project is inspired by the Brazilian project 300 Desenhos. Your collaboration is fundamental and you can do it as many times as you want. </p> 
	
</div>
@endsection