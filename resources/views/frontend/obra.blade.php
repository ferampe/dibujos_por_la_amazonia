@extends('frontend.layout')

@section('content')

<img data-src="/thumbnails/{{ $obra->imagen}}" style="width: 100%" class="img-loaded lazy">

@endsection

@section('slide')
<div>
	<h1 class="mb-4 font-weight-bold">{{ $obra->numero }}</h1>

	<h6 class="mb-4 font-weight-bolder">{{ $obra->artista }}</h6>

	<h6 class="font-weight-normal">{{ $obra->titulo }}</h6>
	<h6 class="font-weight-normal">{{ $obra->tecnica }}</h6>
	<h6 class="font-weight-normal">{{ $obra->dimensiones }}</h6>
	<h6 class="font-weight-normal">{{ $obra->ano }}</h6>
</div>
@endsection