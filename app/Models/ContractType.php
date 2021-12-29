<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractType extends Model
{
    use HasFactory;
    protected $fillable=['name',
    'deleted_at'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
