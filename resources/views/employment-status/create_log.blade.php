@extends('layouts.app')
@section('content')
  <div class="container">
    <h1>Create New Log for {{ $trainee->first_name }}</h1>

    <form action="{{ route('employment-status.logs.store', $trainee->id) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="employeeStatus" class="is-required">Employee Status</label>
            <select class="form-control" id="employeeStatus" name="status" required>
                <option value="">Select EmployementStatus</option>
                <option value="internship for employment">Internship for employment</option>
                <option value=" paid internship"> Paid internship</option>
                <option value="internship for one month">internship for one month</option>
                <option value=" internship for three month"> internship for three month</option>
                <option value="paid contract">paid contract</option>

            </select>
        </div>
        <div class="form-group">
    <label for="company">Company</label>
    <select class="form-control" id="company" name="company">
        <option value="">Select Company</option>
        <option value="01tracks">01tracks</option>
        <option value="24online">24 online</option>
        <option value="4matex">4matex</option>
        <option value="5ytechnology">5 y technology</option>
        <option value="9afi">9afi</option>
        <option value="ABCBank">ABC Bank</option>
        <option value="Abilitiez">Abilitiez</option>
        <option value="Abjad">Abjad</option>
        <option value="ABCBank">ABC Bank</option>
        <option value="Abilitiez">Abilitiez</option>
        <option value="Abjad">Abjad</option>
        <option value="ABS">ABS</option>
        <option value="AbuOdehgroup">Abu Odeh group</option>
        <option value="Abwaab">Abwaab</option>
        <option value="Acceleration">Acceleration</option>
        <option value="access2arabia">access 2 arabia</option>
        <option value="Accountly">Accountly</option>
        <option value="ADAAsApplicationsCompany">ADAA' Applications Company</option>
        <option value="AdaptiveTechSoft">Adaptive TechSoft</option>
        <option value="ADROIT">ADROIT</option>
        <option value="AgentsOnCloud">Agents On Cloud</option>
        <option value="Ahlibank">Ahli bank</option>
        <option value="AIG">AIG</option>
        <option value="AJIB">AJIB</option>
        <option value="Ajwan">Ajwan</option>
        <option value="Alfredobooks">Alfredo books</option>
        <option value="Alhajeer">Alhajeer</option>
        <option value="ALManaraInsurance">AL-Manara Insurance</option>
        <option value="AlNisrAlArabiInsurance">Al-Nisr Al-Arabi Insurance</option>
        <option value="Alocloud">Alo cloud</option>
        <option value="AlRajhibank">Al-Rajhi bank</option>
        <option value="AltShiftCreativeLLC">Alt Shift Creative LLC</option>
        <option value="Amazon">Amazon</option>
        <option value="Amideast">Amideast</option>
        <option value="AndalusiaFoundation">Andalusia Foundation</option>
        <option value="Apptrainers">App trainers</option>
        <option value="AppsWave">Apps Wave</option>
        <option value="Appzlabz">Appzlabz</option>
        <option value="AqariBank">Aqari Bank</option>
        <option value="Arabbank">Arab bank</option>
        <option value="Arab Banking Corporation (Jordan)">Arab Banking Corporation (Jordan)</option>
        <option value="Arab Insurance">Arab Insurance</option>
        <option value="Arab Jordan Investment Bank">Arab Jordan Investment Bank</option>
        <option value="Arab Jordanian Insurance Group">Arab Jordanian Insurance Group</option>
        <option value="Arab union internation insurance">Arab union internation insurance</option>
        <option value="Arabia Cell">Arabia Cell</option>
        <option value="Arabia Weather">Arabia Weather</option>
        <option value="Arabot">Arabot</option>
        <option value="ArabyAds">ArabyAds</option>
        <option value="Arxia">Arxia</option>
        <option value="Ascot">Ascot</option>
        <option value="Ashraf BanyMohammad">Ashraf BanyMohammad</option>
        <option value="ask pepper">ask pepper</option>
        <option value="Aspire">Aspire</option>
        <option value="Aspire infotech">Aspire infotech</option>
        <option value="Atomkit">Atomkit</option>
        <option value="ATS">ATS</option>
        <option value="Atypon">Atypon</option>
        <option value="August Hospitality">August Hospitality</option>
        <option value="Aumet">Aumet</option>
        <option value="Avertra">Avertra</option>
        <option value="B12 for digital services">B12 for digital services</option>
        <option value="back office for businesses (BOB)">back office for businesses (BOB)</option>
        <option value="Badee3">Badee3</option>
        <option value="Bank al Etihad">Bank al Etihad</option>
        <option value="Bank Audi">Bank Audi</option>
        <option value="Bank of Jordan">Bank of Jordan</option>
        <option value="BAU">BAU</option>
        <option value="Bayt.com">Bayt.com</option>
        <option value="Beat Technology">Beat Technology</option>
        <option value="B-ecosystems">B-ecosystems</option>
        <option value="BioLab">BioLab</option>
        <option value="Bith.tv">Bith.tv</option>
        <option value="Blessedtree">Blessedtree</option>
        <option value="BLOM">BLOM</option>
        <option value="Bluemina Citizenship & Residency">Bluemina Citizenship & Residency</option>
        <option value="BoJ">BoJ</option>
        <option value="BothOfUs">BothOfUs</option>
        <option value="Bus-consult">Bus-consult</option>

<!-- Continue adding options for all unique company names -->

    </select>
</div>


<div class="form-group">
    <label for="position">IT Position</label>
    <select class="form-control" id="position" name="position">
       <option value="position">Select Position</option>
        <option value="SoftwareEngineer">Software Engineer</option>
        <option value="DataScientist">Data Scientist</option>
        <option value="NetworkAdministrator">Network Administrator</option>
        <option value="SystemAnalyst">System Analyst</option>
        <option value="DatabaseAdministrator">Database Administrator</option>
        <!-- Add more options as needed -->
        <option value="UIUXDesigner">UI/UX Designer</option>
        <option value="ITManager">IT Manager</option>
        <option value="QAEngineer">QA Engineer</option>
        <option value="DevOpsEngineer">DevOps Engineer</option>
        <option value="BusinessAnalyst">Business Analyst</option>
        <option value="ITManager">IT Manager</option>
        <option value="ITConsultant">IT Consultant</option>
        <option value="SystemAdministrator">System Administrator</option>
        <option value="NetworkEngineer">Network Engineer</option>
        <option value="DatabaseDeveloper">Database Developer</option>
        <option value="TechnicalSupportSpecialist">Technical Support Specialist</option>
        <option value="ITTrainer">IT Trainer</option>
        <!-- Add more options as needed -->
    </select>
</div>


        <div class="form-group">
            <label for="startDate">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date">
        </div>

        <div class="form-group">
            <label for="endDate">End Date</label>
            <input type="date" class="form-control" id="end_date" name="end_date">
        </div>



        <div class="form-group">
            <label for="CreatedBy" class="is-required">CreatedBy</label>
            <select class="form-control" id="Created_by" name="created_by" required>
            <option value="created_by">Created_by</option>

                <option value="Hadeel">Hadeel</option>
                <option value=" Bayan"> Bayan</option>


            </select>
        </div>


        <!-- Add more fields as needed -->

        <button type="submit" class="btn btn-primary">Create Log</button>
    </form>
</div>
@endsection
