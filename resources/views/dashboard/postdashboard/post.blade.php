@extends('dashboard.layoutDash.master')
@section('content')


            <div class="oss">
                <h2 class="h2">Post</h2>
                <div class="osssh">
                  @foreach ($posts as $post )
                      
                  
              <figure class="snip1336 ">
                  <img src="{{ $post->image }}" alt="sample87" />
                  <figcaption>
                  <img src="{{ $post->user->img_profile }}" alt="profile-sample4" class="profile" />
                  <h2>{{ $post->user->name }}></h2>
                  <p>{{ $post->content }}</p>
                  
                  <form action="{{ route('$Companyashboard.destroy', $post->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                        <button ">
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
            <!-- Typography End -->

@endsection