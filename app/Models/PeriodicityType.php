<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodicityType extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    public function covenant()
    {
        return $this->hasMany(Covenant::class);
    }
}
