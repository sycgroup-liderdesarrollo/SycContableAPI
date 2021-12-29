<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConceptType extends Model
{
    use HasFactory;
    protected $fillable = ['name',
    'deleted_at'];

    public function concept()
    {
        return $this->hasMany(Concept::class);
    }
}
