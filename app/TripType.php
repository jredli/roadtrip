<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TripType extends Model
{
    protected $table = 'trip_types';

    public $timestamps = false;

    protected $guarded = [];
}
