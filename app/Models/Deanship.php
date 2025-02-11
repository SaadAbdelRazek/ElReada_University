<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deanship extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'deanship_header',
        'deanship_header_speech',
        'email',
        'phone',
        'description',
        'photo',
        
    ];

    public function unit(){
        return $this->hasMany(UniversityAdministrativeUnit::class,'deanship_id');
    }
}
