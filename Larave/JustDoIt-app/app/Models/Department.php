<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory,Uuids;
    protected $fillable=['Dept_Code','Dept_Name','School','Courses'];

    public function staffs(){
        return $this->hasMany(Staff::class);
    }
}
