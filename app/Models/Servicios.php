<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    public $table = "servicios";
    protected $primaryKey = "id";

    /**
    * @var array 
    */
    protected $fillable = [
        'id_Cliente','id_Electrodomestico','id_Tecnico','fecha_Reporte','fecha_Servicio','descripcion'
    ] ;
    
    /**
    * @var array 
    */

    protected $hidden = ['created_at','updated_at'];
}
