<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityAdministrativeUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'unit_header',
        'unit_header_speech',
        'email',
        'phone',
        'description',
        'deanship_id',
        'photo',
    ];

    public function deanship(){
        return $this->belongsTo(Deanship::class,'deanship_id');
    }
}
