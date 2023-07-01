@extends('dashboard.layoutDash.master')
@section('content')


            <div class="box1">
                <div class="box">
                  <div class="form">
                    <form action=" {{ (route('userdashboard.update',$user->id)) }}" method="post" ">
                      @csrf
                      @method('PUT')
                    <h3>Edit User</h3>
                    <div class="input-box">
                      <input type="text" id="full-name" name="full-name" value="{{ $user->name }}" required="required" />
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
                        <input type="password" id="confirm-password"  name="confirm-password" required="required">
                        <span>Confirm Password</span>
                        <i ></i>
                      </div>
                    <div class="links">
                      
                      
                    </div>
                    <button type="submit" value="Edit-user" >Edit User</button>
                  </form>
                  </div>
                </div>
            </div>

@endsection