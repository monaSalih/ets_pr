<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    use HasFactory;


    protected $fillable = [
        'email', 'trainee_status', 'training_info_id', 'mobile', 'graduated', 'certificat_type', 'git_hub',
        'linkedin', 'nationality', 'country',
        'passport_number', 'national_id', 'birthdate', 'first_name', 'second_name',
        'third_name', 'last_name', 'ar_first_name', 'ar_second_name', 'ar_third_name',
        'ar_last_name', 'gender', 'martial_status', 'education', 'educational_status',
        'field', 'educational_background', 'city', 'address', 'id_img', 'academy_id',
        'cohort_id', 'personal_img', 'vaccination_img',
    ];


    public function academy()
    {
        return $this->belongsTo(Academy::class);
    }

    public function cohort()
    {
        return $this->belongsTo(Cohort::class);
    }

    public function employment_logs()
    {
        return $this->hasMany(EmploymentLog::class);
    }

}

