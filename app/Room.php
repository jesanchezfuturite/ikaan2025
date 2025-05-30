<?php

namespace MetodikaTI;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Room extends Model
{

    function get_gallery(){
        return Gallery::where("room_id", $this->id)->get();
    }

    function get_characteristics(){
        return Characteristic::where("room_id", $this->id)->get();
    }

    function get_characteristics_html(){
        $data = Characteristic::where("room_id", $this->id)->get();

        $text = "";
        foreach ($data as $d){
            $text .= "- " . $d->name . "<br>";
        }

        return $text;
    }

    function has_deal(){

        $today_date = Carbon::now()->endOfDay();
        $deal = Deal::where("id", $this->deal_id)->first();


        if($deal != null){
            $date_start_deal  = Carbon::createFromFormat("Y-m-d", $deal->date_start_deal)->endOfDay();
            $date_finish_deal = Carbon::createFromFormat("Y-m-d", $deal->date_finish_deal)->endOfDay();

            if($today_date->greaterThanOrEqualTo($date_start_deal) && $today_date->lessThanOrEqualTo($date_finish_deal)){
                return true;
            }else if($today_date->equalTo($date_start_deal) && $today_date->equalTo($date_finish_deal)){
                return true;
            }else{
                return false;
            }

        }else{
            return false;
        }

    }

    function get_calendars(){
        $calendar = Calendar::where("room_id", $this->id)->get();
        $calendar_array = "";
        foreach ($calendar as $item){
            $calendar_array .= $item->date.",";
        }

        $calendar_array = substr($calendar_array, 0,strlen($calendar_array) - 1);

        return $calendar_array;
    }

    function get_deal(){
//        Deal::
        return $this->hasOne("MetodikaTI\Deal", "id", "deal_id");
    }

    function get_deal_html(){

        $deal = Deal::find($this->deal_id);

        $html = "";
        if($deal->type == "reservacion"){
            $html .= '<p class="deal_title"><strong>'.$deal->name.'</strong></p>';
        }else{
            $html .= '<p class="deal_title"><strong>'.$deal->name.'</strong></p>';
            $html .= '<p class="deal_title">'.$deal->amenidades_include.'</p>';
        }

        $html = "<br>" . $html;

        return $html;
    }


    function get_slider(){

       $html = "";

       $galerias = Gallery::where("room_id", $this->id)->get();

       $html .= '<a class="photo_room" style="background: url('.$this->principal_photo.');" href="'.$this->principal_photo.'" data-lightbox="image-'.$this->id.'" ></a>';

       foreach ($galerias as $galeria){
           $html .= '<a class="photo_room" style="background: url('.$galeria->path.');" href="'.$galeria->path.'" data-lightbox="image-'.$this->id.'" ></a>';
       }

       $html = '<div class="slider_room">'.$html.'</div>';

       return $html;
    }

    function type_room(){

        if($this->type == "habitacion"){
            return "Hospedaje";
        }else{
            return "Paquete";
        }

    }

}
