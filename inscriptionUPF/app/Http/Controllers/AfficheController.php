<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preinscription;
class AfficheController extends Controller
{
    public function acceuil(){
        return view('acceuil');
    }

    public function pre_inscription(){
        return view('pre_inscription');
    }

    public function adminpanel(){
        return view('adminpanel');
    }

    public function admission(){
        return view('admission');
    }

    public function create(){
        return view('pre_inscription');
    }
    
    public function store(Request $request){
        $preinscription = new Preinscription();
        $preinscription->niveauBac=$request->input('niveau_bac');
        $preinscription->anneeobtentionbac=$request->input('annee_bac');
        $preinscription->diplome=$request->input('diplome');
        $preinscription->ville=$request->input('ville');
        $preinscription->faculte=$request->input('faculte');
        $preinscription->save();
    }
}
