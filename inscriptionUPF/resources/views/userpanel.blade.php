<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="icon" type="image/png"   href= "{{ url('image/logo_upf.png') }}">
	
	<link rel="stylesheet" href= "{{ url('css/userdashboard.css') }}">

	<title>Universite Prive De Fes</title>
</head>
<body>


	
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<img class="logo" src= "{{ url('image/images.jpg') }}">
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">{{ Auth::user()->name }}</span>
					
				</a>
			</li>
			
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Declarer Une signalisation</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Boite de Reception</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Information Personnel</span>
				</a>
			</li>
			
		</ul>
		<ul class="side-menu">
			
			<li>
				<a href="{{ route('logout') }}" class="logout"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
				   
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text" >Logout</span>
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
			</li>
		</ul>
	</section>
	
	<section id="content">
		
		<nav>
			
			
			<form action="#">
				<div class="form-input">
					
					
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			
			<a href="#" class="profile">
				<img src=  "{{ url('image/FSI.png') }}" alt="mo">
			</a>
		</nav>
		
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Campus UPF</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Universite Prive De Fes</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Welcome {{ Auth::user()->name }}</a>
						</li>
					</ul>
				</div>
				<a href="{{ route('pre_inscription') }}" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Postuler Votre Dossier</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>Reconnaissance</h3>
						<p> 1er universite a fes reconnue par l'etat</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>Commuication</h3>
						<p>Plus Que 10 000 Etudiant</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>Formation</h3>
						<p>Formation satifait au monde du travail entier</p>
					</span>
				</li>
			</ul>


			
				
			</div>
		</main>
		
	</section>
	

	<script src="{{ url('css/script.js') }}"></script>
</body>
</html>