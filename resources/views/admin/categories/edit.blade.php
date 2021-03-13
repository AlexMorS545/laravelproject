@extends('layouts.admin')

@section('content')

    <form class="container" method="get">
        @csrf
{{--        @method('put')--}}

        <div class="mb-3">

            <div class="form-text mt-lg-5 text-uppercase">Изменить название категории</div>

            <input value="{{ $category->name }}" type="text" class="form-control mt-2" aria-describedby="emailHelp" placeholder="Заголовок">

        </div>
        <button type="submit" class="btn btn-primary mt-lg-5">Изменить</button>
    </form>

@endsection
