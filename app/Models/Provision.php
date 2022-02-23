<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provision extends Model
{
    use HasFactory;
    protected $fillable=[
        'pension_contribution',
        'occupational_risk_contributions',
        'health_contribution',
        'compensation_funds',
        'layoffs',
        'Interest_on_severance_pay',
        'vacation_provision',
        'wage_premium',
        'total_provisions',
        'total_payroll',
        'period_id',
    ];

    public function scopeFilter($query, $filter)
    {
        return $query->where('total_provisions', 'like', '%' . $filter . '%');
    }
    public function payroll()
    {
        return $this->hasMany(Payroll::class);
    }
    public function period()
    {
        return $this->belongsTo(Period::class);
    }
}
