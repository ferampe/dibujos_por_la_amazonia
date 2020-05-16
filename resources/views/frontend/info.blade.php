<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name=viewport content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

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
							<div class="logo">
								<a href="/"><img src="/logo.png" class="mb-4" ></a>
							</div>
							
							@include('frontend.menu')
							
						</nav>
					</div>
				</div>

			</div>
			<!-- END SIDEBAR -->

			<!-- START OBRAS -->
			<div class="col-lg-9 col-md-8">
				<div class="row">

					<div class="col-lg-7 text-home">
						<p><strong>Dibujos por la Amazonía,</strong> inspirado en el proyecto brasileño <a href="https://300desenhos.art/info">300 Desenhos</a>, reúne a un grupo voluntario de artistas visuales con el objetivo de ayudar a las comunidades indígenas amazónicas en el Perú, que atraviesan momentos muy difíciles por el COVID-19. Todos los fondos recaudados serán dirigidos a tres organizaciones sociales que están teniendo un rol decisivo de comunicación, asistencia y ayuda frente a la emergencia de salud: <strong>el Vicariato Apostólico de Iquitos, Radio Ucamara en Nauta, y Coshikox (Consejo Shipibo-Konibo y Xetebo)</strong> en Pucallpa.</p>

						<p>Más de 250 artistas, de distintas etapas profesionales y edades, han donado cerca de 400 obras con la siguiente especificación: una obra original, inédito o no, en formato A4 (aproximado). Si bien el gran número de obras son dibujos, se incluyen también textiles, fotografías, impresiones digitales y grabado. Este grupo fascinante de obras será distribuido entre los donantes del proyecto. La cuota única de donación es US$ 150.</p>

						<p>Para contribuir acceda a DONAR AHORA que lo redirigirá a la página de Mercado Pago que tiene total protección y seguridad. El pago puede realizarse con una tarjeta de débito o crédito. Luego de completar su contribución, recibirá un correo electrónico confirmando su pago (la confirmación puede tomar entre 24 y 72 horas). Si no recibe el correo electrónico le pedimos revisar su carpeta de correo no deseado. Luego de esa confirmación, recibirá un enlace que lo llevará al sistema automatizado en formato sorteo que selecciona aleatoriamente la obra. Por cada cuota de US$ 150 dólares donada recibirá una obra. Las personas pueden contribuir cuantas veces quieran.</p>

						<p>Las obras se entregarán a los donantes en el territorio de Perú durante el segundo semestre del año, idealmente a partir de octubre de 2020, cuando las condiciones de seguridad lo permitan.</p>

						<p>Los compradores de fuera de Perú tendrán que cubrir los gastos de su envío por correo simple certificado (u otro medio que consideren pertinente). Esperamos que a través de la generosidad de la comunidad artística y de amantes del arte en general podamos contribuir a mejorar activamente la situación de urgencia que atraviesan las comunidades indígenas en Perú.</p>

						<p>Este proyecto se sostiene a través del trabajo voluntario de los involucrados. El organizador está compuesto por Christian Bendayán, Nancy La Rosa, Miguel A. López, Eliana Otta, Juan Salas; el equipo de coordinación y comunicación se conforma por Mariela Arce, Jimena Chávez Delion, Claudia Coca, Deborah Delgado, Giselle Girón, Ivonne Sheen, Jana Ugaz; el equipo de diseño, programación y web lo componen José Carlos Mariátegui, Natalia Revilla, Fernando Ramos. Agradecemos también el apoyo generoso de todos los artistas, así como los diálogos, asesoría y colaboración de Gala Berger, Manuel Cornejo, Sairah Espinoza, Padre Miguel Fuertes, Sharon Lerner, Ronald Suárez, Olinda Silvano, Leonardo Tello Imaina, Ariel Tonglet, y Centro Amazónico de Antropología y Aplicación Práctica (CAAAP).</p>

						<p class="mb-5">Agradecemos especialmente a Fernanda Brenner, Ariel Tonglet y al equipo completo del proyecto <a href="https://300desenhos.art/info">300 desenhos</a> por cedernos de forma libre y generosa el código fuente de la web y el algoritmo para desarrollar este proyecto.</p>

						<p class="mt-5 mb-3"><strong>Sobre las organizaciones apoyadas</strong></p>

						<p><strong>Coshikox (Consejo Shipibo-Konibo y Xetebo),</strong> fundado en la ciudad de Pucallpa el año 2009, es una organización indígena unitaria, autónoma, representativa, normativa que promueve el desarrollo sostenible del Pueblo Shipibo-Konibo y Xetebo. En base al desarrollo económico con identidad, busca lograr las condiciones necesarias del buen vivir y con ello sentar en el futuro las bases para el autogobierno indígena.</p>

						<p>El modo de vida cultura tradicional, es decir el buen vivir de los pueblos indígenas pasa por impactos negativos y transgresiones irreversibles, debido entre otros factores por la	corriente de globalización y por la intromisión de la economía capitalista o monetaria en casi todas las comunidades Shipibo-Konibo. Las actividades productivas tradicionales (economía indígena) sobre todo hacer solamente lo que es indispensable queda más a escala local. Sin embargo esta modalidad ahora tiene limitaciones muy serias o al tope en relación a la economía capitalista o monetaria imperante. El territorio y su entorno natural (bosquescomunales) ya no son precisamente nuestro mercado natural, nuestra farmacia y sobre todo nuestra visión del universo cultural shipibo afronta serias dificultades.</p>  

						<p><a href="http://coshikox.org/">http://coshikox.org/</a></p>

						<p class="mb-5"><a href="http://coshikox.org/"><img src="{{ asset('imagenes/logo_coshikox.png')}}" alt=""></a></p>
					</div>

					<div class="col-lg-5 text-home">
						

						<p><strong>Radio Ucamara</strong> se ubica en la confluencia de los ríos Ucayali y Marañón, las grandes
						afluentes del Amazonas en la Amazonia del Perú. Fundada en el año 1992 como parte del
						Instituto de Promoción Social Amazónica (IPSA), del Vicariato Apostólico de Iquitos, llega
						a oyentes en más de 40 comunidades indígenas y ribereñas (Kichuas, Wampis, Achuar,
						Urarina, Omurano, Shawi, Omagua, Matses, Shipibos, entre otros), además de la ciudad de
						Nauta, que es el destino de muchas familias y jóvenes que migran de sus comunidades de
						origen en búsqueda de empleo y educación. Su misión es rescatar la cultura y el idioma
						kukama y socializar información para reforzar la identidad indígena y fortalecer a las
						comunidades que enfrentan cambios y procesos fuertes y bruscos.</p>

						<p>Con su programación, busca aportar a la construcción de un mundo más justo y equitativo,
						sobre todo para pueblos que durante siglos han sido marginadas de la vida política y
						económica del país, que han sido desplazados y despojados de sus tierras por la explotación
						de recursos naturales como el caucho, la madera y el petróleo. A través de su trabajo de
						producción audiovisual y de educación, Radio Ucamara visibiliza la cultura, la memoria,
						los conocimientos y la vida del pueblo kukama, que habita el bajo Marañón.</p>

						<p>
							<a href="http://radioucamara.net/quienes-somos/">http://radioucamara.net/quienes-somos/</a> <br>
							<a href="http://radio-ucamara.blogspot.com/">http://radio-ucamara.blogspot.com/</a>
						</p>

						<p class="mb-5"><a href="http://radioucamara.net/quienes-somos/"><img src="{{ asset('imagenes/logo_radio.png')}}" alt=""></a></p>

						<p>Vicariato Apostólico San José del Amazonas es una jurisdicción misionera. Está ubicado
						en el nororiente peruano, en el departamento de Loreto, en plena selva amazónica. El
						Vicariato abarca un terreno grande, fronterizo y rural. No hay carreteras, todas las vías del
						transporte son los grandes ríos Amazonas, Napo, Putumayo e Yavarí y sus afluentes. Es
						terreno de extrema pobreza y por décadas abandonado por el estado.</p>

						<p>El Vicariato tiene 16 puestos de misión en áreas rurales donde no hay infraestructura de
						servicios y pocos medios de comunicación, dispersos y lejanos de la única ciudad de la
						región, Iquitos. Tiene una sede administrativa para logística (compra y envío de víveres,
						materiales y productos inaccesibles en los caseríos), tesorería (para fondos del vicariato, así
						como para quienes no pueden acudir a bancos), contabilidad y administración (trámites
						personales, botes, inmuebles), y tiene a su cargo un Leprosorio (Casa San José en San
						Pablo), un hospital (Centro de Salud de Santa Clotilde) y 14 puestos de salud en el río Napo
						(Micro Red Napo), cuatro colegios (de Aucayo, Indiana, Santa Clotilde, Yanashi), dos
						internados (en Santa Clotilde y El Estrecho) y dos centros de rehabilitación para
						discapacitados (en Tamshiyacu e Indiana).</p>
						<p>
						<a href="https://www.facebook.com/Vicariato-Apost%C3%B3lico-de-Iquitos-102654741402216/">https://www.facebook.com/Vicariato-Apost%C3%B3lico-de-Iquitos-102654741402216/</a></p>
					</div>
					

					












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