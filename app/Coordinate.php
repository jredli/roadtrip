<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinate extends Model
{
    protected $table = 'coordinates';

    public $timestamps = false;

    protected $guarded = [];

    public function trip() {
        return $this->belongsTo(Trip::class);
    }
}
