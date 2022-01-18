@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="Inscription/create" class="btn btn-primary">Ajouter un condidat</a>
<a href="/signalisation" class="btn btn-primary">Voir les declarations</a>
<a href="{{ route('home') }}"class="btn btn-secondary">Exit</a>

<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">niveau_scolaire_actuelle</th>
      <th scope="col">annee_bac</th>
      <th scope="col">diplome</th>
      <th scope="col">ville</th>
      <th scope="col">filiere_choisi</th>
      <th scope="col">option_bac</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($Inscription as $articulo)
    <tr>
        <td>{{$articulo->id}}</td>
        <td>{{$articulo->niveau_scolaire_actuelle}}</td>
        <td>{{$articulo->annee_bac}}</td>
        <td>{{$articulo->diplome}}</td>
        <td>{{$articulo->ville}}</td>
        <td>{{$articulo->filiere_choisi}}</td>
        <td>{{$articulo->option_bac}}</td>
        <td>
         <form action="{{ route('Inscription.destroy',$articulo->id) }}" method="POST">
          <a href="/Inscription/{{$articulo->id}}/edit" class="btn btn-info">Edit</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
         </form>          
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
