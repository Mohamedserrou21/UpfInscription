<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Université privé de fes  </title>
    <link rel="stylesheet" href="{{ url('css/form.css') }}">
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
	
	#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}
	</style>
   </head>
   <body>
   
		
	
		
   <div class="container">
   <div id="error_message">
     
     </div>
<div class="title">Mon cursus scolaire Etape (1/2)</div>
<div class="content">
<form id="myform" onsubmit = "return validate();" action="/Inscription" method="POST">
    @csrf
    <div class="user-details">
   
  <div class="input-box">
    <label for="">Niveau Scolaire Actuelle :</label><br>
    <input id="niveau" name="niveau_scolaire_actuelle" type="text" placeholder=" niveau scolaire actuelle"  tabindex="1"  >    
  </div>
  <div class="input-box">
    <label for="">Annee obtention bac :</label><br>
    <input id="anneebac" name="annee_bac" placeholder=" Annee obtention bac" type="text" tabindex="2" >
  </div>
  <div class="input-box">
    <label for="" >Diplome : </label><br>
    <input id="diplome" name="diplome" type="text" placeholder="Diplome"   tabindex="3" >
  </div>
  <div class="input-box">
    <label for="">Ville :</label><br>
    <input id="ville" name="ville" type="text" step="any" value=""  placeholder=" Entrez Votre Ville"  tabindex="3" >
  </div>
  <div class="input-box">
    <label for="">Filiere Choisi : </label><br>
    <input id="filiere" name="filiere_choisi" type="text" step="any" value=""  placeholder=" Filiere Choisi"  tabindex="3" >
  </div>
  <div class="input-box">
    <label for="" class="form-label">Option Bac :  </label><br>
    <input id="option" name="option_bac" type="text" step="any" value=""  placeholder=" Option Bac" tabindex="3"  >
  </div>
 
  </div>
  <div class="button">
   
  <input type="submit" value="Valider"></input> 
  <span> <a href="/home">Return to Home Page?</a> </span>
  
  </div>
 
 
  </div>
  
  

</form>
<script >
	




    // Regex Pattern: /^[a-zA-Z][a-zA-Z0-9\-\_\.]+@[a-zA-Z0-9]{2,}\.[a-zA-Z0-9]{2,}$/
function validate(){
	var societe = document.getElementById("niveau").value;
  var name = document.getElementById("diplome").value;
	var ville = document.getElementById("ville").value;
  var name = document.getElementById("option").value;
	var ville = document.getElementById("filiere").value;
	
	
	
  var secteur = document.getElementById("anneebac").value;
 
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
	if(niveau.length < 3){
    text = "Please Enter valide Niveau Scolaire";
    error_message.innerHTML = text;
    return false;
  }
  if(filiere.length < 3){
    text = "Please Enter valid Filiere Name";
    error_message.innerHTML = text;
    return false;
  }
	if(ville.length < 3){
    text = "Please Enter valid name ville";
    error_message.innerHTML = text;
    return false;
  }
	if(diplome.length < 5){
    text = "Please Enter valid diplome";
    error_message.innerHTML = text;
    return false;
  }
	
	
  if(option.length < 2){
    text = "Please Enter Correct Option bac";
    error_message.innerHTML = text;
    return false;
  }
  
	
  
  
  return true;
}
	
									  
	</script>

</body>
</html>
