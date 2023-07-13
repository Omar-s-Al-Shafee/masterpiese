@extends('dashboard.layoutDash.master')
@section('content')

<div class="box1">
    <div class="box">
        <div class="form">
            <form action="{{ route('majordashboard.store') }}" method="post" enctype="multipart/form-data" onsubmit="validateMajor()">
                @csrf
                <h3>Add University</h3>
                <div class="input-box">
                    <input type="text" id="name-major" name="name-major" required="required" />
                    <span>Name Major</span>
                    <i></i>
                </div>
                <div id="name-major-error" class="error-message"></div>
                <div class="input-box">
                    <select id="university-name" name="university-name" required="required" >
                        <option value="" selected hidden disabled>Select University</option>
                        @foreach($universities as $university)
                            <option style="color: black" value="{{ $university->id }}">{{ $university->name }}</option>
                        @endforeach
                    </select>
                    <!-- <span>Name University</span> -->
                    <i></i>
                </div>
                <div id="university-name-error" class="error-message"></div>
                <div class="input-box" style="margin-top: 40px">
                    <input type="file" name="image" id="imageInput"  />
                    <span>Major Logo</span>
                    <i></i>
                </div>
                <div id="image-error" class="error-message"></div>
                <div class="links">
                    
                </div>
                <button type="submit" value="add-major">Add Major</button>
            </form>
        </div>
    </div>
</div>

@endsection
