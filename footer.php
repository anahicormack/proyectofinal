<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name = "viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- bt cdn-->
    <link href="https://unpkg.com/ionicons@4.1.2/dist/css/ionicons.min.css" rel="stylesheet"> <!-- ionicons-->
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:600" rel="stylesheet"> <!-- google fonts-->
    <link rel="stylesheet" href="css/EstilosJose.css">
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
    <title>Footer</title>
  </head>
  <body>

<div clas="mi-footer" id="mi-footer">
<div class ="container-fluid">
  <footer class="main-footer" >
    <div class="container">
      <div class= "footer1">
        <form action= "script.php" method="post">
          <div class="row">
            <div class= "col-12 col-s-12 col-md-12 col-lg-5">
              <label id="label-footer" for="email-input"> ¡NO TE PIERDAS NUESTRAS NOTICIAS! </label>
            </div>

            <div class= "col-12 col-s-12 col-md-12 col-lg-4">
              <input type="email" placeholder="E-mail" name="correo">
            </div>
            <div class= "col-12 col-s-12 col-md-12 col-lg-3">
              <button type="button" class="btn btn-warning" class="suscribe-btn"> <a href="mailto:jose_herrera97@icloud.com"> SUSCRIBIRME </a> </button>

              <!-- Tendriamos que hacer que cada usario que escriba su mail, cuando apreta el boton de SUSCRIBIRME, se guarda el mail en un archivo json (asi se genera un listado de mails para mandar cadenas). Tambien tendria que confirmarse si el mail ya esta en el archivo json, ahi no lo agrega-->
              <!-- Este archivo tiene que ser uno distinto al de registro de usuarios-->
              <!-- Cuando hagamos eso pasar el footer.html a footer.php-->

            </div>
          </div>
      </form>
      </div>


    <div class="container" id="footer-icons"> <!--(Para preguntarle a javi) porque si le pongo una class en vez de ID se va el estilo??-->
      <a href= "https://www.facebook.com/" target="_blank"><ion-icon name="logo-facebook" class="fb-icon"></ion-icon></a>
      <a href= "https://www.instagram.com/" target="_blank"><ion-icon name="logo-instagram" class="insta-icon"></ion-icon></a>
      <a href= "https://www.twitter.com/" target="_blank"><ion-icon name="logo-twitter" class="twitter-icon"></ion-icon></a>
    </div>
    <div class="footer-last">
        <img src="img/logo.png" alt="logotipo" class="logo" class="img-responsive">
    </div>
      </div>
    </div>
  </footer>
</div>
</div>

<script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
