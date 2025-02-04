<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityHeaderAssistant extends Model
{
    use HasFactory;

    protected $fillable = [
        'f_name',
        'l_name',
        'speech',
        'email',
        'phone',
        'start_date',
        'end_date',
        'photo',
    ];
}
