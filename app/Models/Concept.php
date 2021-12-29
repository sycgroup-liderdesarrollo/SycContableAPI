<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concept extends Model
{
    use HasFactory;
    protected $fillable = ['name','calculated', 'concept_type_id',
    'deleted_at'];

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
}
