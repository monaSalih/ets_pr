<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\EmployeeLog;
use App\Models\Trainee;
    class EmploymentLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee_logs = EmployeeLog::paginate(10);
        return view('employment-status.employment_log', compact('employee_logs'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee_logs = EmployeeLog::findOrFail($id);
        //dd($trainee);
        return view('employment-status.employment_edit', compact('employee_logs'));
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
        $employee_logs = EmployeeLog::findOrFail($id);
        $employee_logs->update($request->all());
        return redirect()->back()->with('success', 'Logs updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        
        $employee_logs = EmployeeLog::findOrFail($id);
    
        $employee_logs->delete();

    
        return redirect()->back()->with('success', 'logs deleted successfully');
    }
}
