<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BusinessLine extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    protected $with = ['users'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
