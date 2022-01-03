<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provider extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'address',
        'phone',
        'identification_number',
        'identification_type_id',
        'deleted_at'
    ];
    protected $with = ['identificationType'];
    public function identificationType()
    {
        return $this->belongsTo(identificationType::class);
    }
}
