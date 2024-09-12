<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'marca_id'];


       /*HAS es si tiene el id el otro
    BELONG es si el id lo tengo yo*/

    /*Un modelo pertenece a una marca*/
    public function marca()
    {
        return $this->belongsTo(Marca::class);
    } 

    /*Un Modelo se asocia a muchos vehiculos*/
    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }
}
