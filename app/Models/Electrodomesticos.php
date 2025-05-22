<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Electrodomesticos extends Model
{
    public $table = "electrodomesticos";
    protected $primaryKey = "id";

    /**
    * @var array 
    */
    protected $fillable = [
        'tipo','marca'
    ] ;
    
    /**
    * @var array 
    */

    protected $hidden = ['created_at','updated_at'];
}
