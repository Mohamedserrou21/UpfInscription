@extends('layouts.plantillabase')

@section('contenido')
<h2>Modifier l'admission</h2>

<form action="/Inscription/{{$articulo->id}}" method="POST">
    @csrf    
    @method('PUT')
    <div class="mb-3">
    <label for="" class="form-label">niveau_scolaire_actuelle</label>
    <input id="codigo" name="niveau_scolaire_actuelle" type="text" class="form-control" value="{{ $articulo->niveau_scolaire_actuelle}}" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Annee obtention bac</label>
    <input id="descripcion" name="annee_bac" type="text" class="form-control"  value="{{ $articulo->annee_bac}}"  tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">diplome</label>
    <input id="cantidad" name="diplome" type="text" class="form-control"   value="{{ $articulo->diplome}}" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">ville</label>
    <input id="precio" name="ville" type="text" step="any"  value="{{ $articulo->ville}}" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">filiere choisi :</label>
    <input id="precio" name="filiere_choisi" type="text" step="any"  value="{{ $articulo->filiere_choisi}}"class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">option_bac </label>
    <input id="precio" name="option_bac" type="text" step="any"  value="{{ $articulo->option_bac}}"class="form-control" tabindex="3">
  </div>
  <a href="/Inscription" class="btn btn-secondary">Cancel</a>
  <button type="submit" class="btn btn-primary">save</button>
</form>

@endsection
