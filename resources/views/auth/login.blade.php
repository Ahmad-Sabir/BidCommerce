@extends('layouts.app')

    <!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
@section('content')
<div class="container">
    <div class="frame" style="height: 715px";>
        <div class="nav">
            <ul class="links">
                <li class="signin-active"><a class="btn">Sign in</a></li>
                <li class="signup-inactive"><a class="btn">Sign up </a></li>
            </ul>
        </div>
        <div ng-app ng-init="checked = false">
            <form class="form-signin" action="{{ route('login') }}" method="post" name="form">
                @csrf
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input class="form-styling @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

                <label for="password">{{ __('Password') }}</label>
                <input class="form-styling @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
                <div class="btn-animate">
                    <button type="submit" class="btn-signin">Sign in</button>

                </div>

            </form>

            <form class="form-signup" action="{{ route('register') }}">
                @csrf
                <label for="email">{{ __('Name') }}</label>
                <input type="text" class="form-styling @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <label for="password">{{ __('E-Mail Address') }}</label>
                <input type="email" class="form-styling @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <label for="password">{{ __('Password') }}</label>
                    <input type="password" class="form-styling @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                <input type="password" class="form-styling" name="password_confirmation" required autocomplete="new-password">

                <label for="email">Birthday</label>
                <input class="form-styling" type="date" name="" placeholder="">
                <div class="form-group">
                    <label>Gender</label>
                    <select class="form-styling">
                        <option></option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="btn-animate">
                    <button type="submit" class="btn-signin">Register</button>

                </div>
            </form>

            <div class="success">

            </div>
        </div>

        <div class="forgot">
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">Forgot your password?</a>
            @endif
        </div>
    </div>
</div>
@endsection
<script>
    $(function() {
        $(".btn").click(function() {
            $(".form-signin").toggleClass("form-signin-left");
            $(".form-signup").toggleClass("form-signup-left");
            $(".frame").toggleClass("frame-long");
            $(".signup-inactive").toggleClass("signup-active");
            $(".signin-active").toggleClass("signin-inactive");
            $(".forgot").toggleClass("forgot-left");
            $(this).removeClass("idle").addClass("active");
        });
    });


</script>

</body>
</html>

