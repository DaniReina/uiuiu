<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#bla"  />
    <title>Productos</title>
    

    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <header class="container-fluid bg-dark position-sticky top-0">
      <ul
        class="nav nav-pills mb-3 py-3 container"
        id="pills-tab"
        role="tablist"
      >
        <li class="nav-item text-primary" role="presentation">
            <a  href="welcome" class="nav-link" type="button">
                Inicio
            </a>
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link active"
            id="pills-profile-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-profile"
            type="button"
            role="tab"
            aria-controls="pills-profile"
            aria-selected="false"
            >Productos
        </a>
        </li>
        
      </ul>
    </header>

    <!-- <div class="alert container position-sticky top-0 alert-primary hide" role="alert">
        Producto añadido al carrito
    </div>
    <div class="alert container position-sticky top-0 alert-danger remove" role="alert">
      Producto removido
    </div> -->

    <div class="tab-content" id="pills-tabContent">
      <div
        class="tab-pane fade show active container"
        id="pills-profile"
        role="tabpanel"
        aria-labelledby="pills-profile-tab"
      >
        <h2 class="h4 m-4 text-primary">Productos</h2>

        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">El camino de los reyes</h5>
              <img src="./imagenes/camino.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Diez ejércitos luchan por separaso contra un solo enemigo. Mientras tanto, al otro lado del océano, la joven Shallan, investiga los secretos de los Caballeros Radiantes y la verdadera causa de la guerra.</p>
                <h5 class="text-primary">Precio: <span class="precio">20€</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Palabras radiantes</h5>
              <img src="./imagenes/palabras.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Kaladin está al mando de los guardaespaldas reales, un puesto controvertido por su baja condición, y debe proteger al rey y a Dalinar, y al mismo tiempo, dominar los poderes vinculados a sus honorspren.</p>
                <h5 class="text-primary">Precio: <span class="precio">20€</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Harry Potter y el Cáliz de Fuego</h5>
              <img src="./imagenes/caliz.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">4ª entrega de la saga Harry Potter, donde Harry deberá enfrentarse al Torneo de los Tres Magos.</p>
                <h5 class="text-primary">Precio: <span class="precio">15€</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Harry Potter y la cámara secreta</h5>
              <img src="./imagenes/camara.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">2ª entrega de la saga Harry Potter, donde Harry y sus amigos deberán resolver el misterio que esconde una cámara oculta en Hogwarts.</p>
                <h5 class="text-primary">Precio: <span class="precio">15€</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Harry Potter y el prisionero de Azkaban</h5>
              <img src="./imagenes/azka.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">3ª entrega de la saga Harry Potter, donde Harry y sus amigos tendrán que enfrentarse a enemigos oscuros y lidiar con el pasado de sus padres.</p>
                <h5 class="text-primary">Precio: <span class="precio">15€</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Harry Potter y la piedra filosofal</h5>
              <img src="./imagenes/piedra.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">La 1ª entrega de la saga Harry Potter, donde Harry decubrirá su magia y estudiará en la academia Hogwarts, donde vivirá numerosas aventuras.</p>
                <h5 class="text-primary">Precio: <span class="precio">15€</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Harry Potter y la Orden del Fénix</h5>
              <img src="./imagenes/ordenL.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">5ª entrega de la saga Harry Potter, donde Harry, mientras lucha con sus problemas en el colegio, intentará aprender más sobre la misteriosa Orden del Fénix.</p>
                <h5 class="text-primary">Precio: <span class="precio">15€</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Harry Potter y el misterio del príncipe</h5>
              <img src="./imagenes/princejpg.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">6ª entrega de la saga Harry Potter, donde Harry descubre un misterioso libro propiedad de "El Príncipe Mestizo" con el cual aprende nuevos trucos. Y a su vez, la batalla final se aproxima rápidamente.</p>
                <h5 class="text-primary">Precio: <span class="precio">15€</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>


        </div>

      </div>
      <div
        class="tab-pane fade carrito"
        id="pills-contact"
        role="tabpanel"
        aria-labelledby="pills-contact-tab"
      >
      <br>
      <table class="table table-dark table-hover">
        <thead>
          <tr class="text-primary">
            <th scope="col">#</th>
            <th scope="col">Productos</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
          </tr>
        </thead>
        <tbody class="tbody">
          
        
          
        </tbody>
      </table>
      <br><br>
      <div class="row mx-4">
        <div class="col">
          <h3 class="itemCartTotal text-white">Total: 110€</h3>
        </div>
        <div class="col d-flex justify-content-end">
          <button class="btn btn-success">COMPRAR</button>
        </div>
      </div>
      
      </div>
    </div>

    <footer class="bg-dark p-3 mt-5">
      <p class="text-center m-0 text-muted">Gracias por comprar con nosotros</p>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
    <script src="./js/scripts.js"></script>
  </body>
</html>
© 2022 Stalin, amor de reina
Términos
Privacidad
