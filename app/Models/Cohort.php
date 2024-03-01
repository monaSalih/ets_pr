<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{
    use HasFactory;

    protected $fillable = [
        'number', 'name', 'start_date', 'end_date', 'training_location', 'description', 
        'academy_id', 'training_type', 'technology', 'donor_type',
    ];
    // public function TrainingInfo()
    // {
    //     return $this->hasOne(TrainingInfo::class);
    // }


    public function trainees()
    {
        return $this->hasMany(Trainee::class);
    }

    public function employmentLogs()
    {
        return $this->hasMany(EmploymentLog::class);
    }

    public function fund()
    {
        return $this->hasOne(Fund::class);
    }
}
