@extends('dashboard.layoutDash.master')

@section('content')
<div class="box2">
    <div class="box-company">
        <div class="form-company">
            <h3>Edit Admin Profile</h3>
            <form action="{{ route('admin-profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-company1">
                    <div class="input-company">
                        <div class="input-box">
                            <input type="text" id="name" name="name" value="{{ $user->name }}" required="required" />
                            <span>Name</span>
                            <i></i>
                        </div>
                        <div id="full-name-error" class="error-message"></div>
                        <div class="input-box">
                            <input type="text" id="email" name="email" value="{{ $user->email }}" required="required" />
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
                    <div class="input-box">
                        <input type="file" name="image" id="imageInput" />
                        <span>Profile Photo</span>
                        <i></i>
                    </div>
                    <button type="submit" value="edit-admin-profile">Edit Profile</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
