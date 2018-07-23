<?php

namespace App\Http\Controllers;

use App\Miss;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MissController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $misses = Miss::orderBy('id','asc')->paginate(30);
        return view('misses.index', ['misses' => $misses]);

    }

    /**
     * Mets le nombre de votes pour une candidate d'une unité
     *
     * @param  \App\Miss  $miss
     * @return \Illuminate\Http\Response
     */



     public function classement()
     {
       $misses = Miss::orderBy('nombre_de_votes','desc')->paginate(30);
       return view('misses.classement', ['misses' => $misses]);
     }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('misses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $miss=Miss::create($request->all());
      $miss->nombre_de_votes = $miss->votes->count();
      $miss->save();


      if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('/img/photos/' . $filename));
        $miss->image = $filename;
        $miss->save();
    }

      return back()->with('status', 'Miss créée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Miss  $miss
     * @return \Illuminate\Http\Response
     */
    public function show(Miss $miss)
    {
        return view('misses.show',['miss' => $miss]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Miss  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Miss $miss)
    {
        return view('misses.edit',['miss'=> $miss]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Miss  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Miss $miss)
    {

       $miss->update($request->all());

       if($request->hasFile('image')){

         $image = $request->file('image');
         $filename = time() . '.' . $image->getClientOriginalExtension();
         Image::make($image)->save(public_path('/img/photos/' . $filename));
         $miss->image = $filename;
         $miss->save();

       }

      return back()->with('status', 'Modifications enregistrées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Miss  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miss $miss)
    {
        $miss->delete();
        return redirect('misses')->with('status', 'Miss supprimée avec succès');;
    }




}
