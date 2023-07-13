@extends('landingPage.layoutLand.master1')

@section('content')
    <div id="cont" class="container">
        <div class="search-container">
            
            <div id="search-results" style="display: none;">
                @include('landingPage.search-results')
            </div>
            
            
        </div>
    </div>
@endsection


