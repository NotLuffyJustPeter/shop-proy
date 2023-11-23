<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/contactanos.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
<?php include("header.php"); ?>
<div class="contacto">
    <h2 class="contacto-title">Contactanos</h2>
    <div class="contact-container fs-4" >
        <div class="contact-seccion">
            <i class="fa-solid fa-phone fa-lg icono-phone"></i>
            <p>Telefono: 4493877833</p>
        </div>
        <div class="contact-seccion">
            <i class="fa-solid fa-envelope fa-lg icono-correo"></i>
            <p>Correo: al242145@edu.uaa.mx</p>
        </div>

        <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook facebook"></a>
                    <a href="#" class="fa fa-instagram instagram"></a>
                    <a href="#" class="fa fa-twitter twiter"></a>
                    <a href="#" class="fa fa-youtube youtube"></a>
                </div>
        </div>

    </div> 

    <div class="map-container">
        <h3 class="text-center">Ubicaccion</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3701.5732492238667!2d-102.31940422607539!3d21.912503156842536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429eee3ccfafeb1%3A0x2b4b0dead5b54798!2sEdificio%2059%20de%20Ciencias%20Pol%C3%ADticas%20y%20Administraci%C3%B3n%20P%C3%BAblica!5e0!3m2!1ses-419!2smx!4v1700065891473!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</div>
    <div class="container-form"> 
    <form id="formulario" class="row g-3 p-4 fs-1 animate__animated animate__fadeInLeftBig contacto-bg" action="enviar.php" method="post">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label ">Nombre</label>
      <input type="text" name="nombre" class="form-control fs-2" id="inputEmail4" placeholder="Coloca tu nombre:">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Correo</label>
      <input type="email" name="email" class="form-control fs-2" id="inputPassword4" placeholder="Ejemplo@hotmail.com">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Mensaje</label>
      <textarea class="form-control fs-2" placeholder="Deja aqui tu comentario" name="mensaje" id="floatingTextarea" style="height: 200px; padding: 20px;"></textarea>
    </div>
    
    <div class="col-12 d-grid gap-1">
      <button type="submit" class="btn btn-lg boton" style="height: 60px;">enviar</button>
    </div>
  </form>
  </div>
    <?php include("footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
</body>
</html>