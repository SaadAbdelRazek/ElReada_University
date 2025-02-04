<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeDepartment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'college_id',
        'head_id',
        'vision',
        'message',
        'description',
        'students_number',
        'established_at',

    ];

    public function college(){
        return $this->belongsTo(College::class,'college_id');
    }

    public function head(){
        return $this->belongsTo(BranchHeader::class,'head_id');
    }

}
