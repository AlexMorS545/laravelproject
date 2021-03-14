@extends("layouts.admin")

@section('content')

<form action="{{ route('admin.categories.store', ['category' => $category]) }}" class="container" method="get">
    @csrf

    <div class="mb-3">

        <div class="form-text mt-lg-5 text-uppercase">Изменить название категории</div>

        <input type="text" class="form-control mt-3" placeholder="Название категории" name="name">
        <textarea class="form-control mt-4" rows="7" name="description"></textarea>

    </div>
    <button type="submit" class="btn btn-primary mt-lg-5">Сохранить</button>

</form>

@endsection
