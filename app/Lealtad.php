<?php

namespace MetodikaTI;

use Illuminate\Database\Eloquent\Model;

class Lealtad extends Model
{
    //Funcion para verificar si la oferta esta asignado a una habitacion o paquete, solamente para avisar en caso de eliminar
    function is_used(){

        $data_used_count = Prospectos::where("id_lealtad", $this->id)->count();

        return ($data_used_count > 0) ? true : false;
    }
}
