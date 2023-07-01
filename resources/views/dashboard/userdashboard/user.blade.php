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
            @foreach ($users as $user )
            <figure class="snip1336 ">
                <img src="{{ $user->img_profile }}" alt="sample87" />
                <figcaption>
                <img src="{{ $user->img_cover}}" alt="profile-sample4" class="profile" />
                <h2>{{ $user->name }}<span>{{ $user->email }}</span></h2>
                <a href="{{ route('userdashboard.edit-user', $user->id) }}">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Edit
                  </a>
                  <form action="{{ route('userdashboard.destroy', $user->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                    <button >
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
    <!-- Button End -->
@endsection
