<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone',
        'identification_number',
        'identification_type_id'
    ];
    public function identificationType()
    {
        return $this->belongsTo(identificationType::class);
    }
}
