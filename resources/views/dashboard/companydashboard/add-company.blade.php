@extends('dashboard.layoutDash.master')
@section('content')

<div class="box2">
    <div class="box-company">
        <div class="form-company">
            <h3>Add Company</h3>
            <form action="{{ route('companydashboard.store') }}" method="POST">
                @csrf
                <div class="form-company1">
                    <div class="input-company">
                        <div class="input-box">
                            <input type="text" id="company_name" name="company_name" required="required" />
                            <span>Name</span>
                            <i></i>
                        </div>
                        <div id="full-name-error" class="error-message"></div>
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
                        <div class="input-box">
                            <span class="icon_login"></span>
                            <input type="password" id="confirm-password" name="confirm-password" required="required">
                            <span>Confirm Password</span>
                            <i></i>
                        </div>
                    </div>
                    <div class="input-company">
                        <div class="input-box">
                            <input type="text" id="about" name="about" required="required" />
                            <span>About</span>
                            <i></i>
                        </div>
                        <div id="about-error" class="error-message"></div>
                        <div class="input-box">
                            <input type="text" id="country" name="country" required="required" />
                            <span>Country</span>
                            <i></i>
                        </div>
                        <div id="country-error" class="error-message"></div>
                        <div class="input-box">
                            <input type="text" name="major" id="major" required="required" />
                            <span>Major</span>
                            <i></i>
                        </div>
                        <div id="major-error" class="error-message"></div>
                        <button type="submit" value="add-company">Add Company</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
