<?php

namespace Ensayo\Http\Controllers;

use Illuminate\Http\Request;
use Ensayo\Cita;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Cita::all();

        return view("Citas.index", compact("citas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Citas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile("Usuario")){
            $file = $request->file("Usuario");
            $name = time().$file->getClientOriginalName();
            $file->move(public_path()."/images/",$name);
        }

        $fecha = new Cita();
        $fecha->fecha = $request->input("fecha");
        $fecha->Usuario = $name;
        $fecha->slug = $name.now();
        $fecha->save();
        return "Los datos han sido guardados";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $cita = Cita::where("slug","=",$slug)->firstOrFail();
    
        return view("Citas.show", compact("cita"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $cita = Cita::where("slug","=",$slug)->firstOrFail();

        return view("Citas.edit", compact("cita"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $cita = Cita::where("slug","=",$slug)->firstOrFail();
        //$cita->fill($request->except("usuario"));
        $cita->fecha = $request->input("fecha");
        if($request->hasFile("Usuario")){
            $file = $request->file("Usuario");
            $name = time().$file->getClientOriginalName();
            $cita->usuario = $name;
            $file->move(public_path()."/images/",$name);
        }
        $cita->save();
        return "Cita actualizada correctamente";
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
