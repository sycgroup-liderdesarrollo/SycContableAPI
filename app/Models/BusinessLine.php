<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessLine extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name','deleted_at'];

    public function position()
    {
        return $this->hasOne(Position::class);
    }
    public function scopeFilter($query, $filter)
    {
        return $query->where('name', 'like', '%' . $filter . '%');
    }
}
