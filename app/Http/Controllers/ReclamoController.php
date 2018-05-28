<?php

namespace MisReclamos\Http\Controllers;

use Illuminate\Http\Request;
use MisReclamos\ReclamoTipo;

class ReclamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reclamosTipo =  ReclamoTipo::all();
        return view('reclamos.listarReclamo',compact('reclamosTipo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reclamos.crearReclamo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reclamoTipo = new ReclamoTipo();
        if($request->hasFile('imagen')){
          $file = $request->file('imagen');
          $name = $file->getClientOriginalName();
          $file->move(public_path().'/images/',$name);
        }
        $reclamoTipo->titulo = $request->input('titulo');
        $reclamoTipo->imagen = $name;
        $reclamoTipo->save();
        return 'Saved';
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
        return view('reclamos.modificarReclamo');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
