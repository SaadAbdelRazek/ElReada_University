<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeAgent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'speech',
        'start_date',
        'end_date',
        'photo',
    ];

    public function college(){
        return $this->hasOne(College::class,'agent_id');
    }

    public function university(){
        return $this->hasOne(University::class,'agent_id');
    }


}
