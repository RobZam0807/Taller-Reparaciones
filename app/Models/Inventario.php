<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    public $table = "inventarios";
    protected $primarykey = "id";

    /**
    * @var array 
    */
    protected $fillable = [
        'id_tipo_Electrodomestico','tipo_Pieza','cantidad','costo'
    ] ;

    /**
    * @var array 
    */
    protected $hidden = ['created_at','updated_at'];
}
