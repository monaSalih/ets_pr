<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Academy; 


class Academy extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 
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

    
}
