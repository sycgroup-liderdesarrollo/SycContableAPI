<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function scopeFilter($query, $filter)
    {
        return $query->where('name', 'like', '%' . $filter . '%');
    }
}
