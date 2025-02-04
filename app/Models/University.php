<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'vision',
        'logo',
        'about',
        'agent_id',
        'header_id',
    ];

    public function header(){
        return $this->belongsTo(UniversityHeader::class,'header_id');
    }

    public function agent(){
        return $this->belongsTo(CollegeAgent::class,'agent_id');
    }
}
