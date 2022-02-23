<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OccupationalRiskManager extends Model
{
    use HasFactory;
    protected $fillable = ['name','class','porcentage'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function scopeFilter($query, $filter)
    {
        return $query->where('name', 'like', '%' . $filter . '%');
    }
}
