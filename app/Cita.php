<?php

namespace Ensayo;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
