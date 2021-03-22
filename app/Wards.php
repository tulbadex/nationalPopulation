<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wards extends Model
{
    //
    public function citizen()
    {
        return $this->belongsTo(Citizens::class);
    }
}
