@extends('user.layouts.layout')

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

                <form class="form-horizontal" method="POST" action="{{ route('admin.password.email') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <div class="form-group">
                            <label for="email" class="control-label">E-Mail Address</label>
                            <input id="email" placeholder="E-Mail Address" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-danger">
                            Send Password Reset Link
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
