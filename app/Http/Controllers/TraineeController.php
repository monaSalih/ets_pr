<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainee;
use App\Models\EmploymentLog;
use App\Models\Cohort;
use App\Models\Academy;
use Illuminate\Support\Facades\DB;

class TraineeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



     public function index($academy_id,$cohort_id)
     {
        $cohort = Cohort::findOrFail($cohort_id);
        $academy= Academy::findOrFail($academy_id);
        $trainees = Trainee::where('cohort_id', $cohort_id)->where('academy_id', $academy_id)->paginate(10);
       return view('employment-status.index', compact('trainees'));

     }
     public function traineeLog($academy_id,$cohort_id)
{   
        
    $trainees = Trainee::where('academy_id', $academy_id)
    ->where('cohort_id', $cohort_id)
    ->with(['employment_logs' => function ($query)use ($academy_id,$cohort_id) {
        
        $query->where('status', 'Internship')->where('academy_id', $academy_id)
        ->where('cohort_id', $cohort_id);
    }])
    ->get();
        return view('employment-status.employment_log_status',compact('trainees'));
    }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         //
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
        $trainee = Trainee::findOrFail($id);
        $cohortId = $trainee->cohort->id;

        return view('trainees.show', compact('trainee', 'cohortId'));
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $trainee = Trainee::findOrFail($id);
         //dd($trainee);
         return view('employment-status.edit', compact('trainee'));

     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {

         $trainee = Trainee::findOrFail($id);
         $trainee->update($request->all());
         return redirect()->back()->with('success', 'trainees updated successfully');

     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $trainee = Trainee::findOrFail($id);

         $trainee->delete();

         return redirect()->back()->with('success', 'Trainee deleted successfully');
     }





     public function logs($id)
     {

        $logs = EmploymentLog::where('trainee_id', $id)->get();
        $trainee = Trainee::findOrFail($id);

        return view('employment-status.logs', compact('logs', 'trainee'));
       }


       public function createLog($id)
       {
           $trainee = Trainee::findOrFail($id);
             return view('employment-status.create_log', compact('trainee'));
       }

       public function storeLog(Request $request, $id)
       {
           // Validate and store your log entry here
           $trainee = Trainee::findOrFail($id);
           $logEntryData = $request->all();
           $logEntryData['trainee_id'] = $trainee->id;
           $logEntryData['academy_id'] = $trainee->academy_id;
           $logEntryData['cohort_id'] = $trainee->cohort_id;
           EmploymentLog::create($logEntryData);
        // dd($logEntryData);



           return redirect()->route('employment-status.logs', $id)->with('success', 'Log entry created successfully');
       }
        public function destroyLog($traineeId, $logId)
        {
            $log = EmploymentLog::findOrFail($logId);
            $log->delete();

            return redirect()->back()->with('success', 'Trainee deleted successfully');
        }

 }
