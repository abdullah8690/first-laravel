
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'My Home Page')</title>

    @section('stylesheet')
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    @show

</head>



<body>
<nav class="navbar sticky-top navbar-expand-lg bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="main.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <!--                    <a class="nav-link disabled">Disabled</a>-->

                </li>
            </ul>
            <form class="d-flex" role="search">

                <a href="viewCart.php" class="btn btn-outline-danger">My Cart (0)</a>
            </form>
        </div>
    </div>
</nav>
<div class="container">
    @yield('content')

</div>
    <footer class="bg-dark text-white pt-5 pb-4 mt-5">
        <div class="text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3  mx-auto mt-3">
                    <h5 class="text_uppercase mb-4 font-weight-bold text-warning">Company name</h5>
                    <p>Lorem ipsum dolor sit amet<br>  consectetur adipisicing elit.<br>  Eos, amet.</p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2  mx-auto mt-3">
                    <h5 class="text_uppercase mb-4 font-weight-bold text-warning">Product</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none"> TheProvider</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none"> Creativity</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none"> SourceFile</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none"> Bootstrap 5 alpha</a>
                    </p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2  mx-auto mt-3">
                    <h5 class="text_uppercase mb-4 font-weight-bold text-warning">Product</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none"> Usefu link</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none"> Your acount</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none"> Becom developer</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none"> As you wish</a>
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3  mx-auto mt-3">
                    <h5 class="text_uppercase mb-4 font-weight-bold text-warning" >Contact Us</h5>
                    <p>
                        <i class="fas fa-home mr-3" > </i> Grenoble 38000 France
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3" > </i> abdullahmahzuddin@gmail.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3" > </i> (+33) 07 84 62 86 90
                    </p>
                    <p>
                        <i class="fas fa-print mr-3" > </i> 09 00 00 00 00 00
                    </p>
                </div>

            </div>
        </div>

    </footer>

</body>
</html>
