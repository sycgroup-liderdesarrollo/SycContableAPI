<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;
    protected $fillable=['days_settled'];

    public function concepts()
    {
        return $this->belongsToMany(Concept::class);
    }
    public function period()
    {
        return $this->belongsTo(Period::class);
    }
}
