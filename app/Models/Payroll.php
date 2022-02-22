<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payroll extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable=['period_id', 'user_id','provision_id','deleted_at'];
    protected $with = ['period','user', 'concepts'];

    public function scopeFilter($query, $filter)
    {
        return $query->where('id', 'like', '%' . $filter . '%');
    }
    public function concepts()
    {
        return $this->belongsToMany(Concept::class)->withTimestamps()->withPivot('count', 'unit_value','total_value', 'id');
    }
    public function period()
    {
        return $this->belongsTo(Period::class);
    }
    public function provision()
    {
        return $this->belongsTo(Provision::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
