<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dibujos por la Amazonia</title>
	<!-- <meta name=viewport content="width=device-width, initial-scale=1.0, maximum-scale=1.0"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>


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

							@yield('slide')
						</nav>
					</div>
				</div>

			</div>
			<!-- END SIDEBAR -->

			<!-- START OBRAS -->
			<div class="col-lg-9 col-md-12">
				@yield('content')
				
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