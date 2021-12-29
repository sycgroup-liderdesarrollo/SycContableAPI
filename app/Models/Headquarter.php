<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Headquarter extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name',
    'deleted_at'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
