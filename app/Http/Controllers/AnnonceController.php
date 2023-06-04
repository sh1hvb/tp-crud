<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annonces=Annonce::all();
        return view("annonce.index", compact("annonces"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("annonce.create");
    }

    // //**
    //  * Store a newly created resource in storage.
    //  *  <th>ID</th>
    //                 <th>Titre</th>
    //                 <th>Description</th>
    //                 <th>type</th>
    //                 <th>ville</th>
    //                 <th>superficie </th>

    //                 <th>neuf </th>
    //                 <th>prix</th>
    //  *//
    public function store(Request $req)
    {
        $req->validate([
            'titre'=>'required|unique:annonces',

            'description'=>'required|max:100',
            'type'=>'required|in: "Appartement", "Maison", "Villa", 
            "Magasin" , "Terrain"',
            'ville'=>'required|validatePresent',
            'superficie'=>'required|max:20',
            'prix'=>'required|min:0',
        ],[
            'titre.unique'=>'titre already used',
            'description.max'=>'description is biig than 100',
            'type.in'=>'type is not in',
            'ville.alpha'=>'must be character '
        ]);
        $annonces=Annonce::create([
            'titre'=>$req->titre,
            'description'=>$req->description,
            'type'=>$req->type,
            'ville'=>$req->ville,
            'superficie'=>$req->superficie,
            'neuf'=>$req->neuf,
            'prix'=>$req->prix,
        ]);
        return redirect()->route('annonce.index');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Annonce $annonce)
    {
        return view('annonce.show',compact('annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Annonce $annonce)
    {
        return view('annonce.edit', compact('annonce'));
        // return $annonce;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Annonce $annonce)
    {
         $annonce->update($request->all());
        return redirect()->route('annonce.index')->with('succes',"updated succes");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Annonce $annonce)
    {
        $annonce->delete();
        return redirect()->route('annonce.index')->with('succes',"updated succes");
    }
}
