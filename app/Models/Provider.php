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
        'last_name',
        'trade_name',
        'address',
        'phone',
        'identification_number',
        'identification_type_id',
        'iva',
        'email',
        'password',
        'constitution_type_id',
        'city_id',
        'responsability_type_id',
        'deleted_at'
    ];
    protected $with = ['identificationType','constitutionType','responsabilityType','city'];
    protected $hidden = ['identification_type_id','responsability_type_id','constitution_type_id','city_id'];

    public function identificationType()
    {
        return $this->belongsTo(identificationType::class);
    }
    public function covenant()
    {
        return $this->hasOne(Covenant::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function constitutionType()
    {
        return $this->belongsTo(ConstitutionType::class);
    }
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
    public function responsabilityType()
    {
        return $this->belongsTo(ResponsabilityType::class);
    }
}
