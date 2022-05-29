<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
  </head>
<body class="bg-light">
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

          <li class="nav-item"><a class="nav-link" href="welcome">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="registro">Registro usuario</a></li>
          <li class="nav-item"><a class="nav-link" href="about">Sobre nosotros</a></li>
          <li class="nav-item"><a class="nav-link" href="500.html">Preguntas frecuentes</a></li>
          <li class="nav-item"><a class="nav-link" href="login">Inicia sesion</a></li>

        </ul>

        </div>
    </div>
</nav>
  <div class="container">
    <main>
      <div class="py-5 text-center">
        <h2>CONTÁCTANOS</h2>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-6">
            <h4 class="mb-3">Datos Personales</h4>
            <form class="needs-validation" novalidate="">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                </div>

                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Apellidos</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com">
                </div>
              </div>

              <hr class="my-4">

              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Motivo:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <div class="info required">
                    <label id="pdw_aceptargpd_label" class="field-label">He leído y acepto
                        <a href="LOPD">la política de privacidad</a>
                    </label>
                <div class="validators">
                    <span id="RequiredFieldValidatorpdw_aceptargpd" style="display:none;">*</span>
                </div></div>
              </div>
              <button class="w-10 btn btn-primary btn-lg" type="submit">Enviar</button>
            </form>
            <br>
          </div>
        </div>
      </div>
    </main>
  </div>
<br/>
<br/>
<br/>
<br/>

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
    </footer>
<div class="row justify-content-md-center py-5">
    <div clas="col text-center font-weight-light">
    <p> © 2020-2022 harol-production. harol-productions are trademarks of harol.SL

    </p>

</body>
