@extends('frontend.layout')

@section('content')
<div class="row ">
	<div class="col-md-12 d-flex justify-content-center">

		<img data-src="/thumbnails/{{ $obra->imagen}}" style="max-height:calc(100vh - 3em);" class="img-loaded img-fluid lazy">
	</div>
</div>

@endsection

@section('slide')
<div>
	<h1 class="mb-4 font-weight-bold">{{ $obra->numero }}</h1>

	<h6 class="mb-4 font-weight-bolder">{{ $obra->artista }}</h6>

	<h6 class="font-weight-bolder">{{ $obra->titulo }}</h6>
	<h6 class="font-weight-bolder">{{ $obra->tecnica }}</h6>
	<h6 class="font-weight-bolder">{{ $obra->dimensiones }}</h6>
	<h6 class="font-weight-bolder">{{ $obra->ano }}</h6>
</div>
@endsection