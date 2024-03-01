@extends('layouts.app')
@section('content')
  <div class="container-fluid">
    <h1>Logs List</h1>
  </div>
  <div class="container-fluid">
  <div id="localContainer" class="o-nav-local navbar-light">
    <nav role="navigation" class="container-fluid"  aria-label="News categories navigation" fixed-top>
    </nav>
  </div>
  <div class="scrollable-table">
    <table id="news-table" class="table tablesorter mb-5">
    <a href="{{ route('employment-status.logs.create', $trainee->id) }}" class="btn btn-sm btn-success">Create Log</a>

      <thead class="cf">
        <tr>
        <th scope="col" class="header">ID</th>
        <th scope="col" class="header">First_Name</th>
        <th scope="col" class="header">Employee Status</th>
        <th scope="col" class="header">Company</th>
        <th scope="col" class="header">Position</th>
        <th scope="col" class="header">Start_date</th>
        <th scope="col" class="header">End_date</th>
        <th scope="col" class="header">Created_At</th>
       <th scope="col" class="header">Updated_At</th>
       <th scope="col" class="header">Created_by</th>
        <th scope="col" class="header">Action</th>

        </tr>
      </thead>
      <tbody>
      @foreach($logs as $log)
    <tr>
        <td data-label="ID">{{ $log->id }}</td>
        <td data-label="First_Name">{{ $trainee->first_name }}</td>
        <td data-label="Employee_status">{{ $log->status }}</td>
        <td data-label="Company">{{ $log->company }}</td>
        <td data-label="Position">{{ $log->position }}</td>
        <td data-label="Start_date">{{ $log->start_date }}</td>
        <td data-label="End_date">{{ $log->end_date }}</td>
        <td data-label="Created_at">{{ $log->created_at }}</td>
        <td data-label="Updated_at">{{ $log->updated_at }}</td>
        <td data-label="Created_by">{{ $log->created_by }}</td>


                    <td>
                        <!-- Add a form for deletion -->
                        <form action="{{ route('employment-status.logs.destroy', [$trainee->id, $log->id]) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this log?')">Delete</button>
                        </form>
                    </td>

            @csrf
        </td>
    </tr>
@endforeach

      </tbody>

    </table>

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

  </div>

@endsection
