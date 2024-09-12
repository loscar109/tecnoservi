<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;



    protected $fillable = [
        'patente',
        'modelo_id'
    ];

    /*HAS es si tiene el id el otro
    BELONG es si el id lo tengo yo*/
    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    } 

    public function mostrarDatos(){
        return $this->patente . " - " . $this->modelo->nombre . " - " . $this->modelo->marca->nombre;
    }

}
