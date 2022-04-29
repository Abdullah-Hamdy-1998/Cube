<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipmentInfo extends Model
{
    use HasFactory;

    protected $table = 'shipment_info';
    protected $fillable = ['type'];

    public function getRouteKeyName()
    {
        return 'type';
    }
}
