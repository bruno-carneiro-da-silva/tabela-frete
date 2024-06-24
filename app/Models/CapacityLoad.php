<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapacityLoad extends Model
{
    use HasFactory;

    protected $fillable = [
        'resolution_id',
        'cargo_category_id',
        'load_type_id',
        'number_of_axles',
        'distance',
        'cdd_value',
        'cd_value',
    ];

    public function resolution()
    {
        return $this->belongsTo(Resolution::class);
    }

    public function cargoCategory()
    {
        return $this->belongsTo(CargoCategory::class);
    }

    public function loadType()
    {
        return $this->belongsTo(LoadType::class);
    }
}
