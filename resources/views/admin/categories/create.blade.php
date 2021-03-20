@extends("layouts.admin")

@section('content')

    <div class="container">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>                
            @endforeach
        @endif
    </div>
   
    <form action="{{ route('admin.categories.store', ['category' => $category]) }}" class="container" method="get">
        @csrf

        <div class="mb-3">

            <div class="form-text mt-lg-5 text-uppercase">Добавить название категории</div>

            <input type="text" class="form-control mt-3" placeholder="Название категории" name="name">
            <textarea class="form-control mt-4" rows="7" name="description" placeholder="Добавить описание категории"></textarea>

        </div>
        <button type="submit" class="btn btn-primary mt-lg-5">Сохранить</button>

    </form>

@endsection
