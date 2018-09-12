<div class="tab-pane active" id="info">
    <h3>Your profile info:</h3>

    <div>
      <span class="h4">Personal Info:</span>
      <a href="{{ route('admin.info.edit') }}" class="btn btn-danger btn-sm pull-right">Edit Personal Info</a>
    </div>
    <div style="clear: both;"></div>
    <div class="row">
      @if (Auth::user()->personalInfo)
        <div class="col-sm-2 text-bold">Phone:</div>
        <div class="col-sm-10">
          {!! Auth::user()->personalInfo->phone !!}
        </div>

        <div class="col-sm-2 text-bold">Date of birth:</div>
        <div class="col-sm-10">
          {!! Auth::user()->personalInfo->date_of_birth !!}
        </div>

        <div class="col-sm-2 text-bold">Address:</div>
        <div class="col-sm-10">
          {!! Auth::user()->personalInfo->address !!}
        </div>

        <div class="col-sm-2 text-bold">Objectives:</div>
        <div class="col-sm-10">
          {!! Auth::user()->personalInfo->objectives !!}
        </div>
      @endif
    </div>
  
    <hr>

    <div>
      <span class="h4">Experience:</span>
      <a href="{{ route('admin.experience.edit') }}" class="btn btn-danger btn-sm pull-right">Edit Experience</a>
    </div>
    <div style="clear: both;"></div>
    <div class="row">
      @if (Auth::user()->experience)
        <div class="col-sm-2 text-bold">Experience:</div>
        <div class="col-sm-10">
          {!! Auth::user()->experience->experience !!}
        </div>

        <div class="col-sm-2 text-bold">Skills:</div>
        <div class="col-sm-10">
          {!! Auth::user()->experience->skills !!}
        </div>

        <div class="col-sm-2 text-bold">Courses:</div>
        <div class="col-sm-10">
          {!! Auth::user()->experience->courses !!}
        </div>

        <div class="col-sm-2 text-bold">Hobbies:</div>
        <div class="col-sm-10">
          {!! Auth::user()->experience->hobbies !!}
        </div>
      @endif
    </div>

    <hr>

    <div>
      <span class="h4">Education:</span>
      <a href="{{ route('admin.education.edit') }}" class="btn btn-danger btn-sm pull-right">Edit Education</a>
    </div>
    <div style="clear: both;"></div>
    <div class="row">
      @if (Auth::user()->education)
        <div class="col-sm-2 text-bold">Academic year:</div>
        <div class="col-sm-10">
          {!! Auth::user()->education->academic_year !!}
        </div>

        <div class="col-sm-2 text-bold">University:</div>
        <div class="col-sm-10">
          {!! Auth::user()->education->university !!}
        </div>

        <div class="col-sm-2 text-bold">Faculty:</div>
        <div class="col-sm-10">
          {!! Auth::user()->education->faculty !!}
        </div>

        <div class="col-sm-2 text-bold">Department:</div>
        <div class="col-sm-10">
          {!! Auth::user()->education->department !!}
        </div>
      @endif
    </div>    

  </div>