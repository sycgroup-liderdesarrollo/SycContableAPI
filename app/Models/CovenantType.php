<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CovenantType extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function covenant()
    {
        return $this->hasMany(Covenant::class);
    }
}
