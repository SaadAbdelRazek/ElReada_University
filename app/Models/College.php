<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dean_id',
        'university_id',
        'vision',
        'message',
        'description',
        'photo',
        'established_at',

    ];

    public function dean()
    {
        return $this->belongsTo(CollegeDean::class,'dean_id');
    }

    public function agent(){
        return $this->belongsTo(CollegeAgent::class,'agent_id');
    }

    public function department(){
        return $this->hasMany(CollegeDepartment::class,'college_id');
    }
}
