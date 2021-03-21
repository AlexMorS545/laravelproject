@extends('layouts.admin')

@section('content')
    
    

    <form action="{{ route('admin.categories.update', ['category' => $category]) }}" class="container" method="post">
        @csrf
        @method('put')

        <div class="mb-3">

            <img class="mt-4" src="{{ asset('assets/img/') .'/'.$category->image }}" alt="{{ $category->title }}" width="500">

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger mt-4">{{ $error }}</div>                
                @endforeach
            @endif
            
            <div class="form-text mt-lg-5 text-uppercase">Изменить название категории</div>

            <input value="{{ $category->title }}" type="text" class="form-control mt-3" placeholder="Заголовок">

            <div class="form-text mt-lg-4 text-uppercase">Изменить описание категории</div>
            <textarea class="form-control mt-4" rows="7" name="description">{{ $category->description }}</textarea>

        </div>
        <button type="submit" class="btn btn-primary mt-lg-5">Изменить</button>
    </form>

@endsection