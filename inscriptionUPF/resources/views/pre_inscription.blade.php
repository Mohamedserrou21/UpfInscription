

<!DOCTYPE html>


<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Université privé de fes  </title>
    <link rel="stylesheet" href="{{ url('css/form.css') }}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body >


  <div class="container">

    <div class="title">Mon cursus scolaire Etape (1/2)</div>
    <div class="content">
      <form action="{{url('pre_inscription')}}" method="get">
        @crsf
        <div class="user-details">
          <div class="input-box">
            <label for="1">Niveau d'étude actuelle :</label><br>
                <select  name="niveau_bac" id="1">
                <option value="a" selected>niveau Bac</option>
                <option value="b">Bac +1</option>
                <option value="c">Bac +2</option>
                <option value="d" >Bac +3</option>
			    <option value="e">Bac +4</option>
                <option value="f" >Bac +5</option>
                </select> 
          </div>
          <div class="input-box">
            <label for="1">École ou Faculté :</label><br>
                <select name="faculte" id="2">
                <option value="j" selected>FSI</option>
                <option value="h">ESMAB</option>
                <option value="i">FBS</option>
                </select> 
          </div>
          <div class="input-box">
            <label for="1">Année d'obtention du bac :</label><br>
                <select name="annee_bac" id="3">
                <option value="g" selected>2020 / 2021</option>
                <option value="k">2019 / 2020</option>
                <option value="l">2018 / 2019</option>
                <option value="m" >2017 / 2018</option>
			    <option value="n">2016 / 2017</option>
                <option value="o">2015 / 2016</option>
				<option value="p">Autre</option>
                </select> 
          </div>
          <div class="input-box">
            <label for="1">Option du bac :</label><br>
                <select name="bac" id="4">
                <option value="q" selected>Bac Sciences économiques </option>
                <option value="r">Bac Techniques de gestion et comptabilité </option>
                <option value="s">Bac Sciences mathématiques A Lycée Maroc </option>
                <option value="t" >SVT  </option>
			    <option value="u" >Bac Sciences et Technologies Mécaniques   </option>
				<option value="v" >Bac Sciences Mathématiques B </option>
                <option value="w" >Bac Sciences Physiques   </option>
	            <option value="x" >Bac Sciences et Technologies Électriques   </option>
                </select> 
          </div>
          <div class="input-box">
            <label for="1">Diplome obtenu ou année en cour de préparation :</label><br>
                <select name="diplome" id="5">
                <option value="y" selected>bac</option>
                <option value="z">bac +1</option>
                <option value="aa">bac +2</option>
                <option value="bb" >Licence </option>
                </select> 
          </div>
          <div class="input-box">
            <label for="1">Année d'obentention du diplome :</label><br>
                <select name="dimplome_annee" id="6">
                <option value="cc" selected>2020 / 2021</option>
                <option value="dd">2019 / 2020</option>
                <option value="ee">2018 / 2019</option>
                <option value="ff" >2017 / 2018</option>
			    <option value="gg">2016 / 2017</option>
                <option value="hh">2015 / 2016</option>
				<option value="ii">Autre</option>	
                </select> 
          </div>
          <div class="input-box">
            <label for="1">Ville diplome :</label><br>
                <select name="ville" id="ville">
                <option value="jj" selected>Tanger - Tétouan - Al Hoceima</option>
                <option value="kk">L'Oriental</option>
                <option value="ll">Fès - Meknès</option>
                <option value="mm" >Rabat - Salé - Kénitra </option>
				<option value="nn">Beni Mellal - Khénifra</option>
				<option value="oo">Casablanca - Settat</option>
				<option value="pp">Drâa - Tafilalet</option>
				<option value="qq">Marrakech - Safi</option>
				<option value="rr">Souss -Massa</option>
				<option value="ss">Guelmim - Oued Noun</option>
				<option value="tt">Laâyoune - Saguia al Hamra</option>
				<option value="uu">Dakhla - Oued Ed-Dahab</option>
                </select> 
          </div>

          <div class="input-box">
            <label for="1"> choisissez votre Filiere:</label><br>
                <select name="dimplome_annee" id="6">
                <option value="cc" selected>-------FSI----</option>
                <option value="cc" selected>Genie Informatique</option>
                <option value="dd">genie cevil</option>
                <option value="ee">systeme embarque</option>
                <option value="ff" ><option value="cc" selected>-------FBS----</option></option>
                <option value="cc" selected>Management</option>
                <option value="cc" selected>Finance</option>
                <option value="dd">comptabilité</option>
                <option value="ee">-----ESMAB------</option>
                <option value="ee">Architecture</option>
                <option value="ee">design interieure
                  
                </option>
                
                </select> 
          </div>
        </div>
		   
        <div class="button">
          <input name="register" type="submit" value="Continue L'admission"> 
			
			
			
			
			
        </div>
		  
		  
      </form>
    </div>
  </div>

</body>
</html>
