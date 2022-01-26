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
        'email',
        'password',
        'last_name',
        'second_last_name',
        'identification_number',
        'admission_date',
        'out_date',
        'base_salary',
        'position_id',
        'contract_type_id',
        'salary_type_id',
        'headquarter_id',
        'identification_type_id',
        'deleted_at'
    ];

    protected $hidden = ['password','remember_token',];

    protected $casts = ['email_verified_at' => 'datetime',];

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
        return $this->belongsToMany(Covenant::class)->withTimestamps(); //el timestamps es para mandar las horas
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
}
