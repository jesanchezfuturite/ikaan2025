<?php

namespace MetodikaTI;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    public function cli(){
        return $this->hasOne('MetodikaTI\Client', 'id', 'client_id');
        //return $this->hasMany('App\Article', 'nombre_clave_foranea', 'nombre_clave_primaria_local');
    }
    public function habitacion(){
        return $this->hasOne('MetodikaTI\Room', 'id', 'room_id');
    }
}
