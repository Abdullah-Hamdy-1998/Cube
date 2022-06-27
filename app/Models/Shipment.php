<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Shipment extends Model
{
    use HasFactory, SoftDeletes;

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
        return $this->morphTo()->withTrashed();
    }

    public function items()
    {
        return $this->belongsToMany(Item::class)->withPivot(['quantity', 'weight']);
    }

    public function shipmentInfo()
    {
        return $this->belongsTo(ShipmentInfo::class);
    }

    public function logs()
    {
        return $this->morphMany(ActivityLog::class, 'loggable');
    }
}
