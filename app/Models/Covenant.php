<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Covenant extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable=[
        'name',
        'active',
        'value',
        'covenant_type_id',
        'periodicity_type_id',
        'concept_id'
    ];
    protected $with = ['covenantType'];
    public function periodicityType()
    {
        return $this->belongsTo(PeriodicityType::class);
    }
    public function covenantType()
    {
        return $this->belongsTo(CovenantType::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function concept()
    {
        return $this->belongsTo(Concept::class);
    }
}
