<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inicio</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">
<link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.gstatic.com">



</head>
<!-- recuerda width para tamaños -->
<!-- para comentar control + } -->
<!--container-fluid para que ocupe todo el ancho de la pantalla-->
<!--pueba commit-->
<body>
    <style>
        body{
            background: #f0f0f0;
            background: linear-gradient(to right,#f0f0f0, #f0f0f0);
        }
    </style>

    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">

                <img src="{{URL::asset('/imagenes/libreria1.png')}}" width="200" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--rem tamaño icon-->
            <!--https://mdbootstrap.com/docs/standard/content-styles/icons/-->

            <ul class="navbar-nav ml-auto">

                <li class="nav-item"><a class="nav-link active" href="welcome">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="register">Registro usuario</a></li>
                <li class="nav-item"><a class="nav-link" href="about">Sobre nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="carrito">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="login">Iniciar sesión</a></li>

            </ul>

            <ul class="navbar-nav ml-auto">
                <div class="busqueda">
                    <div class="input-group" id="search" width>
                            <input type="search" class="form-control rounded" placeholder="Buscar" aria-label="buscar"   />
                            <button type="button" class="btn btn-outline-primary" ></button>
                    </div>
                </div>
            </ul>

            <div class="d-flex my-5 mx-auto justify-content-center">
                <button type="button" class="btn btn-light"> <a href="shop"><i class="bi bi-cart my-auto mx-2" ></i></a></button>
            </div>
        </div>
    </nav>
    <!-- d-block hace referencia a display block w-100 = ancho al 100% -->
    <!-- buscar imagenes de 800x.... o mas -->
    <div id="mainslider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="imagenes/lib78.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="imagenes/lib6.png" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="imagenes/lib7.jpg" alt="Third slide">
        </div>
        </div>
    </div>
    <!-- RIBBON-->
    <div id="ribbon" class="container-fluid">
        <div id="birthday" class="container w-50 pl-5 pr-5 rounded-lg">
            <!-- slide -->
            <div class="row align-items-center">
            <div class="col-sm col-sm p-3" id="description">
                <img src="imagenes/ribbon.jpg" class="w-75 mx-auto d-block" alt="">
            </div>

            <div class="col-sm p-3 text-light text-center">
                <p class="text-warning h3">10% descuento</p>
                <h4 class="h2 text-shadow">en compras de más de 60 euros</h4>
                </div>
            </div>
        </div>
    </div>
    <!--separador-->
    <div id="separator-ribbon">
        <div class="content bg-transparent">
            <style>
                #separator-ribbon .content{
                    background: url(imagenes/fondos.jpg);
                    width: 150%;
                    height: 150px;
                    margin-left: -25%;
                    border-bottom-left-radius: 50%;
                    border-bottom-right-radius: 50%;
                }
            </style>
        </div>
    </div>
    <!--tarjetas-->
    <div id="games">
        <div class="container-md p-5" >
            <div class="row pt-5">
                <h3 class="text-center pb-5 pt-5 h1 ">Libros destacados</h3>
            </div>
            <div class="row" >
                <div class="col-sm">
                <div class="card w-100" card-border mb-5>
                    <img src="imagenes/piedra2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Harry Potter y la piedra filosofal</h5>
                        <p class="card-text">La 1ª entrega de la mágica saga de fantasía Harry Potter</p>

                    </div>
                </div>
                </div>
                <div class="col-sm">
                    <div class="card w-1020" card-border mb-5>
                        <img src="imagenes/palabras.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Palabras radiantes</h5>
                            <p class="card-text">La 2ª entrega de la saga del Archivo de las Tormentas</p>

                        </div>
                    </div>
                    </div>
                    <div class="col-sm">
                        <div class="card w-100" card-border mb-5>
                            <img src="imagenes/azka2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Harry Potter y el prisionero de Azkaban</h5>
                                <p class="card-text">La 3ª entrega de la saga Harry Potter</p>

                            </div>
                        </div>
                        </div>
            </div>
        </div>
    </div>
    <!--separdor-->
    <div id="separator-libros">
        <div class="content bg-success">
            <style>
                #separator-libros .content{
                    background: url(imagenes/fondos.jpg);
                    width: 110%;
                    height: 100px;
                    margin-left: -5%;
                    border-top-left-radius: 50%;
                    border-top-right-radius: 50%;
                }
            </style>
        </div>
    </div>

    <!--footer-->
    <footer>

        <div class="container-fluid">

            <div class="row p-5 bg-primary">

                <div class="col-xs-12 col-md-6 col-lg-3">

                    <p class="h3">Libreria</p>
                    <a class="navbar-brand" href="#">
                        <img src="{{URL::asset('/imagenes/libreria1.png')}}" width="100" alt="logo">
                    </a>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-3">

                    <p class="h3">Links</p>
                    <div class="mb-2">
                        <a class="text-white text-decoration-none" href="https://www.planetadelibros.com/libros-mas-vendidos?utm_medium=paid_search&utm_source=google&utm_campaign=mas_vendidos&utm_content=mas_vendidos&gclid=CjwKCAjwkMeUBhBuEiwA4hpqEF_7JykuKqs7m8S5LKU4B58WGNqP93O23negbBsHK2Nf8notHEJ1dhoCx14QAvD_BwE">Grupo Planeta</a>
                    </div>
                    <div class="mb-2">
                        <a class="text-white text-decoration-none" href="https://www.normaeditorial.com/">Norma Editorial</a>
                    </div>

                    <div class="mb-2">
                        <a class="text-white text-decoration-none" href="https://www.anagrama-ed.es/">Anagrama</a>
                    </div>
                </div>


                <div class="col-xs-12 col-md-6 col-lg-3">

                    <p class="h3">Redes</p>
                    <div class="mb-2">
                        <a class="text-white " href="https://www.instagram.com/">Instagram</a>
                    </div>
                    <div class="mb-2">
                        <a class="text-white " href="https://es-es.facebook.com/">Facebook</a>
                    </div>

                    <div class="mb-2">
                        <a class="text-white ;" href="https://twitter.com/?lang=es">Twitter</a>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-3">

                    <p class="h3">contacto</p>
                    <div class="mb-2">
                        <a class="text-white ;" href="atencion">Contacta con nosotros</a>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <div class="row justify-content-md-center py-5">
        <div clas="col text-center font-weight-light">
            <p> © 2020-2022 harol-production. harol-productions are trademarks of harol.SL</p>

        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- para javascript -->
    <!--<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    -->
    <style>
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</body>



</html>
