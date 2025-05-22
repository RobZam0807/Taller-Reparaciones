<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    public $table = "proveedores";
    protected $primaryKey = "id";

    /**
    * @var array 
    */
    protected $fillable = [
        'nombre','contacto'
    ] ;
    
    /**
    * @var array 
    */

    protected $hidden = ['created_at','updated_at'];
}
