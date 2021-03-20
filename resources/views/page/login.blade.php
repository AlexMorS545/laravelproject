@extends('layouts.main')

@section('content')

<form class="">
    @csrf   
   
    <div class="mb-3"> 
        <label for="name" class="form-label">Ваше имя</label>
        <input type="text" class="form-control" id="name">
    </div>
    
    <div class="mb-3">
        <label for="email" class="form-label">Ваше email</label>
        <input type="email" class="form-control" id="email">
    </div>
    
    <div class="mb-3">
        <label for="password" class="form-label">Ваше пароль</label>
        <input type="password" class="form-control" id="password">
    </div>

    <button type="submit" class="btn btn-primary">Регистрация</button>

</form>

@endsection