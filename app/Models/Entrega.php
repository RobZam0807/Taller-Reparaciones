<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    public $table = "entrega";
    protected $primarykey = "id";

    /**
    * @var array 
    */
    protected $fillable = [
        'id_proveedor','fecha','costo'
    ] ;

    /**
    * @var array 
    */
    protected $hidden = ['created_at','updated_at'];

     public function detalles()
    {
        return $this->hasMany(DetalleEntrega::class, 'id_entrega');
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }
}
