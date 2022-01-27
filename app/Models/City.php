<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $guarded = ['created_at', 'updated_at', 'deleted_at'];

    public function scopeFilter($query, $filter)
    {
        return $query->where('name', 'like', '%'.$filter.'%');
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function providers()
    {
        return $this->hasMany(Provider::class);
    }
}
