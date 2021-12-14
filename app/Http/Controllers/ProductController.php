<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       $users=User::first()->paginate();
       return view('products.index',compact('users')); 
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
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
            'libelle' => 'required',
            'quantite_minimal'=> 'required',
            'quantite_stock'=> 'required'

        ]);
         //creation d une nouvelle table dans la base de donnee
            User::create($request->all());
          //rediriger l utilisateur and envoyer un message
          return redirect()->route('products.index')->with('success','produit creer avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $product
     * @return \Illuminate\Http\Response
     */
    public function show(User  $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(User $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $product)
    {
        //faire rentre les infos dans la db
        $request->validate([
            'libelle' => 'required',
            'quantite_minimal'=> 'required',
            'quantite_stock'=> 'required'

        ]);
         //c est la requete
         $product->update($request->all());
          //rediriger l utilisateur and envoyer un message
          return redirect()->route('products.index')->with('success','informations mise a jour avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $product)
    {
        //delete info
        $product->delete();
          //rediriger l utilisateur vers la page index.blade.php
       return redirect()->route('products.index');
    }
}
