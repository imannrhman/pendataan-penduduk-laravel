<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{

    protected $fillable = [
        'no_kk',
        'address',
        'postal_code',
        'rt_id',
        'rw_id'
    ];

    public function familyMember() {
        return $this->belongsToMany(Civilian::class, 'family_member', 'family_id', 'civilian_id');
    }


    use HasFactory;

}
