@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h1>Job Coach Dashboard</h1>
    </div>

    <div id="localContainer" class="o-nav-local navbar-light">
        <nav role="navigation" class="container-fluid" aria-label="News categories navigation">
            <ul class="nav">
                {{--                @foreach($academies as $academy)--}}
                {{--                <li class="nav-item">--}}
                {{--                    <a class="nav-link" href="#">{{$academy->name}}</a>--}}
                {{--                </li>--}}
                {{--                @endforeach--}}
            </ul>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
    <div class="row">

        <!-- Total Trainees -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Total Trainees</h5>
                    <p class="card-text">300</p>
                </div>
            </div>
        </div>

        <!-- Employment Rate -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Employment Rate</h5>
                    <p class="card-text">60%</p>
                </div>
            </div>
        </div>

        <!-- number of academies -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Total Academies</h5>
                    <p class="card-text">5</p>
                </div>
            </div>
        </div>
        <!-- number of academies -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Available students</h5>
                    <p class="card-text">20</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">


        <div class="card mb-4 border-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 py-lg-5">
                        <h4>Academy Employment Rates</h4>
                        <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Academy</th>
                            <th>Total Employment Rate</th>
                        </tr>
                    </thead>
                    <tbody id="employmentRatesTable">
                        @foreach ($employmentRatesData as $rate)
                        <tr>
                            <td>{{ $rate['academy'] }}</td>
                            <td>{{ $rate['rate'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                    </div>

                    <div class="col-6">
                        <!-- Placeholder for the Jordan map  -->
                        <div id="map" class="map-orange"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Time Trends</h4>
                        <p class="card-text">Employment rate trends and changes in the number of trainees over time.</p>
                        <div class="row">
                            <div class="col-6">
                                <!-- Chart for Employment Rate Trends -->
                                <canvas id="employmentRateChart" width="400" height="200"></canvas>
                            </div>
                            <div class="col-6">
                                <!-- Chart for Changes in the Number of Trainees -->
                                <canvas id="traineeChangesChart" width="400" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($data as $academyName => $cohorts)
                    <div class="col-6">
                        <h2>{{ $academyName }}</h2>
                        <table class="table table-sm">
                            <thead>

                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Cohort</th>
                                <th scope="col">Employed Graduates</th>
                                <th scope="col">Employment Rate</th>
                            </tr>
                            </thead>
@foreach ($cohorts as $cohortName => $info)
                                <tr>
                                    <td></td>
                                    <td>{{ $cohortName }}</td>
                                    <td>{{ $info['Employed Graduates'] }}</td>
                                    <td>{{ $info['Employment Rate'] }}%</td>
                                    <td><a class="btn btn-primary btn-sm" href="{{ route('trainees.index', ['academy_id' => $info['academy_id'],'cohort_id' => $info['Cohort']]) }}" >View Trainees</a></td>
                                    <td><a class="btn btn-primary btn-sm" href="{{ route('traineeLog.index', ['academy_id' => $info['academy_id'],'cohort_id' => $info['Cohort']]) }}">Trainees Log</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                @endforeach
            </div>
            <!-- Modal -->
            <div class="modal fade" id="confirm-dialog" role="dialog" aria-labelledby="myModalLabel" tabindex="-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title h4" id="myModalLabel">Confirm deletion</h2>
                            <!-- Boosted mod: using visually hidden text instead of aria-label -->
                            <button type="button" class="close" data-dismiss="modal">
                                <span class="sr-only">Close confirmation modal</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>If you delete this entry, all information will be permanently lost. Are you sure?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
            @section('scripts')
            <script>
        var employmentRatesData = @json($employmentRatesData);
        var labels = @json($labels);
        var chartData = @json($chartData);

        // Employment Rate Chart
        var ctxEmploymentRate = document.getElementById('employmentRateChart').getContext('2d');
        var employmentRateChart = new Chart(ctxEmploymentRate, {
            type: 'bar', // Change to 'line' or other chart type as needed
            data: {
                labels: chartData.employmentRate.labels,
                datasets: [{
                    label: 'Employment Rate',
                    data: chartData.employmentRate.data,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Customize as needed
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                // Customize chart options as needed
            }
        });
</script>
<script>
           // Ensure DOM is fully loaded
window.onload = function() {
    // Trainee Changes Chart
    var ctxTraineeChanges = document.getElementById('traineeChangesChart').getContext('2d');
    var traineeChangesChart = new Chart(ctxTraineeChanges, {
        type: 'line', // Change to 'bar' or other chart type as needed
        data: {
            labels: chartData.traineeChanges.labels,
            datasets: [{
                label: 'Trainee Changes',
                data: chartData.traineeChanges.data,
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                fill: false
            }]
        },
        options: {} // Simplified options, you can gradually add them back
    });
};

    </script>
                <script src="{{asset('assets/js/map-data.js')}}"></script>
                <script src="https://orangecodingacademy.com/layout/js/countrymap.js"></script>

@endsection
