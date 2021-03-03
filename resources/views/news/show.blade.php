@extends('layouts.main')

@section('content')

    <div class="news-section">

        @forelse($listNews as $key => $news)
            <div class="card text-center mt-5">
                <div class="card-header">{{ $news['created_at'] }}</div>
                <div class="card-body">
                    <h5 class="card-title"> {{ $news['author'] }}</h5>
                    <p class="card-text">{{ $news['text'] }}</p>
                    <a href="{{ route('/category/news/', ['id'=>$key]) }}" class="btn btn-primary">Go {{ $news['created_at'] }}</a>
                </div>
            </div>
        @empty
            <h2 class="card-title">Новостей нет!</h2>
        @endforelse

    </div>

@endsection
