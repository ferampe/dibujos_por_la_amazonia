<div >
	
	<!-- <a href="#" class="menu-item d-block mb-4" data-toggle="modal" data-target="#exampleModal"><span class="item-donar font-weight-bolder">donar ahora</span></a> -->


	@if(isset($lang) && $lang == 'en')
		<a href="{{ route('info-en', 'en') }}" class="menu-item d-block mb-3"><span class="item-info font-weight-bolder">info</span></a>

		<a href="{{ route('donar-en', 'en')}}" class="menu-item d-block mb-4" id="link-pagar" ><span class="item-donar font-weight-bolder">donate now</span></a>
	@else
		<a href="{{ route('info') }}" class="menu-item d-block mb-3"><span class="item-info font-weight-bolder">info</span></a>

		<a href="{{ route('donar')}}" class="menu-item d-block mb-4" id="link-pagar" ><span class="item-donar font-weight-bolder">donar ahora</span></a>
	@endif

	
	<!-- <form action="{{ url('/') }}/procesar-pago/checkout.php" method="POST">
	  <script
	    src="https://www.mercadopago.com.pe/integrations/v1/web-tokenize-checkout.js"
	    data-public-key="TEST-bd1922cf-5633-4ebe-882a-c29a4a087a43"
	    data-transaction-amount="100.00"
	    data-button-label="donar ahora"
	    data-summary-product-label="Donar">
	  </script>

	</form>	 -->

	<!-- <style>
		button.mercadopago-button {
		  	background-color: #fff;
		  	color: #111;
		  	padding: 0px;
		  	
		  	border-bottom:8px solid red;
		  	font-weight: bolder!important;
		 	border-radius: 0px;
		 	font-size: 1.5rem;
		 	line-height: 1.5;
		 	font-family: 'Spartan', sans-serif;
		 	margin-bottom: 20px
		}
	</style> -->

</div>