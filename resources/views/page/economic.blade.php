<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Laravel News</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid container">
            <a class="navbar-brand fs-2" href="#">Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active fs-5 ml-4" aria-current="page" href="../..">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 ml-4" href="/category">News</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container mt-5" style="display: flex; justify-content: space-around;">

    <div class="card text-center" style="width: 18rem;">
        <img height="170" src="https://st2.depositphotos.com/4215343/6842/i/600/depositphotos_68424755-stock-photo-currency-exchange-board.jpg" class="card-img-top" alt="currency news">
        <div class="card-body">
            <h5 class="card-title">Курс валют</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('/category/news') }}" class="btn btn-primary">Читать новости</a>
        </div>
    </div>
    <div class="card text-center" style="width: 18rem;">
        <img height="170" src="https://pharmvestnik.ru/apps/fv/assets/cache/files/content/news/408/40883/front-jpg/front-z-400.jpg?time=1538995042" class="card-img-top" alt="hockey news">
        <div class="card-body">
            <h5 class="card-title">Акции</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('/category/news') }}" class="btn btn-primary">Читать новости</a>
        </div>
    </div>

</div>
</body>
</html>
