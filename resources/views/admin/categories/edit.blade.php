@extends('layouts.admin')

@section('content')
    
    @if(session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
     @endif

    <form action="{{ route('admin.categories.update', ['category' => $category]) }}" class="container" method="post">
        @csrf
        @method('put')

        <div class="mb-3">

            <div class="form-text mt-lg-5 text-uppercase">Изменить название категории</div>

            <img class="mt-4" src="{{ asset('assets/img/') .'/'.$category->image }}" alt="{{ $category->name }}" width="500">

            <input value="{{ $category->name }}" type="text" class="form-control mt-3" placeholder="Заголовок">
            <textarea class="form-control mt-4" rows="7" name="description">{{ $category->description }}</textarea>

        </div>
        <button type="submit" class="btn btn-primary mt-lg-5">Изменить</button>
    </form>

@endsection