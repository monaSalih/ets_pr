<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use App\Models\Cohort;
use App\Models\EmploymentLog;
use App\Models\Trainee;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function jobcoachDashboard()
    {
        $academies = Academy::all();
        foreach ($academies as $academy) {
            $cohorts = Cohort::where('academy_id', $academy->id)->get();
            // dd($cohorts);

            foreach ($cohorts as $cohort) {

                $employedTrainees = Trainee::whereHas('employment_logs', function ($query) use ($cohort,$academy) {
                    $query->where('cohort_id', $cohort->id)
                        ->where('academy_id', $academy->id)
                        ->where('status', 'Job Offer')
                        ->orderBy('created_at') // Order by the creation date to get the first employment record
                        ->take(1);
                })->count();

                $totalTrainees = Trainee::whereHas('employment_logs', function ($query) use ($cohort, $academy) {
                    $query->where('cohort_id', $cohort->id)
                        ->where('academy_id', $academy->id);
                })->count();

                $employmentRate = ($totalTrainees > 0) ? ($employedTrainees / $totalTrainees) * 100 : 0;

                $data[$academy->name][$cohort->name] = [
                    'Cohort' => $cohort->id,
                    'academy_id' => $academy->id,
                    'Total' => Trainee::where('cohort_id', 10)->where('academy_id', 10)->count(),
                    'Internship' => Trainee::where('cohort_id', 10)->where('academy_id', 10)->count(),
                    'Academy_graduates' => Trainee::where('cohort_id', 10)->where('academy_id', 10)->where('graduated', 'yes')->count(),
                    'Employed Graduates' => $employedTrainees,
                    'Employment Rate' => $employmentRate,
                ];
            }
   
        }
        $employmentRatesData = [
            ['academy' => 'Amman Academy', 'rate' => '85%'],
            ['academy' => 'Aqaba Academy', 'rate' => '92%'],
            ['academy' => 'Irbid Academy', 'rate' => '80%'],
            ['academy' => 'Zarqa Academy', 'rate' => '80%'],
            ['academy' => 'Balqa Academy', 'rate' => '80%'],
        ];
    
        $labels = [];
        $chartData = [
            'employmentRate' => [
                'labels' => [],
                'data' => [],
            ],
            'traineeChanges' => [
                'labels' => [],
                'data' => [],
            ],
        ];
        foreach ($employmentRatesData as $index => $rate) {
           
            $chartData['employmentRate']['labels'][] = $rate['academy'];
            $chartData['employmentRate']['data'][] = (int) $rate['rate'];
    
    
        }
        return view('welcome', compact('academies','data','employmentRatesData', 'chartData', 'labels'));
    }
}
