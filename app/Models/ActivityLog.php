<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class ActivityLog extends Model
{
    use HasFactory;

    protected $table = 'logs';
    protected $fillable = ['user_id', 'action', 'data'];

    public function loggable()
    {
        return $this->morphTo()->withTrashed();
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }
}
