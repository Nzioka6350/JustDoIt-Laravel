<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory,Uuids;

    protected $fillable=['Id_No','department_id'];

    public function department(){
        return $this->belongsTo(Department::class);
    }
}
