<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resolution extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
    ];

    public function capacityLoads()
    {
        return $this->hasMany(CapacityLoad::class);
    }

    public function motorVehicles()
    {
        return $this->hasMany(MotorVehicle::class);
    }

    public function highPerformanceCapacityLoads()
    {
        return $this->hasMany(HighPerformanceCapacityLoad::class);
    }

    public function highPerformanceMotorVehicles()
    {
        return $this->hasMany(HighPerformanceMotorVehicle::class);
    }
}
