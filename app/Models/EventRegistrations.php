<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRegistrations extends Model
{
    use HasFactory;
    protected $fillable = ['event_id', 'name', 'age', 'country', 'gender', 'mail', 'phone_number', 'how_you_know_about_us', 'participation_type'];


    public function event()
    {
        return $this->belongsTo(NextEvent::class, 'event_id');
    }
}
