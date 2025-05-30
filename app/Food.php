<?php

namespace MetodikaTI;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{

    public function category_get(){
        return $this->hasOne("MetodikaTI\FoodCategory", "id", "food_category_id");
    }

}
