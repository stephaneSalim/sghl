<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    //
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function ficheDeSuivi()
    {
        return $this->hasOne('App\FicheDeSuivi');
    }
}
