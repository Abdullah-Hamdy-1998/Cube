<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'shipment_info_id',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shipmentable()
    {
        return $this->morphTo();
    }

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    public function shipmentInfo()
    {
        return $this->belongsTo(ShipmentInfo::class);
    }
}
