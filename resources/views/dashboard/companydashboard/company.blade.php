@extends('dashboard.layoutDash.master')
@section('content')

            <a href="{{ route('companydashboard.add-company') }}" class="booking_now">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Add Company
              </a>

            <!-- Typography Start -->
            <div class="oss">
                <h2 class="h2">Company</h2>
                <div class="osssh">
                  @foreach ($companies as $Company )
                    
                  
                    <figure class="snip1336 ">
                        <img src="{{ $Company->img_cover }}" alt="sample87" />
                        <figcaption>
                        <img src="{{ $Company->img_profile }}" alt="profile-sample4" class="profile" />
                        <h2>{{ $Company->company_name }}<span>{{ $Company->industry }}</span></h2>
                        <p>{{ $Company->description }}</p>
                        <a href="{{ route('dashboard.edit-company',$company->id) }}">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Edit
                          </a>
                          <form action="{{ route('dashboard.destroy',$company->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Delete
                          </button>
                        </form>
                          
                        </figcaption>
                    @endforeach
                    </div>
            </div>
            <!-- Typography End -->

@endsection