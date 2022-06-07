<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Civilian extends Model
{

    protected $fillable = [
        'nik',
        'full_name',
        'date_of_birth',
        'gender',
        'blood_type',
        'wedding_date',
        'no_paspor',
        'no_kitap',
        'citizenship',
        'father_name',
        'mother_name',
    ];

    public function birthplace() {
        return $this->hasOne(BirthPlace::class,  'birthplace_id');
    }

    public function profession() {
        return $this->hasOne(Profession::class, 'profession_id');
    }


    public function religion() {
        return $this->hasOne(Religion::class, 'religion_id');
    }

    public function education() {
        return $this->hasOne(Education::class, 'education_id');
    }

    public function maritalStatus() {
        return $this->hasOne(MaritalStatus::class, 'marital_status_id');
    }

    public function familyStatus() {
        return $this->hasOne(FamilyStatus::class, 'family_status_id');
    }


    use HasFactory;

}
