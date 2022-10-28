<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Discovering Bootstrap 5.2</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Catégories
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Photos</a></li>
                            <li><a class="dropdown-item" href="#">Articles</a></li>
                            <li><a class="dropdown-item" href="#">Projets</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <main class="content d-flex flex-column mun-vh-100 flex-grow-1">
        <div class="container flex-grow-1">
            <h2>Journey into Bootstrap classes</h2>
        </div>
        <div class="container flex-grow-1">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card h-100">
                        <img src="https://picsum.photos/id/1011/300/300" class="card-img-top" alt="lake">
                        <div class="card-body">
                            <h5 class="card-title">Visit Components lake</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary" type="button">Read more</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card h-100">
                        <img src="https://picsum.photos/id/1035/300/300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Facing Cascade Style Sheet</h5>
                            <p class="card-text">Some quick example text.</p>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary" type="button">Read more</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card h-100">
                        <img src="https://picsum.photos/id/1015/300/300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Contemplate Form Inputs river</h5>
                            <p class="card-text">Make up the bulk of the card's content</p>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary" type="button">Read more</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card h-100">
                        <img src="https://picsum.photos/id/103/300/300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Enjoy Responsive Layout land</h5>
                            <p class="card-text">Build on the card title and make up the bulk of the card's content</p>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary" type="button">Read more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="containerPost">
            <h3>The css frameworks are very useful</h3>
            <p>Learning them comes with practice</p>
        </div>

    </main>
    <footer class="foot fixed-bottom bg-primary">© 2022 wilders | images <a href="">@picsum</a></footer>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>