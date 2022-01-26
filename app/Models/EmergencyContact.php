<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyContact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'kinship_id'
    ];
    public function kinship()
    {
        return $this->belongsTo(Kinship::class);
    }
}
