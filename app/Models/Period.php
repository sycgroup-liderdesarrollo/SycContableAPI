<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;
    protected $fillable =['name','deleted_at'];

    public function scopeFilter($query, $filter)
    {
        return $query->where('name', 'like', '%' . $filter . '%');
    }
    public function payroll()
    {
        return $this->hasMany(Payroll::class);
    }
    public function provision()
    {
        return $this->hasOne(Provision::class);
    }
}
