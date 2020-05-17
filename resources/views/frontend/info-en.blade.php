@extends('frontend.layout')

@section('content')

<div class="row">
	<div class="col-lg-7 text-info-page pr-5">
		<p><strong>Drawings for the Amazon,</strong> inspired by the Brazilian project <a href="https://300desenhos.art/info">300 Desenhos,</a> brings together a volunteer group of visual artists with the aim of helping the indigenous Amazonian communities in Peru, which are going through very difficult times because of the COVID-19. <strong>All the funds raised will be directed to three social organizations that are playing a decisive role in communication, assistance and help in the health emergency: the Apostolic Vicariate of Iquitos, Ucamara Radio in Nauta, and Coshikox (Shipibo-Konibo and Xetebo Council) in Pucallpa.</strong></p>
 
<p>More than 250 artists, of different professional stages and ages, have donated more than 400 works with the following specification: an original work, unpublished or not, in A4 format (approximate). Although the majority of works are drawings, textiles, photographs, digital prints and engravings are also included. This fascinating group of works will be distributed among the project's donors. The one-time donation fee is US$ 150.</p>
 

<h6>HOW CAN YOU SUPPORT?</h6>

<p>To contribute, access <a href="{{ route('donar-en', 'en')}}">DONATE NOW,</a> a link that will redirect you to the Mercado Pago page, a completely safe and secure pay service. Payment can be made with a debit or credit card. After completing your contribution, you will receive an email confirming your payment (confirmation can take between 24 and 72 hours). If you do not receive the email we ask you to check your spam folder. After that confirmation, you will receive a link that will take you to the automated system in a raffle format that randomly selects the work for you. <strong>For every $150 fee donated you will receive one work. People can contribute as many times as they want.</strong></p>
 
<p>The works will be delivered to donors in Peruvian territory during the second half of the year, starting in September 2020, when security conditions allow it. </p>

<p>For buyers outside of Peru: After processing your address we will contact you to send costs of shipping options.</p>
 
<p>We hope that through the generosity of the artistic community and art lovers in general we can contribute to actively improve the urgent situation that the indigenous communities in Peru are going through.</p>


<p>We greatly appreciate the generous support of all the artists.</p>
 
<p>This project is supported by the volunteer work of those involved. The organizing team is made up of Christian Bendayán, Nancy La Rosa, Miguel A. López, Eliana Otta, Juan Salas; the coordination and communication team is made up of Mariela Arce, Jimena Chávez Delion, Claudia Coca, Deborah Delgado, Giselle Girón, Ivonne Sheen, Jana Ugaz; the design, programming and web team is made up of José Carlos Mariátegui, Natalia Revilla, Fernando Ramos. We are grateful for the dialogues, advice and collaboration of Gala Berger, Manuel Cornejo, Sairah Espinoza, Padre Miguel Fuertes, Sharon Lerner, Ronald Suárez, Olinda Silvano, Leonardo Tello Imaina, Ariel Tonglet, and the Amazon Center for Anthropology and Practical Application (CAAAP).</p>
 
<p>Special thanks to Fernanda Brenner, Ariel Tonglet and the <a href="https://300desenhos.art/info">300 Desenhos</a> project team for freely and generously providing us with the web source code and the algorithm to develop this project. </p>


<h6>About the organizations supported</h6>
 
<p><strong>Coshikox (Shipibo-Konibo and Xetebo Council),</strong> founded in the city of Pucallpa in 2009, is a unitary, autonomous, representative, normative indigenous organization that promotes the sustainable development of the Shipibo-Konibo and Xetebo people. Based on economic development with identity, it seeks to achieve the necessary conditions for good living and thus lay the foundations for future indigenous self-government.</p>
 
<p>“The traditional cultural way of life, that is to say, the good life of the indigenous peoples, has suffered negative impacts and irreversible transgressions, among other factors, due to the current of globalization and the interference of the capitalist or monetary economy in almost all the Shipibo-Konibo communities. The traditional productive activities (indigenous economy) above all doing only what is indispensable remains more at local level. Nevertheless this modality now has very serious limitations in relation to the prevailing capitalist or monetary economy. The territory and their natural environment (communal forests) are no longer exactly our natural market, our pharmacy, and above all our vision of the Shipibo cultural universe faces serious difficulties.”</p>
 
<p><a href="http://coshikox.org/">http://coshikox.org/</a></p>

		<p class="mb-5"><a href="http://coshikox.org/"><img src="{{ asset('imagenes/logo_coshikox.png')}}" alt=""></a></p>
 

<p><strong>Ucamara Radio</strong> is located at the confluence of the Ucayali and Marañon rivers, the great tributaries of the Amazon River in Peru’s Amazonian region. Founded in 1992 as part of the Institute for the Social Promotion of the Amazon (IPSA), of the Apostolic Vicariate of Iquitos, it reaches listeners in more than 40 indigenous and riverside communities (Kichuas, Wampis, Achuar, Urarina, Omurano, Shawi, Omagua, Matses, Shipibos, among others), as well as the city of Nauta, which is the destination of many families and young people who migrate from their communities of origin in search of employment and education. Its mission is to rescue the Kukama culture and language and to socialize information to reinforce indigenous identity and strengthen communities that are facing strong and sudden changes and processes.  </p>
 
 <p>“With its programming, it seeks to contribute to the construction of a more just and equitable world, above all for peoples who, for centuries, have been marginalized from the political and economic life of the country, who have been displaced and dispossessed of their lands by the exploitation of natural resources such as rubber, wood and oil. Through its audiovisual production and educational work, Ucamara Radio makes visible the culture, memory, knowledge and life of the Kukama people, who inhabit the lower Marañón.”</p>
 
<p>
			<a href="http://radioucamara.net/quienes-somos/">http://radioucamara.net/quienes-somos/</a> <br>
			<a href="http://radio-ucamara.blogspot.com/">http://radio-ucamara.blogspot.com/</a>
		</p>

		<p class="mb-5"><a href="http://radioucamara.net/quienes-somos/"><img src="{{ asset('imagenes/logo_radio.png')}}" alt=""></a></p>
 
<p><strong>The Apostolic Vicariate of St. Joseph of the Amazon</strong> is a missionary jurisdiction. It is located in the northeast of Peru, in the Loreto region, in the heart of the Amazon jungle. The Vicariate covers a large, frontier and rural area. There are no roads; all the transport routes are the great Amazon, Napo, Putumayo and Yavarí rivers and their tributaries. It is a land of extreme poverty and has been abandoned by the state for decades.</p>
 
<p>"The Vicariate has 16 mission posts in rural areas where there is no service infrastructure and few means of communication, scattered and far from the only city in the region, Iquitos. It has an administrative headquarters for logistics (purchase and shipment of food, materials and products that are inaccessible in the villages), treasury (for the funds of the Vicariate, as well as for those who cannot go to banks), accounting and administration (personal matters, boats, buildings), and it is in charge of a Leprosarium (San José House in San Pablo), a hospital (Santa Clotilde Health Center) and 14 health posts on the Napo River (Napo Micro Network), four schools (in Aucayo, Indiana, Santa Clotilde, Yanashi), two boarding schools (in Santa Clotilde and El Estrecho) and two rehabilitation centers for the disabled (in Tamshiyacu and Indiana).”</p>
 
<p><a href="https://www.facebook.com/Vicariato-Apost%C3%B3lico-de-Iquitos-102654741402216/">https://www.facebook.com/Vicariato-Apost%C3%B3lico-de-Iquitos-102654741402216/</a></p> 

	</div>

	<div class="col-lg-5 text-info-page pl-lg-5">
		

		<h6>Participating artists: </h6>
<p>Adriana Ciudad, Adriana Miyagusuku, Adrián Portugal, Aileen Gavonel, Alberto Patiño, Aldo Chaparro, Alejandro Jaime, Alessandra Rebagliati, Alexandra Bornhorst, Alexia Pedal, Alice Wagner, Alina Canziani, Allison Valladolid, Álvaro Icaza, Ana Cabrera, Ana Lucía García, Ana Teresa Barboza, Anamaria McCarthy, Andrea Canepa, Andrea Elera, Andrea Ferrero, Andrea Tregear, Andrés Argüelles Vigo, Andrés Chávez Alcorta, Ángel Valdéz, Angela Torrejón, Angie Bonino, Armando Andrade Tudela, Arturo Kameya, Astrid Soldevilla, Belén Gómez de la Torre, Benjamín Cieza, Berenice Diaz, Blas Isasi, Brus Rubio, C.J. Chueca, Camila Rodrigo, Camila Valdeavellano, Carla Higa, Carla Pando, Carlos León Xjimenez, Carlos Risco, Carlos Runcie Tanaka, Carmen Letts, Caro Arévalo, Carolina Casusol, Carolina Bazo, Carolina Cardich, Carolina Estrada Muñoz, Carolina Rieckhof, César Augusto Ramírez, Charo Noriega, Chio Flores, Christian Bendayán, Christian Luza, Christians Luna, Cindy Ramírez, Clara Best, Claudia Coca, Claudia Martínez, Cristina Flores, Cynthia Capriata, Daniel Barclay, Daniel Martínez, Daniel Roque, Daniel Tremolada, Dante Murillo, David Slocum, Delfina Nina Pinchi, Diana Riesco, Diego Lama, Diego Molina, Diego Paolo Ríos, Diego Vizcarra, Elena Damiani, Elena Tejada-Herrera, Eliana Otta, Elizabeth Vásquez, Emilia Curatola, Erik Bendix, Erika Vásquez, Eriván Phumpiú, Fátima Rodrigo, Fernando Nureña Cruz, Fidel, Fiorella Gonzáles Vigil, Flavia Gandolfo, Francisco Mariotti, Frank McCarthy, Gabriela Flores, Gala Berger, Genietta Varsi, Gianine Tabja, Gihan Tubbeh, Gilda Mantilla, Giorgio di Giovanni, Giuseppe Campuzano, GoctaLab (Gianna Olcese & Sergio Abugattas), Gonzalo Hernández, Graciela Arias, Gustavo Emé, Harry Chávez, Héctor Delgado, Hervé Miloux, Huanchaco, Huarac, Ibrain Cerebros, Ignacio Álvaro, Iliana Scheggia, Imayna Cáceres, Iosu Aramburu, Isabel Guerrero, Ishmael Randall-Weeks, Israel Tolentino, Ivana Ferrer, Ivonne Sheen, Jaime Higa, Jana Ugaz, Janine Soenens, Javi Vargas, Jean Paul Zelada, Jerry B. Martin, Jesús Cossio, Jesús Ruiz Durand, Jimena Castaños, Jimena Chávez Delion, Jimena Kato, Jonathan Castro, Jorge Cabieses, Jorge Flores, Jorge Lévano, Jorge Maita, José Ignacio Iturburu, José Luis Carranza, José María Denegri, José Vera, Juan Carlos Alvarado, Juan Diego Tobalina, Juan Javier Salazar, Juan José Barboza-Gubo, Juan Pablo Murrugarra, Juan Salas Carreño, Karen Macher, Karla Zorrilla, Katherine Fiedler, Kathryn Paucar, Kenji Nakama, Kim McLauchlan, Koening Johnson, Krizia Zurita, Kylla Piqueras, Lenin Auris, Leslie Spak, Lesly Egúsquiza, Liliana Takashima, Lorena Espelucín, Lorena Noblecilla, Lucia Coz, Lucia Monge, Lucy Angulo, Luis Enrique Zela-Koort, Luz María Bedoya, M Román, Marcel Velaochaga, Marco Carpio, Marco Pando, Margarita Checa, María Laso, Marialejandra Lozano, Maricel Delgado, Marinés Agurto, Mario Curasi, Marisabel Arias, Mauricio Delgado, Menta Days, Michelle Gleiser, Miguel Aguirre, Miguel Andrade, Miguel Ángel Polick, Miguel Cordero, Miguel Lescano, Mila Huby, Moico Yaker, Muriel Holguín, Nancy La Rosa, Nani Cárdenas, Natalia Pilo-Pais, Natalia Revilla, Natalia Villanueva, Nereida Apaza, Olenka Macassi, Olga Engelmann, Olinda Silvano, Omar Castro, Pablo Ravina, Paloma Álvarez, Paola Franco, Paola Torres, Patssy Higuchi, Philippe Gruenberg, Pierina Másquez, Piero Quijano, Rafael Freyre, Rafael Nolte, Raimond Chaves, Ralph Bauer, Raúl Chuquimia, Raúl Silva, Rhony Alhalel, Rita Ponce de León, Rocío Gomez, Romina Schulz, Ronny Camero, Rosamar Corcuera, Rossana López-Guerra, Rudolph Castro, Ryan Brown, Ryru Morioka, Sachiko Kobayashi, Salima Black, Salvador Velarde, Sandra Flores, Sandra Gamarra, Sandra Nakamura, Sandra Salazar, Santiago Quintanilla, Santiago Roose, Sebastián Cabrera, Seila Fernández Arconada, Sergio Verástegui, Sergio Zevallos, Shanery Obeso, Shila Acosta, Silvia Westphalen, Sofía Nakasone, Solange Adum, Solange Jacobs, Susana Torres, Sylvia Fernández, Tania Bedriñana, Tania Brun, Teresa Borasino, Teresa Carvallo, Teté Leguía, Úrsula Cogorno, Valentina Maggiolo, Valentino Sibadon, Valeria Ghezzi, Vered Engelhard, Verónica Luyo, Víctor Zuñiga, Violeta Quispe Yupari, Walter Astucuri, Wendy Weeks, Wilma Ehni, Wylly Medrano, Wynnie Mynerva, Ximena Garrido-Lecca, Yaniré-Artista Visual.</p>

	</div>
				
</div>

@endsection

