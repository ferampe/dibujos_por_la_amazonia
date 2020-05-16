<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dibujos por la Amazonia</title>
	<meta name=viewport content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="/style.css">

</head>
<body class="mt-3">
	
	<div class="container-fluid">

		
		<div class="row">
			
			<!-- START SIDEBAR -->
			<div class="col-lg-3 col-md-12">

				<div class="sidebar-item">
	                <div class="make-me-sticky">
						<nav class="menu-container" >
							<div class="logo">
								<a href="/"><img src="/logo.png" class="mb-4" ></a>
							</div>
							
							@include('frontend.menu')

							<div class="text-home mb-5">
								<p><strong>Dibujos por la Amazonía</strong>, inspirado en el proyecto brasileño <a href="https://300desenhos.art/">300 Desenhos</a>, reúne a un grupo voluntario de artistas visuales para ayudar a las comunidades indígenas amazónicas en el Perú, que están atravesando momentos difíciles por la pandemia COVID-19.</p> 

								<p>Todos los fondos recaudados serán dirigidos a tres organizaciones sociales que tienen un rol decisivo en la comunicación, asistencia y ayuda frente a la emergencia de salud: el <strong>Vicariato Apostólico de Iquitos, Radio Ucamara</strong> en Nauta, y <strong>Coshikox (Consejo Shipibo-Konibo y Xetebo)</strong> de Pucallpa. Más de 250 artistas han donado cerca de 400 obras originales en formato A4 (aproximado), que serán distribuidas entre los donadores del proyecto. Al contribuir con una cuota única de US$ 150, recibirá un link para descubrir qué obra fue seleccionada para usted, a través de un sistema automatizado en formato de sorteo. Su colaboración es fundamental y puede realizarla cuantas veces quiera.</p>
							</div>
						</nav>
					</div>
				</div>

			</div>
			<!-- END SIDEBAR -->

			<!-- START OBRAS -->
			<div class="col-lg-9 col-md-12">
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
			</div>
			<!-- END OBRAS -->

		</div>
	</div>

	@include('frontend.modal-pago')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>


<script>
	$(function() {
        $('.lazy').Lazy();
    });
</script>
	
</body>
</html>