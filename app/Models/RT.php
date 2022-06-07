<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RT extends Model
{

    protected $table = "rt";

    protected $fillable = [
        'no_rt',
        'updated_at',
    ];


    public function civilian()
    {
        return $this->belongsToMany(Civilian::class, 'head_of_rt', 'rt_id',  'civilian_id')->withTimestamps();
    }

    public function families()
    {
        return $this->hasMany(Family::class, 'rt_id');
    }

    use HasFactory;
}
