@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        {{--                <!-- Page Heading -->--}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        </div>
    </div>

    <table class="table table-bordered border-primary container">
        <thead>
            <tr>
                <th scope="col"># id</th>
                <th scope="col">Название категории</th>
                <th scope="col">Дата создания</th>
                <th scope="col">Изменение</th>
            </tr>
        </thead>
        <tbody>
        @forelse($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td>{{ $category->created_at }}</td>
                <td>
                    <a href="{{ route('admin.categories.show', ['category' => $category]) }}">просмотр</a><br>
                    <a href="{{ route('admin.categories.edit', ['category' => $category]) }}">редактировать</a><br>
                    <a href="">удалить</a><br>
                </td>
            </tr>
        @empty
            <tr>
                <td class="text-center" colspan="4"><h4>Категорий пока нет</h4></td>
            </tr>
        @endforelse

        </tbody>
    </table>
    
    <div class="container">
        <a href="{{ route('admin.news.create') }}" type="submit" class="btn btn-primary mt-lg-5">Добавить категорию</a>
    </div>
@endsection
