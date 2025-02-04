<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreqQuestion extends Model
{
    use HasFactory;
    protected $table = 'freq_questions';

    protected $fillable = [
        'question',
        'answer',
    ];
}
