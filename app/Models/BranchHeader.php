<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchHeader extends Model
{
    use HasFactory;
    protected $table = 'branches_headers';
    protected $fillable = [
        'name',
        'speech',
        'email',
        'phone',
        'start_date',
        'end_date',
        'photo',
        'branch_name',

    ];

    public function department(){
        return $this->hasOne(collegeDepartment::class,'head_id');
    }
}
