<?php
    $hora = $_POST["hora"];
    $min = $_POST["min"];
    $seg = $_POST["seg"];
    $tem = $_POST["tem"];
    $nombre = $_POST["nombre"];
    $apepat = $_POST["apepat"];
    $apemat = $_POST["apemat"];

  /*  
   
    echo $tem."<br>";
    echo $nombre;*/
?>
<!DOCTYPE html>
<html lang="en">
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

    <title>Document</title>
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
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <p><h1> Los datos listados son. </h1><br>
                    <h2>Nombre de usuario:  <strong><?php  echo strtoupper($nombre) ." ". strtoupper($apepat) ." ".strtoupper($apemat) ?> </strong></h2> <br>
                    <h2>Hora registrada:   <strong><?php  echo $hora . ":". $min .":". $seg ." ". $tem ?> </strong></h2> <br>             
                        <?php $hr = 0;
                        if($tem == "PM"){
                            if($hora <= 11){
                            $hr = $hora + 12;
                            }else{
                                $hora=00;
                            }
                        }else{
                        } ?> 
                        <h2>Hora en formato 24 hrs: <strong><?php  echo $hora . ":". $min .":". $seg ?> </strong></h2> <br>
                    
                </p>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
