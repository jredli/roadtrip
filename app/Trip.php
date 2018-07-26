<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table = 'trips';

    public $timestamps = false;

    protected $guarded = [];

    public function trip_type() {
        return $this->belongsTo(TripType::class);
    }
}
