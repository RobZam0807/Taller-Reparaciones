<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tecnicos extends Model
{
    public $table = "tecnicos";
    protected $primaryKey = "id";

    /**
    * @var array 
    */
    protected $fillable = [
        'nombre','apellidos','rfc','telefono','correo','servicios_Asignados'
    ] ;
    
    /**
    * @var array 
    */

    protected $hidden = ['created_at','updated_at'];
}
