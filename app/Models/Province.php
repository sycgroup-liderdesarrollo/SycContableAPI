<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $guarded=['id','created_at','updated_at','deleted_at'];
    protected $with = ['cities'];

    public function scopeFilter($query , $filter)
    {
        return $query->where('danecode','like','%'.$filter.'%')
                     ->orWhere('name','like','%'.$filter.'%')
                     ->orWhere('prefix','like','%'.$filter.'%');
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
