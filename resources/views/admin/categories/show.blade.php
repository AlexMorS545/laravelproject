@extends('layouts.admin')

@section('content')

    <div class="container">
        <h2>&#8470; {{ $category->id }} &nbsp; {{ $category->title }}</h2><br>
        <h3>{{ $category->description }}</h3><br>
        <img src="{{ asset('assets/img/') .'/'.$category->image }}" alt="{{ $category->title }}" width="700">

        <div class="sub-category mt-5">
        
            @forelse($category->subCategories as $item)

                <div class="card items text-center sub-category-item">
                    <img height="180" src="{{ asset('assets/img/') .'/'.$item->image }}" class="card-img-top" alt="{{ $item->title }} news">
                    <div class="card-body">
                        <h3 class="card-title text-capitalize">{{ $item->title }}</h3>
                    <a href="{{route('/category/sport')}}" class="btn btn-primary">Перейти к новостям</a>
                    </div>
                </div>
            
                @empty

                    <h4>Категорий нет</h4>

            @endforelse

        </div>

    </div>

@endsection
