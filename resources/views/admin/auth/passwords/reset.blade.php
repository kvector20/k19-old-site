@extends('layouts.layout')

@section('title')
    Admin Reset Password
@endsection

@section('head')

@endsection

@section('body')

    <div class="container">
        <div class="row align-items-center full">
            <div class="col-md-5 ml-auto mr-auto">
                @if (session('status'))
                    <div class="card text-white bg-info mb-3">
                        <div class="card-header">{{ session('status') }}</div>
                    </div>
                @endif
                @if ($errors->has('status'))
                    <div class="card text-white bg-danger mb-3">
                        <div class="card-header">{{ $errors->first('status') }}</div>
                    </div>
                @endif

                @foreach ($errors->all() as $error)
                    <div class="card text-white bg-danger mb-3">
                        <div class="card-header">{{ $error }}</div>
                    </div>
                @endforeach
                <h2 class="text-center">Admins Reset Password</h2>
            <form class="form-horizontal" method="POST" action="{{ route('admin.password.request') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">
                        <label for="email" class="control-label">E-Mail Address</label>
                        <input id="email" type="email" class="form-control" placeholder="E-Mail Address" name="email" value="{{ $email or old('email') }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label">Password</label>
                        <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="control-label">Confirm Password</label>
                        <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-danger">
                            Reset Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('footer')

    <script>
        $(".full").height($(window).height() - $("footer").height() - $('nav').height() - 29);
        $(window).on("resize", function() {
            $(".full").height($(window).height() - $("footer").height() - $('nav').height() - 29);
        });
    </script>

@endsection
