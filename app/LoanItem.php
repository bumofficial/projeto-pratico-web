<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanItem extends Model
{
    public function loan()
    {
        return $this->belongsTo('App\Loan');
    }

    public function copy()
    {
        return $this->hasOne('App\Copy');
    }
}
