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
                      <th scope="col" class="header">ID</th>
                      <th scope="col" class="header">First_Name</th>
                      <th scope="col" class="header">Last_Name</th>
                      <th scope="col" class="header">Email</th>
                      <th scope="col" class="header">Mobile</th>
                      <th scope="col" class="header">Graduated</th>
                      <th scope="col" class="header">Certificat_Type</th>
                      <th scope="col" class="header">Nationality</th>
                      <th scope="col" class="header">Country</th>
                      <th scope="col" class="header">Passport_Number</th>
                      <th scope="col" class="header">National_Id</th>
                      <th scope="col" class="header">Birthdate</th>
                      <th scope="col" class="header">Gender</th>
                      <th scope="col" class="header">Martial_Status</th>
                      <th scope="col" class="header">Education</th>
                      <th scope="col" class="header">Educational_Status</th>
                      <th scope="col" class="header">Field</th>
                      <th scope="col" class="header">Educational_Background</th>
                      <th scope="col" class="header">City</th>
                      <th scope="col" class="header">Address</th>
                      <th scope="col" class="header">Id_Img</th>
                      <th scope="col" class="header">Academy_Id</th>
                      <th scope="col" class="header">Cohort_Id</th>
                      <th scope="col" class="header">Personal_Img</th>
                      <th scope="col" class="header">Vaccination_Img</th>
                      <th scope="col" class="header">Linkedin</th>
                      <th scope="col" class="header">Github</th>
                      <th scope="col" class="header">Created_At</th>
                      <th scope="col" class="header">Log</th>
                      <th scope="col" class="header">Actions</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach($trainees as $trainee)
                      <tr>
                          <td data-label="ID">{{$trainee->id}}</td>
                          <td data-label="First_Name">{{$trainee->first_name}}</td>
                          <td data-label="Last_Name">{{$trainee->last_name}}</td>
                          <td data-label="Email">{{$trainee->email}}</td>
                          <td data-label="Mobile">{{$trainee->mobile}}</td>
                          <td data-label="Graduated">{{$trainee->graduated}}</td>
                          <td data-label="Certificat_Type">{{$trainee->certificat_type}}</td>
                          <td data-label="Nationality">{{$trainee->nationality}}</td>
                          <td data-label="Country">{{$trainee->country}}</td>
                          <td data-label="Passport_Number">{{$trainee->passport_number}}</td>
                          <td data-label="National_Id">{{$trainee->national_id}}</td>
                          <td data-label="Birthdate">{{$trainee->birthdate}}</td>
                          <td data-label="Gender">{{$trainee->gender}}</td>
                          <td data-label="Martial_Status">{{$trainee->martial_status}}</td>
                          <td data-label="Education">{{$trainee->education}}</td>
                          <td data-label="Educational_Status">{{$trainee->educational_status}}</td>
                          <td data-label="Field">{{$trainee->field}}</td>
                          <td data-label="Educational_Background">{{$trainee->educational_background}}</td>
                          <td data-label="City">{{$trainee->city}}</td>
                          <td data-label="Address">{{$trainee->address}}</td>
                          <td data-label="Id_Img">{{$trainee->id_img}}</td>
                          <td data-label="Academy_Id">{{$trainee->academy->name}}</td>
                          <td data-label="Cohort_Id">{{$trainee->cohort->name}}</td>
                          <td data-label="Personal_Img">{{$trainee->personal_img}}</td>
                          <td data-label="Vaccination_Img">{{$trainee->vaccination_img}}</td>
                          <td data-label="git_hub">{{$trainee->git_hub}}</td>
                          <td data-label="linkedin">{{$trainee->linkedin}}</td>
                          <td data-label="Created_At">{{$trainee->created_at}}</td>
                          <td>
                              <a href="{{ route('employment-status.logs', ['id' => $trainee->id]) }}" class="btn btn-sm btn-info">Logs</a>
                              @csrf

                          </td>

                          <td class="align-middle" style="display:inline-flex">
                              <a href="{{route('employment-status.edit', $trainee->id)}}" class="btn btn-sm btn-primary">Edit</a>
                              <form action="{{ route('employment-status.destroy', $trainee->id) }}" method="POST" style="display:inline">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this trainee?')">Delete</button>
                              </form>
                          </td>
                      </tr>
                  @endforeach

                  </tbody>

              </table>

          </div>
      </div>
  <div class="scrollable-table">

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
  <div class="tabpanel">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" >
                <a  aria-controls="" role="tab" data-toggle="tab">test</a
            </li>

       
    
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">

          <div role="tabpanel" class="tab-pane active"  class="tab-pane" >

                <h2>test</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim obcaecati praesentium repellat. Est explicabo facilis fuga illum iusto, obcaecati saepe voluptates! Dolores eaque porro quaerat sunt totam ut, voluptas.</p>

            </div>
        
    </div>

</div>
@endsection
