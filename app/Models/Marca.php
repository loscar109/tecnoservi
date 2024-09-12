<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    /*HAS es si tiene el id el otro
    BELONG es si el id lo tengo yo*/


    /*Una Marca pertenece a muchos modelos*/
    public function modelos()
    {
        return $this->hasMany(Modelo::class);
    }

}
