@extends('layouts.main')

@section('content')

    @foreach($categories as $category)
        <div class="card items text-center">
            <img height="180" src="assets/img/{{ $category->image }}" class="card-img-top" alt="sport news">
            <div class="card-body">
                <h3 class="card-title text-capitalize">{{ $category->name }}</h3>
                <p class="card-text">{{ $category->description }}</p>
            <!-- <a href="{{route('/category/sport')}}" class="btn btn-primary">Перейти к новостям</a> -->
            </div>
        </div>
    @endforeach
    
@endsection
