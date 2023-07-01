@extends('dashboard.layoutDash.master')
@section('content')

<div class="box1">
    <div class="box">
        <div class="form">
            <form action="{{ route('dashboard.store') }}" method="post" onsubmit="validateUser()">
                @csrf
                <h3>Add User</h3>
                <div class="input-box">
                    <input type="text" id="name" name="name" required="required" />
                    <span>Name</span>
                    <i></i>
                </div>
                <div id="name-error" class="error-message"></div>
                <div class="input-box">
                    <input type="email" id="email" name="email" required="required" />
                    <span>Email</span>
                    <i></i>
                </div>
                <div id="email-error" class="error-message"></div>
                <div class="input-box">
                    <input type="password" id="password" name="password" required="required" />
                    <span>Password</span>
                    <i></i>
                </div>
                <div id="password-error" class="error-message"></div>
                <div class="links">
                    
                </div>
                <button type="submit" value="add-user">Add User</button>
            </form>
        </div>
    </div>
</div>

@endsection
