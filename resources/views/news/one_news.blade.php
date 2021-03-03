@extends('layouts.main')

@section('content')

    <div class="card one-item mb-3">
        <img height="600" src="https://sbis.perm.ru/wp-content/uploads/2019/09/placeholder.png" class="card-img-top" alt="...">
        <div class="card-body text-center">
            <h2 class="card-title">{{ $news['author'] }}</h2>
            <p class="card-text">{{ $news['text'] }}</p>
            <p class="card-text"><small class="text-muted">{{$news['created_at']}}</small></p>
        </div>
    </div>

@endsection
