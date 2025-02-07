<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrevEvent extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'photo','video','date'];
}
