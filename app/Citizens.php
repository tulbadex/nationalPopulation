<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Citizens extends Model
{
    //
    protected $fillable = [
        'name', 'gender', 'address', 'phone','ward_id'
    ];
    // protected $with = ['wards'];

    public function ward()
    {
        return $this->belongsTo(Wards::class);
    }
}
