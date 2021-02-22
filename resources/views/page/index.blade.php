@extends('layouts.main')

@section('content')

    <div class="card items text-center">
        <img height="180" src="https://1249277.ssl.1c-bitrix-cdn.ru/upload/iblock/8c5/Korotko_Sport_Kim_Reinick_s_1_1_.jpg?1612165658256845" class="card-img-top" alt="sport news">
        <div class="card-body">
            <h5 class="card-title text-capitalize">Sport News</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{route('/category/sport')}}" class="btn btn-primary">Перейти к новостям</a>
        </div>
    </div>
    <div class="card items text-center">
        <img height="180" src="https://img2.eadaily.com/c650x400/o/12e/a6274e2ab96c91fec98f4b737f5d1.jpeg" class="card-img-top" alt="sport news">
        <div class="card-body">
            <h5 class="card-title text-capitalize">Economic News</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{route('/category/economic')}}" class="btn btn-primary">Перейти к новостям</a>
        </div>
    </div>
    <div class="card items text-center">
        <img height="180" src="https://region-news.kr.ua/wp-content/uploads/2020/07/23.jpg" class="card-img-top" alt="sport news">
        <div class="card-body">
            <h5 class="card-title text-capitalize">World News</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('/category/news') }}" class="btn btn-primary">Перейти к новостям</a>
        </div>
    </div>

@endsection
