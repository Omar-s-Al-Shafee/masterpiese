@extends('dashboard.layoutDash.master')
@section('content')

<div class="box1">
    <div class="box">
        <div class="form">
            <form action="{{ route('universitydashboard.update', $university->id) }}" method="post">
                @csrf
                @method('PUT')
                <h3>Edit University</h3>
                <div class="input-box">
                    <input type="text" id="name-university" name="name_university" required="required" />
                    <span>Name University</span>
                    <i></i>
                </div>
                <div id="name-university-error" class="error-message"></div>
                <div class="input-box" style="margin-top: 10px">
                    <input type="text" id="location" name="location" required="required" />
                    <span>Location</span>
                    <i></i>
                </div>
                <div id="location-error" class="error-message"></div>
                <div class="input-box" style="margin-top: 40px">
                    <input type="file" name="image" id="image" />
                    <span>University Logo</span>
                    <i></i>
                </div>
                <div id="image-error" class="error-message"></div>
                <div class="links">
                    
                </div>
                <button type="submit" value="add-university">Edit University</button>
            </form>
        </div>
    </div>
</div>

@endsection
