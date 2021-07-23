<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Thiago</title>
    <link rel="stylesheet" href="{{url("assets/css/home.css")}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>
<body>

    <div id="container">
        

        <header class="container-fluid bg-dark cabecalho">
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                    <img src="{{url("imgs/planet.png")}}" alt="" width="60" height="35" class="d-inline-block align-text-center">
                    Evolution
                    </a>
                    
                </div>
                <form class="d-flex mx-auto d-block">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <img src="{{url("imgs/search.png")}}" >
                    </form>
            </nav>

            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link link-secondary" aria-current="page" href="#">Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-secondary" href="#">Ofertas do dia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-secondary" href="#">Histórico</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-secondary" href="#">Supermercado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-secondary" href="#">Moda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-secondary" href="#">Vender</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-secondary" href="#">Contato</a>
                </li>
            </ul>
            
        </header>


        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{url("imgs/img1.webp")}}" class="d-block w-100" alt="...">
           
            </div>
            <div class="carousel-item">
            <img src="{{url("imgs/img2.webp")}}" class="d-block w-100" alt="...">
           
            </div>
            <div class="carousel-item">
            <img src="{{url("imgs/img3.webp")}}" class="d-block w-100" alt="...">
            
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>

        <div class="card-group">
            <div class="card cardm border bg-secondary bg-gradient rounded ">
                <img src="{{url("imgs/motoe.webp")}}" class="d-block " alt="...">
                <div class="card-body bg-light bg-gradient">
                <h5 class="card-title">R$ 959</h5>
                <p class="txtCard">12x R$ 79,92 sem juros</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class="card cardm border bg-secondary bg-gradient rounded ">
                <img src="{{url("imgs/motoe.webp")}}" class="d-block " alt="...">
                <div class="card-body bg-light bg-gradient">
                <h5 class="card-title">R$ 959</h5>
                <p class="card-text">12x R$ 79,92 sem juros</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class="card cardm border bg-secondary bg-gradient rounded ">
                <img src="{{url("imgs/motoe.webp")}}" class="d-block " alt="...">
                <div class="card-body bg-light bg-gradient">
                <h5 class="card-title">R$ 959</h5>
                <p class="card-text">12x R$ 79,92 sem juros</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class="card cardm border bg-secondary bg-gradient rounded ">
                <img src="{{url("imgs/motoe.webp")}}" class="d-block " alt="...">
                <div class="card-body bg-light bg-gradient">
                <h5 class="card-title">R$ 959</h5>
                <p class="card-text">12x R$ 79,92 sem juros</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class="card cardm border bg-secondary bg-gradient rounded ">
                <img src="{{url("imgs/motoe.webp")}}" class="d-block " alt="...">
                <div class="card-body bg-light bg-gradient">
                <h5 class="card-title">R$ 959</h5>
                <p class="card-text">12x R$ 79,92 sem juros</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class="card cardm border bg-secondary bg-gradient rounded ">
                <img src="{{url("imgs/motoe.webp")}}" class="d-block " alt="...">
                <div class="card-body bg-light bg-gradient">
                <h5 class="card-title">R$ 959</h5>
                <p class="card-text">12x R$ 79,92 sem juros</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            
           

            

           

           

           
            
        </div>


        <div class="card-group">
            <div class="card cardm border bg-secondary bg-gradient rounded ">
                <img src="{{url("imgs/motoe.webp")}}" class="d-block " alt="...">
                <div class="card-body bg-light bg-gradient">
                <h5 class="card-title">R$ 959</h5>
                <p class="txtCard">12x R$ 79,92 sem juros</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class="card cardm border bg-secondary bg-gradient rounded ">
                <img src="{{url("imgs/motoe.webp")}}" class="d-block " alt="...">
                <div class="card-body bg-light bg-gradient">
                <h5 class="card-title">R$ 959</h5>
                <p class="card-text">12x R$ 79,92 sem juros</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class="card cardm border bg-secondary bg-gradient rounded ">
                <img src="{{url("imgs/motoe.webp")}}" class="d-block " alt="...">
                <div class="card-body bg-light bg-gradient">
                <h5 class="card-title">R$ 959</h5>
                <p class="card-text">12x R$ 79,92 sem juros</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class="card cardm border bg-secondary bg-gradient rounded ">
                <img src="{{url("imgs/motoe.webp")}}" class="d-block " alt="...">
                <div class="card-body bg-light bg-gradient">
                <h5 class="card-title">R$ 959</h5>
                <p class="card-text">12x R$ 79,92 sem juros</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class="card cardm border bg-secondary bg-gradient rounded ">
                <img src="{{url("imgs/motoe.webp")}}" class="d-block " alt="...">
                <div class="card-body bg-light bg-gradient">
                <h5 class="card-title">R$ 959</h5>
                <p class="card-text">12x R$ 79,92 sem juros</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class="card cardm border bg-secondary bg-gradient rounded ">
                <img src="{{url("imgs/motoe.webp")}}" class="d-block " alt="...">
                <div class="card-body bg-light bg-gradient">
                <h5 class="card-title">R$ 959</h5>
                <p class="card-text">12x R$ 79,92 sem juros</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            
           

            

           

           

           
            
        </div>





    </div>



    
</body>
</html>