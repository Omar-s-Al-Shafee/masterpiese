@extends('landingPage.layoutLand.master')

@section('content')
    <div class="container">
        <div class="box">
            <div class="form">
                <form action="{{ route('login') }}" method="post" onsubmit="return validateForm()">
                    @csrf
                    <h2>Sign in</h2>
                    <div class="input-box">
                        <input type="text" id="email" name="email" required="required" />
                        <span>Email</span>
                        <i></i>
                    </div>
                    <div id="email-error" class="error-message"></div>
                    <div class="input-box">
                        <input type="password" name="password" id="password" required="required" />
                        <span>Password</span>
                        <i></i>
                    </div>
                    <div id="password-error" class="error-message"></div>
                    <div class="links">
                        <a href="{{ route('joinNow') }}">Signup</a>
                    </div>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
