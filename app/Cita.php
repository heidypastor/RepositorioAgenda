<?php

namespace Ensayo;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table="citas";
    protected $fillable=["Fecha","usuario"];
    protected $primaryKey = "id";

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
