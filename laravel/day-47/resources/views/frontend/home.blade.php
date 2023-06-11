@extends('frontend.master')

@section('title')
    Home Page
@endsection


@section('content')
    <div class="container">
        <div class="row pt-5">
            @foreach ($blogs as $key => $item)

                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('frontend/assets/images/sliders/'. $item['img']) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['title'] }}</h5>
                            <p class="card-text h-50">{{ $item['s_desc'] }}</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
