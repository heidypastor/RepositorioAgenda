<?php

namespace Ensayo\Http\Controllers;

use Ensayo\Http\Controllers\Controller;

class EnsayoController extends Controller {
	
	public function Bienvenida($bienvenida){
		return "Bienvenidos a mi primer controlador ". $bienvenida;
	}
}

