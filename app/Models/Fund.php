<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    use HasFactory;

    // public function TrainingInfo()
    // {
    //     return $this->hasOne(TrainingInfo::class);
    // }

    public function Cohort()
    {
        return $this->hasMany(Cohort::class);
    }
}
