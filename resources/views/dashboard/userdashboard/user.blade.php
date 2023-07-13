@extends('dashboard.layoutDash.master')

@section('content')
    <!-- Add the necessary HTML markup for the pop-up form -->
            <a href="{{ route('userdashboard.add-user') }}" class="booking_now">

        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Add User
    </a>

    <!-- Button Start -->
    <div class="oss">
        <h2 class="h2">User</h2>
        <div class="osssh">
            @foreach ($users as $user)
                {{-- @if ($userCount < 3) --}}
                    <figure class="snip1336">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample87.jpg" alt="sample87" />
                        <figcaption>
                            <img src="{{ asset('storage/' . $user->img_profile) }}" alt="profile-sample4" class="profile" />
                            <h2>{{ $user->name }}<span>{{ $user->email }}</span></h2>
                            <div class="flex">
                            <a href="{{ route('userdashboard.edit-user', $user->id) }}">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Edit
                            </a>
                            <form class="form1" action="{{ route('userdashboard.destroy', $user->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Delete
                                </button>
                            </form></div>
                        </figcaption>
                    </figure>
                {{-- @endif
                @php $userCount++; @endphp --}}
            @endforeach
            </div>
    </div>
    <!-- Button End -->
@endsection
