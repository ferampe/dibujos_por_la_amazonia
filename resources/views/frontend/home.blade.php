@extends('frontend.layout')

@section('content')

<div class="home__works-grid">
	@foreach($obras as $obra)
	<a class="home__works-grid-element c1" href="/page/obra/{{ $obra->numero }}">
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
<div class="text-home mb-5">
	<p><strong>Dibujos por la Amazonía</strong>, inspirado en el proyecto brasileño <a href="https://300desenhos.art/">300 Desenhos</a>, reúne a un grupo voluntario de artistas visuales para ayudar a las comunidades indígenas amazónicas en el Perú, que están atravesando momentos difíciles por la pandemia COVID-19.</p> 

	<p>Todos los fondos recaudados serán dirigidos a tres organizaciones sociales que tienen un rol decisivo en la comunicación, asistencia y ayuda frente a la emergencia de salud: el <strong>Vicariato Apostólico de Iquitos, Radio Ucamara</strong> en Nauta, y <strong>Coshikox (Consejo Shipibo-Konibo y Xetebo)</strong> de Pucallpa. Más de 250 artistas han donado cerca de 400 obras originales en formato A4 (aproximado), que serán distribuidas entre los donadores del proyecto. Al contribuir con una cuota única de US$ 150, recibirá un link para descubrir qué obra fue seleccionada para usted, a través de un sistema automatizado en formato de sorteo. Su colaboración es fundamental y puede realizarla cuantas veces quiera.</p>
</div>
@endsection