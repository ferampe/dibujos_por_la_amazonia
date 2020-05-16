<div >
	<a href="{{ route('info') }}" class="menu-item d-block mb-3"><span class="item-info font-weight-bolder">info</span></a>
	<!-- <a href="#" class="menu-item d-block mb-4" data-toggle="modal" data-target="#exampleModal"><span class="item-donar font-weight-bolder">donar ahora</span></a> -->

	<!-- <a href="#" class="menu-item d-block mb-4" id="link-pagar" formmethod="post"><span class="item-donar font-weight-bolder">donar ahora</span></a> -->

	<form action="{{ url('/') }}/procesar-pago" method="POST">
	  <script
	    src="https://www.mercadopago.com.pe/integrations/v1/web-tokenize-checkout.js"
	    data-public-key="TEST-e7d65a1e-4950-41f6-be95-a94834b7073f"
	    data-transaction-amount="100.00"
	    data-button-label="donar ahora"
	    data-summary-product-label="Donar">
	  </script>

	</form>	

	<style>
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
	</style>

</div>