@extends('layouts.admin')

@section('content')

    <div class="container text-center">
        <h2>{{ $category->id }}</h2><br>
        <h2>{{ $category->name }}</h2>
    </div>

@endsection
