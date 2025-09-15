@extends('content')

@section('content')
    <div class="minh"><br>
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto mt-5" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Kreiranje Bloga</h5>
        </div>
        <br>
        <create-blog :categories="{{json_encode($getCategories)}}"></create-blog>
    </div>

@endsection
