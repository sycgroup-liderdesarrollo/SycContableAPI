<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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
        'business_line_id',
        'contract_type_id',
        'salary_type_id',
        'headquarter_id',
        'identification_type_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function businessLine()
    {
        return  $this->belongsTo(BusinessLine::class);
    }
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
        return $this->belongsToMany(Covenant::class);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
