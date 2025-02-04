<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeDean extends Model
{
    use HasFactory;
    protected $table = 'Colleges_deans';
    protected $fillable = [
        'name',
        'speech',
        'email',
        'phone',
        'start_date',
        'end_date',
        'photo',
        'faculty_name',

    ];

    public function college()
    {
        return $this->hasOne(College::class, 'dean_id');
    }
}
