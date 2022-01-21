<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

use App\Mail\VisitorContact;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ArticuloController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Vista index()';
        $articulos = Articulo::all();
        return view('articulo.index')->with('Inscription',$articulos);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        
            return view('articulo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulos = new Articulo();
       
        $articulos->niveau_scolaire_actuelle = $request->get('niveau_scolaire_actuelle');
        $articulos->annee_bac= $request->get('annee_bac');
        $articulos->diplome = $request->get('diplome');
        $articulos->ville= $request->get('ville');
        $articulos->filiere_choisi = $request->get('filiere_choisi');
        $articulos->option_bac = $request->get('option_bac');
        $articulos->save();

   
        if(Auth::user()->hasRole('admin')){

            return redirect('Inscription/create');
        }else{
            return redirect('Inscription/create');
        
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $articulo = Articulo::find($id);
         return view('articulo.edit')->with('articulo',$articulo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articulo = Articulo::find($id);
        $articulo->niveau_scolaire_actuelle = $request->get('niveau_scolaire_actuelle');
        $articulo->annee_bac= $request->get('annee_bac');
        $articulo->diplome = $request->get('diplome');
        $articulo->ville= $request->get('ville');
        $articulo->filiere_choisi = $request->get('filiere_choisi');
        $articulo->option_bac = $request->get('option_bac');
        $articulo->save();
        
        if(Auth::user()->hasRole('admin')){

            return redirect('Admin/Inscription');
        } else{
            return redirect('/Inscription');
        
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::find($id);        
        $articulo->delete();

        if(Auth::user()->hasRole('admin')){

            return redirect('Admin/Inscription');
        } else{
            return redirect('/Inscription');
        
        }
    }

    
}
