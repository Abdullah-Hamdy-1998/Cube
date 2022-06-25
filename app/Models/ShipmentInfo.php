<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShipmentInfo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'shipment_info';
    protected $fillable = ['type'];

    public function shipments()
    {
        return $this->hasMany(Shipment::class);
    }

    public function getRouteKeyName()
    {
        return 'type';
    }
}
