<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="/style.css">

</head>
<body class="mt-3">
	
	<div class="container-fluid">
		
		<div class="row">
			
			<!-- START SIDEBAR -->
			<div class="col-lg-3 col-md-4">

				<div class="sidebar-item">
	                <div class="make-me-sticky">
						<nav class="menu-container" >
							<div >
								<a href="/"><img src="/logo.png" class="img-fluid mb-5" ></a>
							</div>
							
							<div >
								<a href="" class="menu-item d-block mb-3"><span class="item-info font-weight-normal">info</span></a>
								<a href="" class="menu-item d-block mb-5"><span class="item-donar font-weight-normal">donar ahora</span></a>	
							</div>

							<div>
								<h1 class="mb-4 font-weight-bold">{{ $obra->numero }}</h1>
								<h5 class="mb-4">{{ $obra->titulo }}</h5>
								<h5 class="font-weight-light">{{ $obra->tecnica }}</h5>
								<h5 class="font-weight-light">{{ $obra->dimensiones }}</h5>
								<h5 class="font-weight-light">{{ $obra->ano }}</h5>
							</div>
						</nav>
					</div>
				</div>

			</div>
			<!-- END SIDEBAR -->

			<!-- START OBRAS -->
			<div class="col-lg-9 col-md-8">
				<img data-src="/thumbnails/{{ $obra->imagen}}" style="width: 100%" class="img-loaded lazy">
			</div>
			<!-- END OBRAS -->

		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>


<script>
	$(function() {
        $('.lazy').Lazy();
    });
</script>
	
</body>
</html>