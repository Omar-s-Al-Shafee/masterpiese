@extends('dashboard.layoutDash.master')
@section('content')

            <a href="{{ route('universitydashboard.add-university') }}" class="booking_now">Add University</a>

            <table>
                <thead>
                  <tr>
                    <th>University ID</th>
                    <th>Name University</th>
                    <th>Location</th>
                    <th>Total Student</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Example row -->
                  @foreach($universities as $university)
                  <tr>
                    <td>{{ $university->id }}</td>
                    <td>{{ $university->name }}</td>
                    <td>{{ $university->location }}</td>
                    <td>{{ $university->name }}: {{ $university->users_count }}</td>
                    <td>
                        <a href="{{ route('universitydashboard.edit-university') }}">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Edit
                          </a>
                          <form action="{{ route('$Companyashboard.destroy', $university->id) }}" method="post">
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
                    
                    </td>
                  </tr>
                  @endforeach
                  <!-- Add more rows here as needed -->
                </tbody>
              </table>
              



@endsection