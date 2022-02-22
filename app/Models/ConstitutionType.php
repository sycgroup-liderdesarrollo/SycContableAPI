<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConstitutionType extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function providers()
    {
        return $this->hasMany(Provider::class);
    }
    public function scopeFilter($query, $filter)
    {
        return $query->where('name', 'like', '%' . $filter . '%');
    }
}
