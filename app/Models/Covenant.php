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
        'value',
        'covenant_type_id',
        'periodicity_type_id',
        'provider_id',
        'concept_id',
        'deleted_at'
    ];
    protected $with = ['covenantType','concept','periodicityType','provider'];
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
        return $this->belongsToMany(User::class)->withPivot('value','dues','paid_dues');
    }
    public function concept()
    {
        return $this->belongsTo(Concept::class);
    }
    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}
