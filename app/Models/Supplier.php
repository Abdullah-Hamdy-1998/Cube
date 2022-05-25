<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'delegate',
        'email',
        'phone',
        'address',
        'note',
    ];

    public function shipments()
    {
        return $this->morphToMany(Shipment::class,'shipmentable');
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
