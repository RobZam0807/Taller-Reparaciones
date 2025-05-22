<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    public $table = "clientes";
    protected $primaryKey = "id";

    /**
    * @var array 
    */
    protected $fillable = [
        'nombre','telefono','domicilio'
    ] ;
    
    /**
    * @var array 
    */

    protected $hidden = ['created_at','updated_at'];
}
