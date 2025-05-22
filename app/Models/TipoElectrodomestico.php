<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoElectrodomestico extends Model
{
    public $table = "tipo_electrodomesticos";
    protected $primaryKey = "id";

    /**
    * @var array 
    */
    protected $fillable = [
        'id_Electrodomestico','modelo'
    ] ;
    
    /**
    * @var array 
    */

    protected $hidden = ['created_at','updated_at'];
}
