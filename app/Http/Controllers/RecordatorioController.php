<?php

namespace Ensayo\Http\Controllers;

use Illuminate\Http\Request;

class RecordatorioController extends Controller
{
    public function index(Request $request){
    	if($request->ajax()){
    		return response()->json([
    			['id' => 1, 'name' => "Documentos"],
    			['id' => 2, 'name' => "Hora"],
    			['id' => 3, 'name' => "Llevar"]
    		]);
    	}
    	return view('recordatorios.index');
    }

    public function store(Request $request){
    	if($request->ajax()){
    		$recordatorio = new Recordatorio();
    		$recordatorio->name = $request->input('name');
    		$recordatorio->picture = $request->input('picture');
    		$recordatorio->save();

    		return response()->json([
    			"message" => "Recordatorio creado correctamente."
    		], 200);
       	}
    }
}
