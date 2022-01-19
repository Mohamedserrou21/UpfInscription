
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Universite Prive De Fes</title>
	<link rel="icon" type="image/png" href= "{{ url('image/images.jpg') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('css/formLogin.css') }}">
	
	<link rel="stylesheet" type="text/css" href="{{ url('css/barre.css') }}">
	
</head>
<body>
	
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

        
      
     
  
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
            <form method="" action="">
                    <h2 class="text-center"><img src="{{ url('image/logo_upf.png') }}"></h2>
					
                    <p class="text-center">Universite Prive De Fes</p>
                   
                   
                        <?php
                    
                    ?>
                   


   
<div class="form-group">
        <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

       
            
       
    </div>



   

<div class="form-group">
        <input id="password" placeholder="Enter your password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

       
            
    </div>
  

<div class="row mb-3">
    <div class="col-md-6 offset-md-4">
        
    </div>
</div>


<div class="form-group">
        <button class="form-control button" type="button" class="btn btn-primary"  onclick="check()">
            Login
        </button>

       
    </div>

                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
  	function check() 
  	{
  		email = document.getElementById('email').value;
  	    password = document.getElementById('password').value;
  		if ( email == "upf@ac.ma" && password == "upf")
  		     {
              alert ("Login successfully");
              window.location = "/Inscription";
              return false;
             }
        else
        {
        	alert ("Entrez vos infos correct SVP !! ");
        	window.location = "{{ url('/ADMIN') }}";
        }
  	}
  	
  </script>
</body>
</html>