<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalogo_Servicio extends Model
{
    public $table = "catalogo__servicios";
    protected $primaryKey = "id";

    /**
    * @var array 
    */
    protected $fillable = [
        'id_tipo_Electrodomestico','tipo_Servicio','costo'
    ] ;
    
    /**
    * @var array 
    */

    protected $hidden = ['created_at','updated_at'];
}
