<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle_Entrega extends Model
{
    public $table = "detalle__entregas";
    protected $primarykey = "id";

    /**
    * @var array 
    */
    protected $fillable = [
        'id_entrega','id_pieza','catidad','costo_unitario'
    ] ;

    /**
    * @var array 
    */
    protected $hidden = ['created_at','updated_at'];

    public function entrega()
    {
        return $this->belongsTo(Entrega::class, 'id_entrega');
    }

    public function pieza()
    {
        return $this->belongsTo(Inventario::class, 'id_pieza');
    }
}

