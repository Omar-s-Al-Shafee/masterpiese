@extends('dashboard.layoutDash.master')
@section('content')

            <a class="booking_now " href="{{ route('majordashboard.add-major') }}">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Add Major
              </a>

            <table>
                <thead>
                  <tr>
                    <th>Major ID</th>
                    <th>Name University</th>
                    <th>Major Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Example row -->
                  @foreach($majors as $major)
                    
                  
                  <tr>
                    <td>{{ $major->id }}</td>
                    <td>{{ $major->university->name}}</td>
                    <td>{{ $major->name }}</td>
                    <td>
                        <a href="{{ route('majordashboard.edit-major',$major->id) }}">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Edit
                          </a>
                          <form class="form1" action="{{ route('majordashboard.destroy-major', $major->id) }}" method="post">
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