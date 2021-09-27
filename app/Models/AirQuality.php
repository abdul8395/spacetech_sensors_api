<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AirQuality extends Model
{
   // use HasFactory;
    use Notifiable;
    protected $table='air_quality';
    protected $fillable=['loc','co','no2', 'nh3','co2', 'voc', 'pm1', 'pm2', 'pm3', 'temp', 'humidity'];

}
