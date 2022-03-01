<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vacation extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =['start_date','end_date','total_days','user_id','days_apart'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
