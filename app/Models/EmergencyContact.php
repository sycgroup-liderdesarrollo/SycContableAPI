<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmergencyContact extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'phone',
        'kinship_id'
    ];
    public function kinship()
    {
        return $this->belongsTo(Kinship::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function scopeFilter($query, $filter)
    {
        return $query->where('name', 'like', '%' . $filter . '%');
    }
}
