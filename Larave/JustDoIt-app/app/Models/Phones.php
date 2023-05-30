<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phones extends Model
{
    use HasFactory,Uuids;

    protected $table='phones';
    protected $Fillable=['Name','Description','Employee'];
}
