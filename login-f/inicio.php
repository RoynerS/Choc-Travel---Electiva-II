<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
  <link rel="stylesheet" href="./inicio.css">
  <link rel="stylesheet" href="http://localhost/login-f/inicio.css">
  <link rel="shortcut icon" href="./img/Designer__1_-removebg-preview.png" type="image/x-icon">
  <title>Chocó Travel | Conoce y Descubre </title>
</head>

<body>
  <header>
    <nav class="nav contenedor">
      <div class="logo">
        <img src="./img/Designer__1_-removebg-preview.png" alt="">
        <p>Chocó Travel </p>

      </div>
      <ul class="midlink">

      </ul>
      <?php
      if (isset($_SESSION['email'])) {
        // Si el usuario ha iniciado sesión, puedes incluir el código que deseas mostrar
      ?>
        <ul class="izq">
          <select id="selectPais" onchange="convertirPrecios()">
            <option disabled selected>Selecciona una moneda</option>
            <option value="colombia">Peso Colombiano (COP)</option>
            <option value="mexico">Peso Mexicano (MXN)</option>
            <option value="argentina">Peso Argentino (ARS)</option>
            <option value="Euros">Euro (EU)</option>
          </select>
        </ul>
      <?php
      } else {
        // No hagas nada aquí si el usuario no ha iniciado sesión, ya que no quieres mostrar esa parte
      }
      ?>

      <div class="midlink">
        <a href="./login.php"> <?php
                                if (isset($_SESSION['email'])) {

                                  $email = $_SESSION['email'];

                                  // Consulta para obtener la información del usuario (incluido el rol)
                                  $query = "SELECT * FROM `users` WHERE email='$email'";
                                  $result = mysqli_query($conn, $query);

                                  if ($result && mysqli_num_rows($result) > 0) {
                                    // Si se encuentra el usuario, mostrar su información
                                    while ($row = mysqli_fetch_assoc($result)) {
                                      echo $row['role'] . ' | | ' . $row['firstName'] . '  ' . $row['lastName'] . ' | |';

                                      // Si el rol es "admin", mostrar el botón de acceso a otra página
                                      if ($row['role'] == 'admin') {
                                        echo '<a href="dashboard_f.php">Panel</a>';
                                      }
                                    }
                                  } else {
                                    echo "Usuario no encontrado.";
                                  }
                                } else {

                                  echo 'Inicia Sesion';
                                }

                                ?>
          <?php
          if (isset($_SESSION['email'])) {
            // Si el usuario ha iniciado sesión, puedes incluir el código que deseas mostrar
          ?>
            <a href="logout.php"><img src="./img/logout.png" width="18px" alt=""></a></a>
      <?php
          } else {
            // No hagas nada aquí si el usuario no ha iniciado sesión, ya que no quieres mostrar esa parte
          }
      ?>
      </div>
    </nav>
  </header>

  <main>
    <div class="contenedor">
      <div class="left">
      </div>
      <div class="rigt">
        <div class="right-contenido">
          <h2>

          </h2>


        </div>
      </div>
  </main>

  <div class="cloud-lista">
    <div class="lista">
      <p>Turismo para:</p>
      <a href="#"></a>
      <a href="#">Estrangeros</a>
      <a href="#">Patriotas</a>
    </div>

  </div>


  <section class="card container">






    <div class="img-container cuatro">
      <br>
      <br>
      <img src="./img/aaa.jpg" alt="">
      <div class="img-content">
        <br>
        <br>
        <h2>
          </p>
      </div>
    </div>
    <div class="img-container cinco">
      <br>
      <br>

      <div class="img-content">
        <br>
        <br>
        <br>
        <br>
        <h2>Conoce mas el Chocó </h2>
        <p>El Chocó es conocido por su increíble biodiversidad. Habla sobre sus parques nacionales, reservas naturales, playas, selvas y cascadas. Destaca lugares como el Parque Nacional Natural Utría, la Reserva Natural Nirvana y las playas de Nuquí y Bahía Solano.</p>
      </div>
    </div>
  </section>
  <br>
  <main>
    <div class="contenedor1">
      <div class="left">

      </div>
      <div class="rigt">
        <div class="right-contenido">
          <br>
          <p>
          <h4>LUGARES</h4>
          </p>
        </div>
      </div>
    </div>
    </div>
    </div>
  </main>



  <section class="card container">
    <div class="img-container uno">
      <div class="img-content">
        <h2>Nuquí</h2>
        <br>
        Es un destino popular en el Chocó, famoso por sus playas vírgenes, su exuberante selva tropical y su biodiversidad marina. Es un lugar ideal para practicar surf, buceo y avistamiento de ballenas jorobadas durante la temporada de apareamiento. Además de sus hermosas playas, Nuquí ofrece la oportunidad de explorar manglares, realizar caminatas por la selva y disfrutar de la cultura afrocolombiana local.
        <br>
        Un pasaje a nuqui desde la capital del choco vale entre <li> <br><span class="precioEnDolares">50</span> USD <span class="precioConvertido"></span></li>
        <br>
        <br>
        <img src="./img/nuqui.jpg" alt="">
      </div>
    </div>

    <div class="img-container dos">
      <div class="img-content">
        <h2>Bahía Solano</h2>
        <br>
        Ubicada en la costa del Pacífico, Bahía Solano es otro destino destacado en el Chocó. Sus playas de arena blanca y aguas cristalinas son ideales para relajarse y disfrutar del sol. Además, Bahía Solano es conocida por su rica vida marina, lo que la convierte en un excelente lugar para practicar buceo y snorkel. Los visitantes también pueden explorar sus selvas tropicales, hacer caminatas hacia cascadas escondidas y experimentar la cultura local a través de la música, la danza y la gastronomía.
        <br>
        Un pasaje a Bahía Solano desde la capital del choco vale entre <li> <br><span class="precioEnDolares">100</span> USD <span class="precioConvertido"></span></li>
        <br>
        <br>
        <br>
        <img src="./img/Bahía-Solano.jpeg" alt="">

      </div>
    </div>

    <div class="img-container tres">

      <div class="img-content">
        <h2>Acandí</h2>
        <br>
        Un tesoro escondido en la costa del Pacífico colombiano, cautiva con su exuberante biodiversidad y su vibrante cultura afrocolombiana. Ubicado en el departamento de Chocó, este municipio costero deslumbra con sus playas de arena blanca y aguas cristalinas, ideales para el buceo y la pesca. Sus densas selvas tropicales albergan una fascinante variedad de flora y fauna, mientras que su población, mayoritariamente afrodescendiente, irradia hospitalidad y alegría.
        <br>
        <br>
        Un pasaje a El baudó desde la capital del choco vale entre <li> <br><span class="precioEnDolares">10</span> USD <span class="precioConvertido"></span></li>
        <br>
        <img src="./img/acandi.jpg" alt="">
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <main>
    <div class="contenedor2">
      <div class="left">

      </div>
      <div class="rigt">
        <div class="right-contenido">
          <br>
          <p>
          <h4>TRANSPORTE (Precios)</h4>
          </p>
        </div>

      </div>
    </div>
    </div>
    </div>
  </main>

  <section class="card container">
    <div class="img-container uno">
      <div class="img-content">

        <br>
        <br>
        <br>
      </div>
    </div>

    <div class="img-container dos">
      <div class="img-content">
        <br>
        <br>
        <br>
      </div>
    </div>

    <div class="img-container tres">

      <div class="img-content">


      </div>
    </div>
  </section>

  <main>
    <div class="contenedor3">
      <div class="left">

      </div>
      <div class="rigt">
        <div class="right-contenido">
          <br>
          <p>
          <h4>HOSPEDAJE</h4>
          </p>
        </div>

      </div>
    </div>
    </div>
    </div>
  </main>



  <section class="card container">
    <div class="img-container uno">
      <div class="img-content">

        <br>
        <br>
        <br>
      </div>
    </div>

    <div class="img-container dos">
      <div class="img-content">
        <br>
        <br>
        <br>
      </div>
    </div>

    <div class="img-container tres">

      <div class="img-content">


      </div>
    </div>
  </section>

  <main>
    <div class="contenedor4">
      <div class="left">

      </div>
      <div class="rigt">
        <div class="right-contenido">
          <br>
          <p>
          <h4>LUGARES</h4>
          </p>
        </div>

      </div>
    </div>
    </div>
    </div>
  </main>

  <section class="card container">
    <div class="img-container uno">
      <div class="img-content">

        <br>
        <br>
        <br>
      </div>
    </div>

    <div class="img-container dos">
      <div class="img-content">
        <br>
        <br>
        <br>
      </div>
    </div>

    <div class="img-container tres">

      <div class="img-content">


      </div>
    </div>
  </section>
  <script src="./js/preferencias-usuario.js"></script>
  <script src="./js/precios.js"></script>
</body>

</html>