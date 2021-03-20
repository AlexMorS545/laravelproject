@extends('layouts.admin')

@section('content')
    
    <div class="container">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>                
            @endforeach
        @endif
    </div>

    <form action="{{ route('admin.categories.update', ['category' => $category]) }}" class="container" method="post">
        @csrf
        @method('put')

        <div class="mb-3">

            <div class="form-text mt-lg-5 text-uppercase">Изменить название категории</div>

            <img class="mt-4" src="{{ asset('assets/img/') .'/'.$category->image }}" alt="{{ $category->title }}" width="500">

            <input value="{{ $category->title }}" type="text" class="form-control mt-3" placeholder="Заголовок">
            <textarea class="form-control mt-4" rows="7" name="description">{{ $category->description }}</textarea>

        </div>
        <button type="submit" class="btn btn-primary mt-lg-5">Изменить</button>
    </form>

@endsection