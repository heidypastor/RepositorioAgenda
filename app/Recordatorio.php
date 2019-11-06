<?php

namespace Ensayo;

use Illuminate\Database\Eloquent\Model;

class Recordatorio extends Model
{
    public function Cita(){
    	return $this->belongsTo('Ensayo\Cita');
    }
}
