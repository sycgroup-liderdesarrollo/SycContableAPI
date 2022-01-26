<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name','business_line_id','deleted_at'];
    protected $hidden = ['business_line_id'];
    protected $with = ['businessLine'];

    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function businessLine()
    {
        return $this->belongsTo(BusinessLine::class);
    }
}
