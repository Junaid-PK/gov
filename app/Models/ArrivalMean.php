<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArrivalMean extends Model
{
    use HasFactory;

    public function formArriving(){
        return $this->hasMany(FormArriving::class, 'arrivingBy_fk');
    }
}
