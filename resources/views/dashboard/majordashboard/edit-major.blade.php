@extends('dashboard.layoutDash.master')
@section('content')



            <div class="box1">
                <div class="box">
                  <div class="form">
                    <form action="{{ route('dashboard.update', $majors->id) }}" method="post" onsubmit=" validateMajor()">
                      @csrf
                      @method('PUT')
                    <h3>Add University</h3>
                    <div class="input-box">
                      <input type="text" id="name-major" name="name-major" value="{{ $majors->name }}" required="required" />
                      <span>Name Major</span>
                      <i></i>
                    </div>
                    <div id="name-major-error" class="error-message"></div>
                    <div class="input-box">
                      <select id="university-name" name="university-name" required="required">
                        <option value="" selected disabled>Select University</option>
                        @foreach($universities as $university)
                            <option value="{{ $university->id }}">{{ $university->name }}</option>
                        @endforeach
                    </select>
                        <!-- <span>Name University</span> -->
                        <i></i>
                      </div>                      
                    <div id="university-name-error" class="error-message"></div>
                    <div class="input-box">
                        <input type="file" name="image" id="imageInput"  />
                        <span>Major Logo</span>
                        <i></i>
                      </div>
                      <div id="image-error" class="error-message"></div>
                    
                    
                    <div class="links">
                      
                      
                    </div>
                    <button type="submit" value="edit-major" >Edit Major</button>
                  </form>
                  </div>
                </div>
            </div>

@endsection