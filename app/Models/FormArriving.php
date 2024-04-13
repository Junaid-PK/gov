<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormArriving extends Model
{

    use HasFactory;

    protected $guarded = [];

    public function arrivalMean()
    {
        return $this->belongsTo(ArrivalMean::class, 'arrivingBy_fk');
    }
    public function disembarkations()
    {
        return $this->belongsTo(Disembarkation::class, 'portDisem_fk');
    }
}
