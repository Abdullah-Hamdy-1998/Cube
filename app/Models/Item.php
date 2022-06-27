<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Item extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'description', 'avatar', 'weight', 'quantity'];

    public function shipments()
    {
        return $this->belongsToMany(Shipment::class)->withPivot(['weight', 'quantity']);
    }

    public function logs()
    {
        return $this->morphMany(ActivityLog::class, 'loggable');
    }
}
