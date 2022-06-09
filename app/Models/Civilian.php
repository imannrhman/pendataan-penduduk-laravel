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
        return $this->hasOne(BirthPlace::class,  'id','birthplace_id');
    }

    public function profession() {
        return $this->hasOne(Profession::class, 'id','profession_id');
    }


    public function religion() {
        return $this->hasOne(Religion::class, 'id','religion_id');
    }

    public function education() {
        return $this->hasOne(Education::class, 'id','education_id');
    }

    public function maritalStatus() {
        return $this->hasOne(MaritalStatus::class, 'id','marital_status_id');
    }

    public function familyStatus() {
        return $this->hasOne(FamilyStatus::class, 'id','family_status_id');
    }


    use HasFactory;

}
