<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'name',
        'last_name',
        'second_last_name',
        'identification_number',
        'admission_date',
        'base_salary',
        'email',
        'password',
        'address',
        'neighborhood',
        'birthday',
        'children',
        'position_id',
        'contract_type_id',
        'salary_type_id',
        'headquarter_id',
        'identification_type_id',
        'gender_id',
        'health_provider_id',
        'pension_fund_id',
        'civil_status_id',
        'work_city_id',
        'residence_city_id',
        'expedition_place_id',
        'strata_id',
        'education_level_id',
        'active',
        'emergency_contact_id',
        'phone',
        'occupational_risk_manager_id',
        'image'
    ];

    protected $hidden = ['password','remember_token','gender_id','position_id'];
    protected $with = ['gender','position'];

    protected $casts = ['email_verified_at' => 'datetime'];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function contractType()
    {
        return $this->belongsTo(ContractType::class);
    }
    public function salaryType()
    {
        return $this->belongsTo(SalaryType::class);
    }
    public function headquarter()
    {
        return $this->belongsTo(Headquarter::class);
    }
    public function identificationType()
    {
        return $this->belongsTo(identificationType::class);
    }
    public function covenants()
    {
        return $this->belongsToMany(Covenant::class)->withTimestamps()->withPivot('id','covenant_id','dues','paid_dues','value');
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function payrolls()
    {
        return $this->hasMany(Payroll::class);
    }
    public function lastPayroll()
    {
        return $this->hasOne(Payroll::class)->latestOfMany();
    }
    public function scopeFilter($query, $filter)
    {
        return $query->where('name','like','%'.$filter.'%');
    }
    public function scopeActive($query, $active)
    {
        return $query->where('active', 'like','%'.$active);
    }
    public function workCity()
    {
        return $this->belongsTo(City::class);
    }
    public function residenceCity()
    {
        return $this->belongsTo(City::class);
    }
    public function expeditionPlace()
    {
        return $this->belongsTo(City::class);
    }
    public function civilStatus()
    {
        return $this->belongsTo(CivilStatus::class);
    }
    public function educationLevel()
    {
        return $this->belongsTo(EducationLevel::class);
    }
    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
    public function healthProvider()
    {
        return $this->belongsTo(HealthProvider::class);
    }
    public function pensionFund()
    {
        return $this->belongsTo(PensionFund::class);
    }
    public function strata()
    {
        return $this->belongsTo(Strata::class);
    }
    public function emergencyContact()
    {
        return $this->belongsTo(EmergencyContact::class);
    }
    public function occupationalRiskManager()
    {
        return $this->belongsTo(OccupationalRiskManager::class);
    }
    public function vacation()
    {
        return $this->hasMany(Vacation::class);
    }
}
