@extends('layouts.main')

@section('content')

    <div class="card items text-center">
        <img height="170" src="https://st2.depositphotos.com/4215343/6842/i/600/depositphotos_68424755-stock-photo-currency-exchange-board.jpg" class="card-img-top" alt="currency news">
        <div class="card-body">
            <h5 class="card-title">Курс валют</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('/category/news') }}" class="btn btn-primary">Читать новости</a>
        </div>
    </div>
    <div class="card items text-center">
        <img height="170" src="https://pharmvestnik.ru/apps/fv/assets/cache/files/content/news/408/40883/front-jpg/front-z-400.jpg?time=1538995042" class="card-img-top" alt="hockey news">
        <div class="card-body">
            <h5 class="card-title">Акции</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('/category/news') }}" class="btn btn-primary">Читать новости</a>
        </div>
    </div>

@endsection

