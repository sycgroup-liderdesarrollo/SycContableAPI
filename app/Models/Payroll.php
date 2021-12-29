<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payroll extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable=['days_settled', 'period_id', 'user_id',
    'deleted_at'];
    protected $with = ['period'];

    public function concepts()
    {
        return $this->belongsToMany(Concept::class)->withTimestamps()->withPivot('count', 'unit_value','total_value');
    }
    public function period()
    {
        return $this->belongsTo(Period::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
