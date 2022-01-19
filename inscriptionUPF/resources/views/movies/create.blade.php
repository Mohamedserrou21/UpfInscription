<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Université privé de fes  </title>
    <link rel="stylesheet" href="{{ url('css/form.css') }}">
    <link rel="icon" type="image/png"   href= "{{ url('image/logo_upf.png') }}">
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
     <div class="title">Declarer une signalisation</div>
     <div class="content">
        <form
            action="{{ route('signalisation.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf
            <div class="user-details">
               
                <div class="input-box">
                        <label for="title" class="col-sm-2 col-form-control"
                            >full name</label
                        ><br>
                      
                            <input
                                type="text"
                                name="title"
                                id="title"
                                
                                
                            />
                        
                    </div>
                    <div class="input-box">
                        <label for="genre" class="col-sm-2 col-form-control"
                            >Sujet</label
                        ><br>
                      
                            <select
                                name="genre"
                                id="genre"
                                
                            >
                                <option value="">Select sujet</option>
                                @if($genres)
                                @foreach($genres as $genre)
                                <option value="{{ $genre }}">{{ $genre }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="input-box">
                        <label
                            for="release_year"
                            class="col-sm-2 col-form-control"
                            >Message</label
                        ><br>
                        
                            <input
                                type="text"
                                name="release_year"
                                id="release_year"
                                
                            />
                        
                    </div>
                    <div class="input-box">
                      
                        
                    <button class="contenedor-btn-file">
    <i class="fas fa-file"></i>
    Ajouter un screen
    <label for="btn-file"></label>
    <input type="file" name="poster" id="btn-file" required>
</button>
                  
              </div>
                    </div>

                    
                   
                    <div class="button">
                        

                        
                            <input
                                type="submit"
                                name="submit"
                                id="submit"
                                value="submit"
                            >
                              
                            </button>
                            <span> <a href="{{route('acceuil')}}">Return to Home Page?</a> </span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
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
