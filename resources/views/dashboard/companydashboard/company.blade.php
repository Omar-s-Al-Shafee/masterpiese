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
                  @foreach ($companies as $company)
    <figure class="snip1336">
        <img src="{{ $company->img_cover }}" alt="sample87" />
        <figcaption>
            <img src="{{ $company->img_profile }}" alt="profile-sample4" class="profile" />
            <h2>{{ $company->company_name }}<span>{{ $company->industry }}</span></h2>
            <p>{{ $company->description }}</p>
            <div class="flex">
                <a href="{{ route('companydashboard.edit-company',['id' => $company->company_id  ] ) }}">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Edit
                </a>
                <form class="form1" action="{{ route('companydashboard.destroy', ['id' => $company->company_id]) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      Delete
                  </button>
              </form>
              
            </div>
        </figcaption>
    </figure>
@endforeach

                    </div>
            </div>
            <!-- Typography End -->

@endsection