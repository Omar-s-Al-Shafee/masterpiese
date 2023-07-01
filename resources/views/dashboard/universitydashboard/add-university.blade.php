@extends('dashboard.layoutDash.master')
@section('content')

<div class="box1">
    <div class="box">
        <div class="form">
            <form action="{{ route('dashboard.store') }}" method="post" onsubmit="validateUniversity()">
                @csrf
                <h3>Add University</h3>
                <div class="input-box">
                    <input type="text" id="name-university" name="name-university" required="required" />
                    <span>Name University</span>
                    <i></i>
                </div>
                <div id="name-university-error" class="error-message"></div>
                <div class="input-box">
                    <input type="text" id="location" name="location" required="required" />
                    <span>Location</span>
                    <i></i>
                </div>
                <div id="location-error" class="error-message"></div>
                <div class="input-box">
                    <input type="file" name="image" id="imageInput"  />
                    <span>University Logo</span>
                    <i></i>
                </div>
                <div id="image-error" class="error-message"></div>
                <div class="links">
                    
                </div>
                <button type="submit" value="add-university" >Add University</button>
            </form>
        </div>
    </div>
</div>

@endsection
