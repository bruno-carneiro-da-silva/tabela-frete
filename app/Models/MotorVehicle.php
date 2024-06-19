<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotorVehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'resolution_id',
        'load_type',
        'cost_coefficient',
        'distance',
        'number_of_axles'
    ];

    protected $casts = [
        'number_of_axles' => 'array',
    ];

    public function resolution()
    {
        return $this->belongsTo(Resolution::class);
    }
}
