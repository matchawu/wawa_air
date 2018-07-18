<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aqi extends Model
{
    protected $fillable=['o3','pm25','pm10','co','so2','no2','aqi'];
}
