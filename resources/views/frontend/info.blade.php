@extends('frontend.layout')

@section('content')

<div class="row">
	<div class="col-lg-7 text-info-page">


		<p><strong>Dibujos por la Amazonía,</strong> inspirado en el proyecto brasileño <a href="https://300desenhos.art/info">300 Desenhos,</a> reúne a un grupo voluntario de artistas visuales con el objetivo de ayudar a las comunidades indígenas amazónicas en el Perú, que atraviesan momentos muy difíciles por el COVID-19. </strong>Todos los fondos recaudados serán dirigidos a tres organizaciones sociales que están teniendo un rol decisivo de comunicación, asistencia y ayuda frente a la emergencia de salud: el Vicariato Apostólico de Iquitos, Radio Ucamara en Nauta, y Coshikox (Consejo Shipibo-Konibo y Xetebo) en Pucallpa.</strong></p>

		<p>Más de 250 artistas, de distintas etapas profesionales y edades, han donado más de 400 obras con la siguiente especificación: una obra original, inédito o no, en formato A4 (aproximado). Si bien el gran número de obras son dibujos, se incluyen también textiles, fotografías, impresiones digitales y grabado. Este grupo fascinante de obras será distribuido entre los donantes del proyecto. La cuota única de donación es US$ 150.</p>

		<h6>¿CÓMO PUEDE APOYAR? </h6>
		<p>Para contribuir acceda al link <a href="{{ route('donar')}}">DONAR AHORA</a> que lo redirigirá a la página de Mercado Pago que tiene total protección y seguridad. El pago puede realizarse con una tarjeta de débito o crédito. Luego de completar su contribución, recibirá un correo electrónico confirmando su pago (la confirmación puede tomar entre 24 y 72 horas). Si no recibe el correo electrónico le pedimos revisar su carpeta de correo no deseado. Luego de esa confirmación, recibirá un enlace que lo llevará al sistema automatizado en formato sorteo que selecciona aleatoriamente la obra para usted. <strong>Por cada donación de US$ 150 dólares recibirá una obra. Las personas pueden contribuir cuantas veces quieran.</strong></p>

		<p>Las obras se entregarán a los doantes en el territorio de Perú durante el segundo semestre del año, a partir de septiembre de 2020, cuando las condiciones de seguridad lo permitan. </p>
		
		<p>Para los compradores fuera de Perú: Luego de procesada su dirección nos pondremos en contacto para enviar costos de las opciones de envío.</p>

		<p>Esperamos que a través de la generosidad de la comunidad artística y de amantes del arte en general podamos contribuir a mejorar activamente la situación de urgencia que atraviesan las comunidades indígenas en Perú. </p>


		<p>Agradecemos enormemente el apoyo generoso de los y las artistas.</p>

		<p>Este proyecto se sostiene a través del trabajo voluntario de los involucrados. El equipo organizador está compuesto por Christian Bendayán, Nancy La Rosa, Miguel A. López, Eliana Otta, Juan Salas; el equipo de coordinación y comunicación lo conforman Mariela Arce, Jimena Chávez Delion, Claudia Coca, Deborah Delgado, Giselle Girón, Ivonne Sheen y Jana Ugaz; el equipo de diseño, programación y web lo componen José-Carlos Mariátegui, Natalia Revilla y Fernando Ramos. La traducción al inglés fue realizada por Max Hernández Calvo. Agradecemos los diálogos, asesoría y colaboración de Gala Berger, Manuel Cornejo, Sairah Espinoza, Padre Miguel Fuertes, Sharon Lerner, Ronald Suárez, Olinda Silvano, Leonardo Tello Imaina, y el Centro Amazónico de Antropología y Aplicación Práctica (CAAAP). </p>

		<p>Un agradecimiento especial a Fernanda Brenner, Ariel Tonglet y al equipo del proyecto <a href="https://300desenhos.art/info">300 desenhos</a> por cedernos de forma libre y generosa el código fuente de la web y el algoritmo para desarrollar este proyecto. </p>


		<h6>Sobre las organizaciones apoyadas</h6>

		<p><strong>Coshikox (Consejo Shipibo-Konibo y Xetebo),</strong> fundado en la ciudad de Pucallpa el año 2009, es una organización indígena unitaria, autónoma y representativa que promueve el desarrollo sostenible del Pueblo Shipibo-Konibo y Xetebo. En base al desarrollo económico con identidad, busca lograr las condiciones necesarias del buen vivir y con ello sentar en el futuro las bases para el autogobierno indígena. </p>

		<p>“El modo de vida cultura tradicional, es decir el buen vivir de los pueblos indígenas pasa por impactos negativos y transgresiones irreversibles, debido entre otros factores por la corriente de globalización y por la intromisión de la economía capitalista o monetaria en casi todas las comunidades Shipibo-Konibo. Las actividades productivas tradicionales (economía indígena) sobre todo hacer solamente lo que es indispensable queda más a escala local. Sin embargo esta modalidad ahora tiene limitaciones muy serias o al tope en relación a la economía capitalista o monetaria imperante. El territorio y su entorno natural (bosques comunales) ya no son precisamente nuestro mercado natural, nuestra farmacia y sobre todo nuestra visión del universo cultural shipibo afronta serias dificultades.”</p>

		<p><a href="http://coshikox.org/">http://coshikox.org/</a></p>

		<p class="mb-5"><a href="http://coshikox.org/"><img src="{{ asset('imagenes/logo_coshikox.png')}}" alt=""></a></p>

 

		<p><strong>Radio Ucamara</strong> se ubica en la confluencia de los ríos Ucayali y Marañón, las grandes afluentes del Amazonas en la Amazonia del Perú. Fundada en el año 1992 como parte del Instituto de Promoción Social Amazónica (IPSA), del Vicariato Apostólico de Iquitos, llega a oyentes en más de 40 comunidades indígenas y ribereñas (Kichuas, Wampis, Achuar, Urarina, Omurano, Shawi, Omagua, Matses, Shipibos, entre otros),  además de la ciudad de Nauta, que es el destino de muchas familias y jóvenes que migran de sus comunidades de origen en búsqueda de empleo y educación. Su misión es rescatar la cultura y el idioma kukama y socializar información para reforzar la identidad indígena y fortalecer a las comunidades que enfrentan cambios y procesos fuertes y bruscos. </p>

		<p>“Con su programación, busca aportar a la construcción de un mundo más justo y equitativo, sobre todo para pueblos que durante siglos han sido marginadas de la vida política y económica del país, que han sido desplazados y despojados de sus tierras por la explotación de recursos naturales como el caucho, la madera y el petróleo. A través de su trabajo de producción audiovisual y de educación, Radio Ucamara visibiliza la cultura, la memoria, los conocimientos y la vida del pueblo kukama, que habita el bajo Marañón.” </p>

		<p>
			<a href="http://radioucamara.net/quienes-somos/">http://radioucamara.net/quienes-somos/</a> <br>
			<a href="http://radio-ucamara.blogspot.com/">http://radio-ucamara.blogspot.com/</a>
		</p>

		<p class="mb-5"><a href="http://radioucamara.net/quienes-somos/"><img src="{{ asset('imagenes/logo_radio.png')}}" alt=""></a></p>

		<p><strong>Vicariato Apostólico San José del Amazonas</strong> es una jurisdicción misionera. Está ubicado en el nororiente peruano, en el departamento de Loreto, en plena selva amazónica. El Vicariato abarca un terreno grande, fronterizo y rural. No hay carreteras, todas las vías del transporte son los grandes ríos Amazonas, Napo, Putumayo e Yavarí y sus afluentes. Es terreno de extrema pobreza y por décadas abandonado por el estado. </p>
 
		<p>“El Vicariato tiene 16 puestos de misión en áreas rurales donde no hay infraestructura de servicios y pocos medios de comunicación, dispersos y lejanos de la única ciudad de la región, Iquitos. Tiene una sede administrativa para logística (compra y envío de víveres, materiales y productos inaccesibles en los caseríos), tesorería (para fondos del vicariato, así como para quienes no pueden acudir a bancos), contabilidad y administración (trámites personales, botes, inmuebles), y tiene a su cargo un Leprosorio (Casa San José en San Pablo), un hospital (Centro de Salud de Santa Clotilde) y 14 puestos de salud en el río Napo (Micro Red Napo), cuatro colegios (de Aucayo, Indiana, Santa Clotilde, Yanashi), dos internados (en Santa Clotilde y El Estrecho) y dos centros de rehabilitación para discapacitados (en Tamshiyacu e Indiana).”</p>

		<p><a href="https://www.facebook.com/Vicariato-Apost%C3%B3lico-de-Iquitos-102654741402216/">https://www.facebook.com/Vicariato-Apost%C3%B3lico-de-Iquitos-102654741402216/</a></p>

	</div>

	<div class="col-lg-5 text-info-page">

		<h6>Artistas Participantes:</h6>
		<p>Adriana Ciudad, Adriana Miyagusuku, Adrián Portugal, Aileen Gavonel, Alberto Patiño, Aldo Chaparro, Alejandro Jaime, Alessandra Rebagliati, Alexandra Bornhorst, Alexia Pedal, Alice Wagner, Alina Canziani, Allison Valladolid, Álvaro Icaza, Ana Cabrera, Ana Lucía García, Ana Teresa Barboza, Anamaria McCarthy, Andrea Canepa, Andrea Elera, Andrea Ferrero, Andrea Tregear, Andrés Argüelles Vigo, Andrés Chávez Alcorta, Ángel Valdéz, Angela Torrejón, Angie Bonino, Armando Andrade Tudela, Arturo Kameya, Astrid Soldevilla, Belén Gómez de la Torre, Benjamín Cieza, Berenice Diaz, Blas Isasi, Brus Rubio, C.J. Chueca, Camila Rodrigo, Camila Valdeavellano, Carla Higa, Carla Pando, Carlos León Xjimenez, Carlos Risco, Carlos Runcie Tanaka, Carmen Letts, Caro Arévalo, Carolina Casusol, Carolina Bazo, Carolina Cardich, Carolina Estrada Muñoz, Carolina Rieckhof, César Augusto Ramírez, Charo Noriega, Chio Flores, Christian Bendayán, Christian Luza, Christians Luna, Cindy Ramírez, Clara Best, Claudia Coca, Claudia Martínez, Cristina Flores, Cynthia Capriata, Daniel Barclay, Daniel Martínez, Daniel Roque, Daniel Tremolada, Dante Murillo, David Slocum, Delfina Nina Pinchi, Diana Riesco, Diego Lama, Diego Molina, Diego Paolo Ríos, Diego Vizcarra, Elena Damiani, Elena Tejada-Herrera, Eliana Otta, Elizabeth Vásquez, Emilia Curatola, Erik Bendix, Erika Vásquez, Eriván Phumpiú, Fátima Rodrigo, Fernando Nureña Cruz, Fidel, Fiorella Gonzáles Vigil, Flavia Gandolfo, Francisco Mariotti, Frank McCarthy, Gabriela Flores, Gala Berger, Genietta Varsi, Gianine Tabja, Gihan Tubbeh, Gilda Mantilla, Giorgio di Giovanni, Giuseppe Campuzano, GoctaLab (Gianna Olcese & Sergio Abugattas), Gonzalo Hernández, Graciela Arias, Gustavo Emé, Harry Chávez, Héctor Delgado, Hervé Miloux, Huanchaco, Huarac, Ibrain Cerebros, Ignacio Álvaro, Iliana Scheggia, Imayna Cáceres, Iosu Aramburu, Isabel Guerrero, Ishmael Randall-Weeks, Israel Tolentino, Ivana Ferrer, Ivonne Sheen, Jaime Higa, Jana Ugaz, Janine Soenens, Javi Vargas, Jean Paul Zelada, Jerry B. Martin, Jesús Cossio, Jesús Ruiz Durand, Jimena Castaños, Jimena Chávez Delion, Jimena Kato, Jonathan Castro, Jorge Cabieses, Jorge Flores, Jorge Lévano, Jorge Maita, José Ignacio Iturburu, José Luis Carranza, José María Denegri, José Vera, Juan Carlos Alvarado, Juan Diego Tobalina, Juan Javier Salazar, Juan José Barboza-Gubo, Juan Pablo Murrugarra, Juan Salas Carreño, Karen Macher, Karla Zorrilla, Katherine Fiedler, Kathryn Paucar, Kenji Nakama, Kim McLauchlan, Koening Johnson, Krizia Zurita, Kylla Piqueras, Lenin Auris, Leslie Spak, Lesly Egúsquiza, Liliana Takashima, Lorena Espelucín, Lorena Noblecilla, Lucia Coz, Lucia Monge, Lucy Angulo, Luis Enrique Zela-Koort, Luz María Bedoya, M Román, Marcel Velaochaga, Marco Carpio, Marco Pando, Margarita Checa, María Laso, Marialejandra Lozano, Maricel Delgado, Marinés Agurto, Mario Curasi, Marisabel Arias, Mauricio Delgado, Menta Days, Michelle Gleiser, Miguel Aguirre, Miguel Andrade, Miguel Ángel Polick, Miguel Cordero, Miguel Lescano, Mila Huby, Moico Yaker, Muriel Holguín, Nancy La Rosa, Nani Cárdenas, Natalia Pilo-Pais, Natalia Revilla, Natalia Villanueva, Nereida Apaza, Olenka Macassi, Olga Engelmann, Olinda Silvano, Omar Castro, Pablo Ravina, Paloma Álvarez, Paola Franco, Paola Torres, Patssy Higuchi, Philippe Gruenberg, Pierina Másquez, Piero Quijano, Rafael Freyre, Rafael Nolte, Raimond Chaves, Ralph Bauer, Raúl Chuquimia, Raúl Silva, Rhony Alhalel, Rita Ponce de León, Rocío Gomez, Romina Schulz, Ronny Camero, Rosamar Corcuera, Rossana López-Guerra, Rudolph Castro, Ryan Brown, Ryru Morioka, Sachiko Kobayashi, Salima Black, Salvador Velarde, Sandra Flores, Sandra Gamarra, Sandra Nakamura, Sandra Salazar, Santiago Quintanilla, Santiago Roose, Sebastián Cabrera, Seila Fernández Arconada, Sergio Verástegui, Sergio Zevallos, Shanery Obeso, Shila Acosta, Silvia Westphalen, Sofía Nakasone, Solange Adum, Solange Jacobs, Susana Torres, Sylvia Fernández, Tania Bedriñana, Tania Brun, Teresa Borasino, Teresa Carvallo, Teté Leguía, Úrsula Cogorno, Valentina Maggiolo, Valentino Sibadon, Valeria Ghezzi, Vered Engelhard, Verónica Luyo, Víctor Zuñiga, Violeta Quispe Yupari, Walter Astucuri, Wendy Weeks, Wilma Ehni, Wylly Medrano, Wynnie Mynerva, Ximena Garrido-Lecca, Yaniré-Artista Visual.</p>



	</div>
				
</div>

@endsection

