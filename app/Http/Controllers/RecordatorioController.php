<?php

namespace Ensayo\Http\Controllers;
use Ensayo\Recordatorio;
use Illuminate\Http\Request;

class RecordatorioController extends Controller
{
    public function index(Request $request){
    	if($request->ajax()){
            $recordatorios = Recordatorio::all();
    		return response()->json($recordatorios, 200);
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
