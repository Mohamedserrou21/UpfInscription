<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	
	<link rel="stylesheet" href= "{{ url('css/dashboard.css') }}">

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
					<span class="text">Administration UPF</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Demande D'inscription</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Document d'admission</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Etudiant admis</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Gerer Les filiéres</span>
				</a>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
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
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Statistique UPF</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Organiser un Test</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>Nombre .....</h3>
						<p> Demande d'inscription</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>nombre....</h3>
						<p>Etudiant</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>test......</h3>
						<p>Date du test</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Demande d'isncription precedent</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Condidat</th>
								<th>Date D'inscription</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src=  "{{ url('image/FSI.png') }}">
									<p>UPF</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="{{ url('image/FSI.png') }}">
									<p>UPF</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">En attendant</span></td>
							</tr>
							<tr>
								<td>
								<img src= "{{ url('image/FSI.png') }}">
									<p>UPF</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">En cours</span></td>
							</tr>
							<tr>
								<td>
									<img src= "{{ url('image/FSI.png') }}">
									<p>UPF</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">En attendant</span></td>
							</tr>
							<tr>
								<td>
									<img src="{{ url('image/FSI.png') }}">
									<p>UPF</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		
	</section>
	

	<script src="{{ url('script/script.js') }}"></script>
</body>
</html>