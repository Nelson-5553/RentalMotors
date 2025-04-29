<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css2/estilos2.css">
    <title>REGISTRAR MOTOCICLETA</title>
</head>
<body>
<nav class="nav">
        <ul class="list">

        <img src="../imglogos/logo.png" alt="Logo" width="300px" height="280px">

            <li class="list__item">
                <div class="list__button">
                    <img src="../imglogos/home.png" class="list__img">
                    <a href="paginaprincipal.php" class="nav__link"><h3>Inicio</h3></a>
                </div>
            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <img src="../imglogos/categoria.png" class="list__img">
                    <a href="motocicletas.php" class="nav__link"><h3>Motocicletas</h3></a>
                    <img src="../imglogos/circulo.png" class="list__arrow">
                </div>

                <ul class="list__show">
                <div style="overflow: auto; width: 400px; height: 110px">
                    <li class="list__inside">
                        <a href="#urbana" class="nav__link nav__link--inside"><h4>Urbanas</h4></a>
                    </li>
                    <li class="list__inside">
                        <a href="#deportivas" class="nav__link nav__link--inside"><h4>Deporitivas</h4></a>
                    </li>
                    <li class="list__inside">
                        <a href="#semiautomatica" class="nav__link nav__link--inside"><h4>Semi automaticas</h4></a>
                    </li>
                    <li class="list__inside">
                        <a href="#automaticas" class="nav__link nav__link--inside"><h4>Automáticas</h4></a>
                    </li>
                    <li class="list__inside">
                        <a href="#altagama" class="nav__link nav__link--inside"><h4>Alta gama</h4></a>
                    </li>
                    <li class="list__inside">
                        <a href="#electricas" class="nav__link nav__link--inside"><h4>Eléctricas</h4></a>
                    </li>
                </ul>

            </li>

            <li class="list__item">
                <div class="list__button">
                    <img src="../imglogos/expediente.png" class="list__img">
                    <a href="#" class="nav__link"><h3>Registrar moto</h3></a>
                </div>
            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <img src="../imglogos/calendario.png" class="list__img">
                    <a href="#" class="nav__link"><h3>Mis reservas</h3></a>
                </div>
            </li>


            <li class="list__item">
                <div class="list__button">
                    <img src="../imglogos/libro.png" class="list__img">
                    <a href="reserva.php" class="nav__link"><h3>Reservar</h3></a>
                </div>
            </li>

        </ul>
    </nav>
    <script src="main.js"></script>

<div class="container">
    <div class="title">Registro de motocicletas</div>
    <div class="content">
    <form method="POST" action="../PHP/registrar_motos.php" enctype="multipart/form-data">
        <div class="user-details">
               <?php
                session_start();
                $arrayu = $_SESSION['usuario'];
                ?>
            <div class="input-box">
            <span class="details">cliente</span>
            <input type="text" value="<?php echo"$arrayu[1]";?>" name="cliente" placeholder="" readonly="readonly" required>
        </div>
        <div class="input-box">
            <span class="details">Marca</span>
            <input type="text" name="marca" placeholder="Ingrese marca" required>
        </div>
        <div class="input-box">
            <span class="details">Modelo</span>
            <select name="modelo">
                <option value="" selected>Seleccione--</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
            </select>
        </div>
        <div class="input-box">
            <span class="details">Color</span>
            <input type="text" placeholder="Ingrese color" name="color" required>
        </div>
        <div class="input-box">
            <span class="details">Placa</span>
            <input type="text" placeholder="Ingrese placa" name="placa" required>
        </div>
        <div class="input-box">
            <span class="details">Kilometraje</span>
            <input type="text" placeholder="Ingrese kilometraje" name="kilo" required>
        </div>
        <div class="input-box">
            <span class="details">Categoria</span>
            <select name="categoria">
            <option value="" selected>Seleccione--</option>
                <option value="urbana">Urbanas</option>
                <option value="derportivas">Deportivas</option>
                <option value="semiautomaticas">Semi automáticas</option>
                <option value="automaticas">Automáticas</option>
                <option value="altagama">Alta gama</option>
                <option value="electricas">Eléctricas</option>
            </select>
        </div>
        </div>
        <div class="gender-details">
            <input type="radio" name="gender" id="dot-1">
            <input type="radio" name="gender" id="dot-2">
            <input type="radio" name="gender" id="dot-3">
            <span class="gender-title">Descripción</span>
            <p><textarea name="descripcion" rows="5" cols="50">Escribe aquí una descripción de la moto</textarea></p>
           
            <input type="file" name="FOTO" required>

        </div>
        <div class="button">
            <input type="submit" value="Register" name="registerm"><br>
            <script src="../js/main.js"></script>
            
            
        </div>
    </form>
    <?php
  //include("PHP/registrar_motos.php");
    ?>
    </div>
</div>
</body>
</html>