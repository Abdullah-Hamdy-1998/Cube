<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use AjCastro\EagerLoadPivotRelations\EagerLoadPivotTrait;

class Shipment extends Model
{
    use HasFactory, EagerLoadPivotTrait;

    protected $with = ['shipmentInfo', 'shipmentable'];

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
        return $this->belongsToMany(Item::class)->withPivot(['quantity', 'weight']);
    }

    public function shipmentInfo()
    {
        return $this->belongsTo(ShipmentInfo::class);
    }
}
