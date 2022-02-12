<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andres Salazar-Front End Developer</title>
    <link rel="shortcut icon" href="img/img_exp.png">
    <!-- booststrap-estilos -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- hoja de estilos -->
    <link rel="stylesheet" href="estilos.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-- SCROLLrEVEAL -->
    <script src="js/scrollreveal.js"></script>
    <!-- alerts -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Andres Salazar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item  ">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#sobreMi">Sobre mi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#exp">Experiencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#porque">¿Por qué trabajar conmigo?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- header -->
    <header>
        <div class="container mt-5 text-center">
            <div class="row">
                <div class="col-md-6 animateLeft">
                    <img src="img/imgHeader.svg " alt="img-header">
                </div>
                <div class="col-md-6 mt-5 ml-auto animateTop">
                    <h1 class="display-4">Andres salazar</h1>
                    <h3 class="mt-4">Front End Developer</h3>
                    <!-- <a href="#" class="btn btn-outline mt-3">CONOCE MÁS</a> -->

                </div>
            </div>
        </div>
    </header>
    <!-- seccion sobre mi -->
    <section id="sobreMi">
        <div class="container">
            <div class="row">
                <div class="col-md-6 animateLeft ">
                    <h2 class="text-center"><b>Sobre Mí</b> </h2>
                    <p class="h5 text-center">Soy Juan Andrés Arango Salazar, tengo 16 años, soy un desarrollador front
                        end, me gustan los diseños modernos y minimalistas, soy una persona autodidacta, apasionada por
                        aprender las nuevas tecnologías.
                    </p>
                </div>
                <div class="col-md-6 animateBottom mt-3 ">
                    <img src="img/imgSobreMi.svg" alt="imgSobreMi">

                </div>
            </div>
        </div>
    </section>
    <!-- seccion experiencia -->
    <section id="exp">
        <h2 class="text-center mb-5"><b>Experiencia</b></h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4 animateLeft1">
                    <div class="card mt-3">
                        <img class="card-img-top" src="img/img_exp.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text pb-5">Tengo mas de <b>2 años de experiencia</b> desarrollando y
                                perfeccionando mis habilidades y conocimiento como un Frond-End Developer. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animateLeft2">
                    <div class="card mt-3">
                        <img class="card-img-top" src="img/img_exp_2.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Tengo nociones básicas en <b> tecnologías de desarrollo web</b> como
                                HTML, CSS,
                                JavaScript, PHP, Control de Versiones y FrameWork de desarrollo web como Bootstrap.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animateLeft3">
                    <div class="card mt-3 ">
                        <img class="card-img-top" src="img/img_exp_3.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text pb-4 mt-2">Desarrollo páginas web con <b> Responsive Design</b> logrando
                                que
                                se adapten a todo tipo de dispositivos tanto moviles como de escritorio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seccion mis proyectos
    <section id = "misProyectos">
      <div class="container">
        <div class="row">
          <h2 class="text-center mb-5"><b>Proyectos</b></h2>
          <div class="col-md-5">

            <div class="card p-2 animateLeft1" style="width: 18rem;">
          <img class="card-img-top" src="img/emblemaIEFAZ.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><b>Pagina web media tecnica</b></h5>
            <p class="card-text">Pagina web de la media tecnia en desarrollo de software del colegio Francisco Antonio Zea.</p>
            <a href="paginaWebMedia/Index/index.html" target="_target" class="btn">Ver</a>
          </div>
        </div>


          </div>
          </div>

        </div>

      </div>

    </section> -->

    <section class="porQue" id="porque">
        <div class="container">
            <h2 class="text-center mb-5"><b>Y…¿Por qué trabajar conmigo?</b></h2>
            <div class="row">
                <div class="col-md-6 animateLeft">
                    <img src="img/porque.svg" alt="porQueTrabajar">
                </div>
                <div class="col-md-6 animateRight">
                    <p class="h5 text-center mt-5">
                    Actualmente estoy certificado como desarrollador web con mas de 2 años de experiencia,
                    las habilidades blandas que mas resaltan en mi son la comunicación, liderazgo y trabajo en 
                    equipo, me considero una persona responsable, humana y que siempre quiere aprender cosas nuevas.
                    </p>
                </div>
            </div>
        </div>

    </section>
    <!-- contacto -->
    <footer id="contact">
        <div class="container">
            <h2 class="text-center mb-5"><b>Contacto</b></h2>
            <div class="row">
                <div class="col-md-6 animateLeft ">
                    <img src="img/contact.svg" alt="imagen contac">
                </div>
                <div class="col-md-6 animateTop">
                    <form action="index.php" method="POST" class="card form">
                        <div class="card-body">

                            <div class="form-group">
                                <label for="Nombre" class="mt-2 mb-3">Nombre:</label>
                                <input id="Nombre" type="text" name="Nombre" placeholder="Nombre" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label for="email" class="mt-3">Email:</label>
                                <input id="email" type="Email" name="Email" placeholder="Email" class="form-control mt-3" required="">
                            </div>

                            <div class="form-group">
                                <label for="text" class="mt-3">Mensaje:</label>
                                <textarea id="text" class="form-control mt-3 " name="Mensaje" cols="30" placeholder="Mensaje" required=""></textarea>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-secundary  mt-3 mb-3 " name="enviar">Enviar</button>
                    </form>
                </div>
            </div>
        </div>

    </footer>

</body>
<!-- booststrap-js -->
<script src="js/bootstrap.min.js"></script>
<!-- animacion js -->
<script src="main.js"></script>

</html>
<!-- codigo php -->
<?php
if (isset($_POST['enviar'])) {
    if (!empty($_POST['Nombre']) && !empty($_POST['Email']) && !empty($_POST['Mensaje'])) {
        $name = $_POST['Nombre'];
        $email = $_POST['Email'];
        $msg = $_POST['Mensaje'];
        $asunto = "Enviado desde Portafolio personal";
        $destino = "salazarandresjuan@gmail.com";
        $header = "Form: salazarandresjuan@gmail.com" . "\r\n";
        $header .= "Reply-To:salazarandresjuan@gmail.com" . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();
        $msgCompleto = "De: " . $name . "\n" . "Email: " . $email . "\n" . "Mensaje:" . $msg;
        $mail = mail($destino, $asunto, $msgCompleto, $header);
        if ($mail) {
?>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </symbol>
                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                </symbol>
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </symbol>
            </svg>

            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    Correo enviado!!!
                </div>
            </div>
<?php

        }
    }
}

?>