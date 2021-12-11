<!DOCTYPE html>


<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Université privé de fes  </title>
    <link rel="stylesheet" href="{{ url('css/admission.css') }}">
    <link rel="icon" type="image/png"   href= "{{ url('image/logo_upf.png') }}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body >


  <div class="container">

    <div class="title">Mon cursus scolaire Etape (2/2)</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <label for="1">Inserez vous votre image :</label><br>
            <button class="contenedor-btn-file">
    <i class="fas fa-file"></i>
    photo de Profil
    <label for="btn-file"></label>
    <input type="file" name=" profil" id="btn-file" required>
</button>
          </div>
          <div class="input-box">
            <label for="1">Importer Votre Bac Içi :</label><br>
            <button class="contenedor-btn-file">
    <i class="fas fa-file"></i>
    Importer votre bac
    <label for="btn-file"></label>
    <input type="file" name="bac" id="btn-file" required>
</button>
          </div>
          <div class="input-box">
            <label for="1">Importer Vos relever de note</label><br>
            <button class="contenedor-btn-file">
    <i class="fas fa-file"></i>
    Import relever de note
    <label for="btn-file"></label>
    <input type="file" name="bulletin" id="btn-file" required>
</button>
          </div>
          <div class="input-box">
            <label for="1">Inserer vos diplomes :</label><br>
            <button class="contenedor-btn-file">
    <i class="fas fa-file"></i>
    Importer Vos diplomes
    <label for="btn-file"></label>
    <input type="file" name="diplome" id="btn-file" required>
</button>
          </div>
          <div class="input-box">
            <label for="1">Photocopie CIN Ou Passeport:</label><br>
            <button class="contenedor-btn-file">
    <i class="fas fa-file"></i>
    Importer CIN Copie
    <label for="btn-file"></label>
    <input type="file" name="diplome" id="btn-file">
</button>
          </div>
          <div class="input-box">
            <span class="details">Entrer Votre Numero:</span>
            <input  name="email" style="border-color:  #b11b81;" type="text" placeholder="Telephone" required>
          </div>
          <div class="input-box">
            <span class="details">Entrer Votre Adress Email :</span>
            <input  name="email" style="border-color:  #b11b81;" type="text" placeholder="Adress Email" required>
          </div>
        </div>
          

          
		   
        <div class="button">
          <input name="register" type="submit" value="Postuler Mon dossier"> 
			
			
			
			
			
        </div>
		  
		  
      </form>
    </div>
  </div>

</body>
</html>
