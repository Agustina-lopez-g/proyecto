<?php
// me traigo las cosas de la base de datos
function ejecutarConsulta($sql)
{
    @$link = mysqli_connect("localhost", "root", "", "web_agus");
    @$rs = mysqli_query($link, $sql);
    @mysqli_close($link);
    return $rs;
}
if ($_POST) {
    var_dump($_POST);
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poupee Gurumis</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="bootstrap-5.0.2\css\bootstrap.min.css" rel="stylesheet">
    <script src="js\jquery-3.3.1.min.js"></script>
</head>

<body>

    <header class="sticky-top">
        <div class="container container-contact">
            <div id="top" class="row contact-info">

                <div class="col-sm-12 col-md-8">
                    <a href="mailto:poupee.gurumis@gmail.com"><i class="bi bi-envelope-fill phone-icon"></i>poupee.gurumis@gmail.com</a>
                    <a href="https://wa.me/5491157010708"><i class="bi bi-phone-fill phone-icon"></i> 11 5701 - 0708</a>
                </div>
                <div class="col-sm-12 col-md-4 ms-auto text-center">
                    <a href="https://instagram.com/poupee_gurumis?igshid=YWJhMjlhZTc=" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com/poupee_gurumis?igshid=YWJhMjlhZTc=" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://instagram.com/poupee_gurumis?igshid=YWJhMjlhZTc=" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
                </div>


            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <img class="logo" src="./img/poupee.png" alt="">
                <a class="navbar-brand" href="#">Poupee Gurumis</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#top">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#carouselExampleCaptions">Acerca de Poupee</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#galeria">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section id="carru">
            <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <?php
                    $sql = 'SELECT * FROM banner';
                    $rs = ejecutarConsulta($sql);
                    while ($reg = mysqli_fetch_assoc($rs)) {

                        if ($reg["idBanner"] == 1) {
                            $active = 'active';
                        } else {
                            $active = '';
                        }

                    ?>
                    <div class="carousel-item <?php echo $active ?>">
                        <img src="<?php echo $reg["fotoBanner"]; ?>" class="d-block w-100" alt="<?php echo $reg["tituloBanner"]; ?>">
                        <div class="carousel-caption d-none d-md-block">
                            <h2><?php echo $reg["tituloBanner"]; ?></h2>
                            <p><?php echo $reg["descripcionBanner"]; ?></p>
                        </div>
                    </div>
                    <?php
                    }

                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <div class="container">
            <h2 id="galeria" class="titulo-galeria">Galeria</h2>
            <div class="row justify-content-center ">
                <div class="col-10 ">
                    <div class="row container-grid text-center pt-5 pb-5">
                        <div class="col-xs-12 col-md-4 pt-4">
                            <div class="imagen-box">
                                <div class="imagen1">
                                    <img src="./img/galeria/baila2.jpg" alt="baila2">
                                </div>
                                <div class="imagen2">
                                    <img src="./img/galeria/baila1.jpg" alt="baila1">
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4 pt-4">
                            <div class="imagen-box">
                                <div class="imagen1">
                                    <img src="./img/galeria/leia1.jpg" alt="leia1">
                                </div>
                                <div class="imagen2">
                                    <img src="./img/galeria/leia2.jpg" alt="leia2">
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4 pt-4">
                            <div class="imagen-box">
                                <div class="imagen1">
                                    <img src="./img/galeria/perro2.jpg" alt="perro2">
                                </div>
                                <div class="imagen2">
                                    <img src="./img/galeria/perro1.jpg" alt="perro1">
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4 pt-4">
                            <div class="imagen-box">
                                <div class="imagen1">
                                    <img src="./img/galeria/pollo2.jpg" alt="pollo2">
                                </div>
                                <div class="imagen2">
                                    <img src="./img/galeria/pollo1.jpg" alt="pollo1">
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4 pt-4">
                            <div class="imagen-box">
                                <div class="imagen1">
                                    <img src="./img/galeria/prin2.jpg" alt="prin2">
                                </div>
                                <div class="imagen2">
                                    <img src="./img/galeria/prin1.jpg" alt="prin1">
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4 pt-4">
                            <div class="imagen-box">
                                <div class="imagen1">
                                    <img src="./img/galeria/tortu1.jpg" alt="tortu1">
                                </div>
                                <div class="imagen2">
                                    <img src="./img/galeria/tortu2.jpg" alt="tortu2">
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4 pt-4">
                            <div class="imagen-box">
                                <div class="imagen1">
                                    <img src="./img/galeria/stich1.jpg" alt="stich1">
                                </div>
                                <div class="imagen2">
                                    <img src="./img/galeria/stich2.jpg" alt="stich2">
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4 pt-4">
                            <div class="imagen-box">
                                <div class="imagen1">
                                    <img src="./img/galeria/ove1.jpg" alt="ove1">
                                </div>
                                <div class="imagen2">
                                    <img src="./img/galeria/ove2.jpg" alt="ove2">
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4 pt-4">
                            <div class="imagen-box">
                                <div class="imagen1">
                                    <img src="./img/galeria/sire1.jpg" alt="sirena">
                                </div>
                                <div class="imagen2">
                                    <img src="./img/galeria/sire2.jpg" alt="sirena1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <footer>
        <div id="contacto" class="container pie">
            <div class="row">
                <h3 class="pb-2">contactanos</h3>
                <form id="formContacto" class='formulario' method='post'>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        <input type="text" name="nombreContacto" class="form-control" id="exampleFormControlInput1" placeholder="ingresa tu nombre">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Mail</label>
                        <input type="email" name="mailContacto" class="form-control" id="exampleFormControlInput1" placeholder="ingresa tu e-mail">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">pedinos tu personaje
                            favorito</label>
                        <textarea class="form-control" name="pedidoContacto" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <button type="submit" class="boton-contacto">enviar</button>
                    </div>
                </form>
            </div>


        </div>
        <div>
            <p class="derechos">todos los derechos reservados</p>
        </div>
    </footer>
    <script src="bootstrap-5.0.2\js\bootstrap.min.js"></script>
    <script src="js\funciones.js"></script>
</body>

</html>