<?php

namespace Ensayo\Http\Controllers;
use Ensayo\Recordatorio;
use Ensayo\Cita;
use Illuminate\Http\Request;

class RecordatorioController extends Controller
{
    public function index($slug, Request $request){
        $cita = Cita::where("slug","=",$slug)->firstOrFail();
    	if($request->ajax()){
    		return response()->json($cita->recordatorios, 200);
    	}
    	return view('recordatorios.index');
    }

    public function store($slug, Request $request){
        $cita = Cita::where("slug","=",$slug)->firstOrFail();
    	if($request->ajax()){
    		$recordatorio = new Recordatorio();
    		$recordatorio->name = $request->input('name');
    		$recordatorio->picture = $request->input('picture');
            $recordatorio->cita()->associate($cita)->save();
            //$recordatorio->save();

    		return response()->json([
               // "trainer"=>$cita,
    			"message" => "Recordatorio creado correctamente."
    		], 200);
       	}
    }
}
