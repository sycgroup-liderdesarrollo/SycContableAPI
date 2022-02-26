<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Concept extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name','calculated', 'concept_type_id'];

    public function covenant()
    {
        return $this->hasOne(Covenant::class);
    }
    public function conceptType()
    {
        return $this->belongsTo(ConceptType::class);
    }
    public function payrolls()
    {
        return $this->belongsToMany(Payroll::class);
    }
    public function setting()
    {
        return $this->belongsTo(Setting::class);
    }
    public function scopeConceptTypeFilter($query, $type)
    {
        return $query->where('concept_type_id','like','%'.$type.'%');
    }
}
