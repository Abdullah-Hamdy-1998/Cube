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

    public function shipmentable()
    {
        return $this->morphTo();
    }
}
