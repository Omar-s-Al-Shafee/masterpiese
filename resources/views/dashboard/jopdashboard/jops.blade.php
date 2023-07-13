@extends('dashboard.layoutDash.master')

@section('content')
    <div class="oss">
        <h2 class="h2">Jops</h2>
        <div class="osssh">
            @foreach($jopsListings as $jop)
                <figure class="snip1336">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample87.jpg" alt="sample87" />
                    <figcaption>
                        <img src="{{ $jop->image }}" alt="profile-sample4" class="profile" />
                        <h2>{{ $jop->job_title }}<span></span></h2>
                        <p>{{ $jop->job_description }}</p>
                        <form action="{{ route('jopdashboard.destroy',['id' =>$jop->id ?? 0] ) }}" method="post">
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
                </figure>
            @endforeach
        </div>
    </div>
@endsection
