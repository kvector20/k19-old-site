@extends('user.layouts.layout')

@section('title')
Highway
@endsection

@section('head')
@endsection

@section('body')
<div class="container pt-5">
	<div class="row align-items-center pb-5">
			<div class="col-12 col-md-8 text-center ml-auto mr-auto">
                <h1 style="font-family: 'Courgette', cursive;"><span style="color:red">High</span>way</h1>
			</div>

		<div class="col-12 col-md-8 ml-auto mr-auto border">

			@foreach ($errors->all() as $error)
				<div class="card bg-danger p-3 text-white">{{ $error }}</div>
            @endforeach

            @if (session('status'))
				<div class="card bg-success p-3 text-white">{{ session('status') }}</div>
			@endif
            
			<form action="{{ route('events.highway19') }}" enctype="multipart/form-data" method="POST" class="mb-5">
                @csrf
                
				<div class="form-group">
					<label for="">Full Name</label>
					<input type="text" name="name" placeholder="Full Name" required value="{{ old('name') }}" class="form-control">
					<small class="text-muted">Write your full name</small>
                </div>
                
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" name="email" placeholder="Email" required value="{{ old('email') }}" class="form-control">
					<small class="text-muted">Write valid email</small>
                </div>
                
				<div class="form-group">
					<label for="">Mobile Number</label>
					<input type="tel" name="phone" placeholder="Mobile Number" required value="{{ old('phone') }}" class="form-control">
					<small class="text-muted">Write valid mobile number</small>
                </div>

                <div class="form-group">
                    <label for="">National ID</label>
                    <input type="text" name="national_id" placeholder="National ID" required value="{{ old('national_id') }}" class="form-control" minlength="14" maxlength="14">
                    <small class="text-muted">Write your national ID like: 12345678912345 <b>it must be 14 numbers</b></small>
                </div>
                
				<div class="form-group">
					<label for="">Facebook Link</label>
					<input type="url" name="facebook_link" placeholder="Facebook Link" required value="{{ old('facebook_link') }}" class="form-control">
					<small class="text-muted">Write link like this <a href="#">https://www.facebook.com/your.name</a></small>
                </div>
                
				<div class="form-group">
					<label for="">University</label>
					<input type="text" name="university" placeholder="University" required value="{{ old('university') }}" class="form-control">
                </div>
                
				<div class="form-group">
					<label for="">Faculty</label>
					<input type="text" name="faculty" placeholder="Faculty" required value="{{ old('faculty') }}" class="form-control">
                </div>
                
				<div class="form-group">
					<label for="">Department</label>
					<input type="text" name="department" placeholder="Department" required value="{{ old('department') }}" class="form-control">
                </div>
                
				<div class="form-group">
					<label for="">Academic Year</label>
					<input type="text" name="academic_year" placeholder="Academic Year" required value="{{ old('academic_year') }}" class="form-control">
					<small class="text-muted">Academic year like first, second, perpratory ...etc.</small>
                </div>
                
                <div class="form-group">
                    <label for="">Internship</label>
                    <select name="session" required class="form-control" id="">
                        <option value="">Choose Internship</option>
                        @foreach ($sessions as $session)
                            <option
                            @if ($session->id == old('session'))
                                selected
                            @endif
                            value="{{ $session->id }}">{{ $session->name }} - {{ $session->company }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Upload your CV</label>
                    <input type="file" name="cv" placeholder="" required accept="application/pdf" class="form-control">
                    <small class="text-muted">Make sure that file is PDF.</small>
                </div>

                <div class="form-group">
                    <label for="">Why do you apply for this internship?</label>
                    <textarea type="text" name="why" placeholder="Why do you apply for this internship?" required class="form-control" >{{ old('why') }}</textarea>
                </div>

			    <div class="blockquote-footer">
			        <small>
			          	For any questions go for <a href="https://www.facebook.com/kvectorfoundation/">our page</a> and ask us.
			        </small>
			    </div>
			    <div class="blockquote-footer">
			        <small>
			          	You can also contact us and leave your feedback <a href="{{ route('contact') }}">contact us</a>.
			        </small>
			    </div>
			    <div class="blockquote-footer">
			        <small>
			          	Make sure that all your data is correct before submitting the form.
			        </small>
			    </div>
				<button class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
@endsection

@section('footer')

@endsection