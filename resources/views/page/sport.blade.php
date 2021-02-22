@extends('layouts.main')

@section('content')

    <div class="card items text-center">
        <img height="170" src="https://ak.picdn.net/shutterstock/videos/1011525281/thumb/9.jpg" class="card-img-top" alt="football news">
        <div class="card-body">
            <h5 class="card-title">Новости футбола</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('/category/news') }}" class="btn btn-primary">Читать новости</a>
        </div>
    </div>
    <div class="card items text-center">
        <img height="170" src="https://ss.sport-express.ru/userfiles/materials/154/1548074/large.jpg" class="card-img-top" alt="hockey news">
        <div class="card-body">
            <h5 class="card-title">Новости хоккея</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('/category/news') }}" class="btn btn-primary">Читать новости</a>
        </div>
    </div>
    <div class="card items text-center">
        <img height="170" src="https://cdnimg.rg.ru/img/content/181/23/62/iStock-959080376_d_850.jpg" class="card-img-top" alt="basketball news">
        <div class="card-body">
            <h5 class="card-title">Новости баскетбола</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('/category/news') }}" class="btn btn-primary">Читать новости</a>
        </div>
    </div>

@endsection

