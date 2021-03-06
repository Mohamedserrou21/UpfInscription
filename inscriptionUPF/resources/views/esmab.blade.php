
<!DOCTYPE html>
<html>
<head>
	<title>Universite Prive De Fes</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/esmab.css') }}">
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
			<a href="Admin/Inscription" class="xtn">Administration</a>
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
			<img src= "{{ url('image/esmab2.png') }}">
			<div class="about-text">
				<h2>ESMAB</h2>
				<h5>École Supérieure Des Métiers<span>De L'Architecture Et Du Bâtiment</span></h5>
				<p>Aujourd’hui le secteur de la construction, souffre d’un cloisonnement entre les différents spécialistes (ingénieurs, architectes, urbanistes, paysagistes, constructeurs, …etc). Le décloisonnement de ce secteur d’activité, crucial pour l’économie du Maroc, ne peut pas se faire du jour au lendemain et la réticence au changement ne peut que porter préjudice au secteur. En ce sens, le leitmotiv de l’ESMAB est d’initier ce décloisonnement dès la formation des professionnels de ce secteur. Ainsi, les étudiants en Architecture, en Urbanisme, en Paysage, en Design et Architecture d’Intérieur, en Génie civil et bâtiment peuvent se côtoyer, avoir des cours mutualisés, se compléter sur des projets communs, afin de mieux se connaître et de se préparer au monde professionnel.

</p>
				<button type="button">Admission</button>
			</div>
		</div>
	</section>

	

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