<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BirthPlace extends Model

{

    protected $fillable = [
        'name',
    ];
    use HasFactory;
}
