@extends('dashboard.layoutDash.master')

@section('content')
    <div class="feedback">
        @foreach($feedbacks as $feedback)
            <div class="card">
                <img src="{{ $feedback->user->img_profile }}" alt="">
                <div>
                    <h2>{{ $feedback->user->name }}</h2>
                    <h3 class="email">{{ $feedback->user->email }}</h3>
                    <p>{{ $feedback->message }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
