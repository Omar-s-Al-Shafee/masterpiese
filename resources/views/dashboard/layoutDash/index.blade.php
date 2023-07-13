@extends('dashboard.layoutDash.master')

@section('content')
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fas fa-user fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total User</p>
                        <h6 class="mb-0">{{ $totalUsers }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fas fa-building fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Company</p>
                        <h6 class="mb-0">{{ $totalCompanies }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fas fa-briefcase fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Jops</p>
                        <h6 class="mb-0">{{ $totalJobs }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fas fa-pencil-alt fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Posts</p>
                        <h6 class="mb-0">{{ $totalPosts }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->

    <div class="oss">
        <a href="{{ route ('userdashboard.user') }}">
            <h2 class="h2">User</h2>
        </a>
        <div class="osssh">
            @php $userCount = 0; @endphp
            @foreach ($users as $user)
                @if ($userCount < 3)
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
                @endif
                @php $userCount++; @endphp
            @endforeach
        </div>
    </div>

    <div class="oss">
        <a href="{{ route('companydashboard.company') }}">
            <h2 class="h2">Company</h2>
        </a>
        <div class="osssh">
            @php $companyCount = 0; @endphp
            @foreach ($companies as $company)
    <figure class="snip1336">
        <img src="{{ $company->img_cover }}" alt="sample87" />
        <figcaption>
            <img src="{{ $company->img_profile }}" alt="profile-sample4" class="profile" />
            <h2>{{ $company->company_name }}<span>{{ $company->industry }}</span></h2>
            <p>{{ $company->description }}</p>
            <div class="flex">
                <a href="{{ route('companydashboard.edit-company',['id' => $company->id ?? 0] ) }}">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Edit
                </a>
                <form class="form1" action="{{ route('companydashboard.destroy', ['id' => $company->id ?? 0]) }}" method="post">
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
@endforeach

        </div>
    </div>

    <div class="oss">
        <a href="{{ route ('jopdashboard.jops') }}">
            <h2 class="h2">Jops</h2>
        </a>
        <div class="osssh">
            @php $jopCount = 0; @endphp
            @foreach ($jopsListings as $jop)
                @if ($jopCount < 3)
                    <figure class="snip1336">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample87.jpg" alt="sample87" />
                        <figcaption>
                            <img src="{{ $jop->image }}" alt="profile-sample4" class="profile" />
                            {{-- <h2>{{ $jop->job_title }}<span>{{ $jop->company->company_name }}</span></h2> --}}
                            <p>{{ $jop->job_description }}</p>
                            @if (isset($jop) && $jop->id)
                            <form action="{{ route('jopdashboard.destroy', $jop->id) }}" method="post">
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
                            @endif
                            <form class="form1" action="{{ route('jopdashboard.destroy', ['id' => $jop->id ?? 0]) }}" method="post">
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
                        </figcaption>
                    </figure>
                @endif
                @php $jopCount++; @endphp
            @endforeach
        </div>
    </div>

    <div class="oss">
        <h2 class="h2">Post</h2>
        <div class="osssh">
            @foreach ($posts as $post)
                <figure class="snip1336">
                    <img src="{{ $post->image }}" alt="sample87" />
                    <figcaption>
                        <img src="{{ $post->user->img_profile }}" alt="profile-sample4" class="profile" />
                        <h2>{{ $post->user->name }}</h2>
                        <p>{{ $post->content }}</p>
                        <form class="form1" action="{{ route('postdashboard.destroy',['id' => $post->id ?? 0]) }}" method="post">
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
                        
                    </figcaption>
                </figure>
            @endforeach
        </div>
    </div>
    <div class="oss">
        <a href="{{ route('universitydashboard.university') }}"><h2 class="h2">University</h2></a>
        @foreach ($universities as $university )
            <div class="osssh">
                <figure class="snip1336">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample87.jpg" alt="sample87" />
                    <figcaption>
                        <img src="{{ asset($university->image) }}" alt="profile-sample4" class="profile" />
                        <h2>{{ $university->name }}<span>{{ $university->location }}</span></h2>
                        <!-- ...Existing code... -->
                        <div class="flex">
                            <a href="{{ route('universitydashboard.edit-university', $university->id) }}">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Edit
                            </a>
                            <form class="form1" action="{{ route('universitydashboard.destroy', $university->id) }}" method="post">
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
            </div>
        @endforeach
    </div>
@endsection
