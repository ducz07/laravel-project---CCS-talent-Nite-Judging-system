<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = ['participants', 'j1_performance', 'j1_entertainment', 'j1_costume', 'j1_audience', 'j2_performance', 'j2_entertainment', 'j2_costume', 'j2_audience', 'j3_performance', 'j3_entertainment', 'j3_costume', 'j3_audience'];
}
