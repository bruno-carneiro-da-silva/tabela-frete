<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoadType extends Model
{
    use HasFactory;

    protected $fillable = [
        'cargo_category_id',
        'name',
    ];

    public function cargoCategory()
    {
        return $this->belongsTo(CargoCategory::class);
    }

    public function capacityLoads()
    {
        return $this->hasMany(CapacityLoad::class);
    }
}
