<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kinship extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function emergencyContacts()
    {
        return $this->hasMany(EmergencyContact::class);
    }
}
