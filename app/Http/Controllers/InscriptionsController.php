<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;


class InscriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       
       return view('inscriptions.index'); 
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //faire rentre les infos dans la db
        $request->validate([
            'nom' => 'required',
            'email'=> 'required',
            'pass'=> 'required'

        ]);
         //creation d une nouvelle table dans la base de donnee
            Inscription::create($request->all());
          //rediriger l utilisateur and envoyer un message
          return redirect()->route('inscriptions.index')->with('success','creation du compte avec success');
    }
}
