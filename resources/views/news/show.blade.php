@extends('layouts.main')

@section('content')

    <div class="news-section">

        @forelse($listNews as $key => $news)
            <div class="card text-center mt-5">
                <div class="card-header">{{ $news }}</div>
                <div class="card-body">
                    <h5 class="card-title"> {{ $key+1 }}&nbsp;&ndash;&nbsp;Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{ route('/category/news/', ['id'=>$key]) }}" class="btn btn-primary">Go {{ $news }}</a>
                </div>
            </div>
        @empty
            <h2 class="card-title">Новостей нет!</h2>
        @endforelse

    </div>

@endsection
