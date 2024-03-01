@extends('layouts.app')
@section('content')
  <div class="container-fluid">
    <h1>Trainees List</h1>
  </div>
  <div class="container">
  <div id="localContainer" class="o-nav-local navbar-light">
    <nav role="navigation" class="container-fluid"  aria-label="News categories navigation" fixed-top>
    </nav>
  </div>
      <div class="row">
          <div class="col-12">
              <table id="news-table" class="table table-sm table-responsive">

                  <thead class="cf">
                  <tr>
                      <!-- <th scope="col" class="header">ID</th> -->
                      <th scope="col" class="header">First_Name</th>
                      <th scope="col" class="header">Last_Name</th>
                       <th scope="col" class="header">Student Status</th>
                      <th scope="col" class="header">Company</th>
                      <th scope="col" class="header">Start Date</th>
                     <th scope="col" class="header">End Date</th>
                     <th scope="col" class="header">Academy_Id</th>
                      <th scope="col" class="header">Cohort_Id</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($trainees as $trainee)
                      <tr>
                          <td data-label="ID">{{ $trainee->first_name }}</td>
                          <td data-label="ID">{{ $trainee->last_name }}</td>
                          @foreach ($trainee->employment_logs as $log)
                          <td data-label="ID">{{$log->status }}</td>
                          <td data-label="ID">{{$log->company }}</td>
                          <td data-label="ID">{{$log->start_date }}</td>
                          <td data-label="ID">{{$log->end_date }}</td>
                          <td data-label="ID">{{$log->academy_id}}</td>
                          <td data-label="ID">{{$log->cohort_id}}</td>
                          @endforeach
                         </tr>
                  @endforeach

                  </tbody>

              </table>

          </div>
      </div>
  <div class="scrollable-table">

   
@endsection
