<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya&display=swap" rel="stylesheet">

  <title>IEXEPIZZAPHP</title>
</head>
<body>
  <?php
  
  
  ?>
  
</body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <title>IEXEPIZZA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya&display=swap" rel="stylesheet">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: darkred ;">
            <a class="logo">
                <img src="https://www.pizzaiolo.mx/img/blog/pizza-hecha-de-varios-tipos-de-pizza-02%20(1).png"
                    alt="IEXEPIZZA" value="IEXEPIZZA" /> </a>
            <button class="navbar-toggler" type="button" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Regístrate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ordena</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mis Pedidos</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0 actions justify-content-end">
                    <div class="actions">
                        <input type="search" placeholder="Busqueda" aria-label="Search">
                        <button>Buscar</button>
                    </div>
                </form>

            </div>
        </nav>
    </header>
    
    <div class="container">
        <div class="row">
            <section>
                <div class="col md-5 mt-5">
                    <h1>¡Bienvenido a mi negocio! </h1>
                    <p>"No creia en el amor hasta que probe una IEXE PIZZA"</p>
                </div>
            </section>


        </div>
        <div class="row">

            <div class="col md-5 mt-5">
                <section>
                    <h2>Ingredientes <strong>FRESCOS</strong> y de <strong>CALIDAD</strong></h2>
                    <p>Todos nuestros <strong>INGREDIENTES</strong> son de alta calidad, frescos y organicos, por que en
                        losIngredientes inicia el Sabor.</p>
                </section>

            </div>
            <div class="col md-5 mt-5">
                <section>
                    <h2>Variedad en<strong>SABOR</strong> y a <strong>PREFERENCIA</strong></h2>
                    <p>Contamos con un sin fin de productos y variedad de convinaciones a preferencia de cada cliente lo
                        que hace que cada pizza sea unica y deliciosa.</p>
                </section>

            </div>
            <div class="col md-5 mt-5">
                <section>
                    <h2>Comida <strong>DELICIOSA</strong> y <strong>RAPIDA</strong> </h2>
                    <p>En la actualidad la dificultad mayor es el tiempo, todos queremos comer saludable sin descuidar
                        nuestras
                        prioridades, asi que contamos con servicio intime el cual garantiza un tiempo no mayor de 20min.
                    </p>
                </section>

            </div>
        </div>
        <div class="row">
            <div class="col-8 md-5 mt-5">
                <section>
                    <h2>Nuestra empresa cumple con <strong>TODO PROTOCOLO DE SALUD</strong> y cuenta con
                        <strong>CERTIFICACION
                            TIF</strong>
                    </h2>
                    <p>Nuestra empresa esta totalmente COMPROMETIDA con sus clientes por lo cual tiene un protocolo de
                        acceso,
                        limpieza, recoleccion, reparto y atencion de
                        primer calidad esta cerfificada con todas las normas sanitarias y esta en constante capacitacion
                        del
                        personal
                        para la merjor atencion a cliente.</p>
                </section>

            </div>
            <div class="col-4 md-5 mt-5">
                <section>
                    <h2>Nuestro <strong>COMPROMISO </strong> es 100% <strong>SATISFACCION AL CLIENTE</strong> </h2>
                    <p>El compromiso es siempre tener los mas altos estandares de atencion, servicio y productos a la
                        altura de lo que nuestros clientes siempre merecen .</p>
                        <form action="variables.php" method="post"> 
                             
                            <label for="formhora" class="form-label"> <h2>Coloque una hora en formato: HH:MM:SS AM</h2></label>
                            <label for="formhora" class="form-label">HORA:</label>
                            <input type="number"  name="hora" min="01" max="12" placeholder="HH">:
                            <input type="number"  name="min" min="00" max="59" placeholder="MM">:
                            <input type="number"  name="seg" min="00" max="59" placeholder="SS"> 
                                 <SELECT class="form-control" NAME="tem" placeholder="AM">
                                <OPTION selected> AM 
                                <option> PM
                                </SELECT>
                                <label for="formnombre" class="form-label">Coloque su Nombre Completo:</label>
                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre(s)">
                                    <input type="text" name="apepat" class="form-control" placeholder="Apellido Paterno">
                                    <input type="text" name="apemat" class="form-control" placeholder="Apellido Materno">
                            <button type="submit"> enviar datos </button>
                        </form>

                    </section>

            </div>
            <footer>
                <p><strong>Todos los Derechos Reservados copyright IEXEPIZZA MI NEGOCIO - 2022</strong></p>
                <address>
                    Brenda Diaz <br>
                    yarelidiaz@uas.edu.mx
                </address>

            </footer>
        </div>
    </div>
  <?php?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

}</body>
</html>