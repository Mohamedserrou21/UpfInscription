
<!DOCTYPE html>
<html>
<head>
	<title>Universite Prive De Fes</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
	<link rel="icon" type="image/png"   href= "{{ url('image/logo_upf.png') }}">
	
 <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
	<!----hero Section start---->

	<div class="hero">
		<nav>
			<img class="logo" src="{{ url('image/images.jpg') }}">
			<ul>
				<li><a href="#">Bienvenue sur notre site d'inscription</a></li>
				
			</ul>
			<a href="{{ route('login') }}" class="xtn">Adminstration</a>
			<a href="{{ route('login') }}" class="xtn">Deja Condidat</a>
			<a href="{{ route('register') }}" class="xtn">New condidat</a>
		</nav>

		<div class="content">
			
			</div>
		</div>
	</div>

	<!----About section start---->
	<section class="about">
		<div class="main">
			<img src= "{{ url('image/UPF.png') }}">
			<div class="about-text">
				<h2>About Us </h2>
				<h5>Vision<span>& mission</span></h5>
				<p>L’Université Privée de Fès doit répondre aux attentes de la Société : étudiants et parents, employeurs, pouvoirs publics et société civile dans son ensemble.
Au niveau des étudiants, l’attente se traduit par la pertinence de la formation mesurée essentiellement par l’indicateur de l’insertion professionnelle des diplômés (rendement externe).
Les employeurs potentiels quant à eux attendent des universités qu’elles assurent la disponibilité des compétences en formant des ressources humaines capables d’accompagner leur développement, avec rigueur et professionnalisme.
Egalement l’UPF a pour mission de consolider son statut d’établissement de recherche et d’innovation résolument tournée vers l’avenir et ouvert sur le monde.</p>
				<button type="button">More</button>
			</div>
		</div>
	</section>

	<!-----service section start----------->
	<div class="service">
		<div class="title">
			<h2> Etablissements</h2>
			
		</div>

		<div class="box">
			<div class="card">
				<img class="sogo" src= "{{ url('image/ESMAB.png') }}">
				<h5> Fès Business School</h5>
				<div class="pra">
					<p>Fès Business School innove constamment et procède aux adaptations nécessaires afin de proposer les programmes d’enseignement supérieur de haute qualité.</p>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div>

			<div class="card">
				<img class="sogo" src= "{{ url('image/esmm.png') }}">
				<h5>École Des Métiers De L'Architecture</h5>
				<div class="pra">
					<p>les étudiants en Architecture, en Urbanisme, en Paysage, en Design et Architecture d’Intérieur , en Génie civil et bâtiment peuvent se côtoyer, avoir des cours mutualisés.</p>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div>

			<div class="card">
				<img class="sogo" src="{{ url('image/FSI.png') }}">
				<h5>Faculté Des Sciences De L'Ingénieur</h5>
				<div class="pra">
					<p> la Faculté des Sciences de l’Ingénieur  composante de l’Université Privée de Fès, met en œuvre ses objectifs avec la stratégie globale de développement </p>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div>
		</div>
	</div>


	<section class="maps">
		<div class="mai">
			
			<div class="about-text">
				<img class="test" src="{{ url('image/logo-2018new2.png') }}">
				
				<p> l’UPF a obtenu la Reconnaissance de l’état. Ce qui signifie que tous ses diplômes sont équivalents aux diplômes de l’Etat. Par conséquent, tous nos lauréats peuvent participer aux concours du secteur public, s’insérer facilement sur le marché du travail, et poursuivre leurs études doctorales au sein des établissements publics.</p>
				<h5><i class="fas fa-map-marker-alt"> <span> : </span></i> Lotissement Quaraouiyine Route Ain Chkef</h5>
				<h5><i class="fas fa-phone-alt"> <span> : </span></i> +212 535 610 320 </h5>
				<h5><i class="fas fa-paper-plane"><span> : </span></i>info@upf.ac.ma</h5>
				
			</div>
			<a href="https://www.google.co.ma/maps/place/Universit%C3%A9+Priv%C3%A9e+de+F%C3%A8s/@34.007046,-5.01653,15z/data=!4m5!3m4!1s0x0:0xf416dca6543e92e5!8m2!3d34.007046!4d-5.01653"><img src= "{{ url('image/maps.png') }}"></a>
			
		</div>
	</section>

	<!------footer start--------->
	<footer>
		<img class="togo" src="{{ url('image/logo-2018new2.png') }}">
		<p>Première Université Privée à Fès à avoir obtenu le statut de la Reconnaissance par l’Etat en mai 2018, l’UPF délivre désormais des diplômes automatiquement équivalents aux diplômes de l’Etat. Elle œuvre depuis 2006 à offrir des formations d’excellence dans les métiers d’avenir.</p>
		<div class="social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
		<p class="end">CopyRight By Universite Prive De fes</p>
	</footer>
	
</body>
</html>