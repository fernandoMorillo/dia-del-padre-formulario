<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/index.css">

    <link href="https://fonts.googleapis.com/css?family=Arimo:400,700&display=swap" rel="stylesheet">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.6/dist/css/uikit.min.css"/>

    <title>Sorteo día del padre</title>
</head>

<body>

<div class="fondo">
    <nav style="background: transparent ;" class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-left pos-logo">
            <div class="uk-navbar-center-left"></div>
            <ul class="uk-navbar-nav">
                <a class="uk-navbar-item uk-logo" href="#"><img
                        src="img/logo_olivos.png" width="70px" alt="">
                </a>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex flex-wrap">
                <div class="uk-section uk-container-large center-btn">
                    <div class="uk-container uk-container-large">
                        <div class="uk-container uk-container-small uk-hight-medium">
                            <div class="uk-card uk-card-hover uk-card-body color-tarjeta">
                                <form name="formulario" action="datos.php" method="post">
                                    <div class="inscribir">
                                        <h3>Inscribir a papá</h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nombres y apellidos</label>
                                        <input type="text" class="form-control" name="name_apellido" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="celular">Celular</label>
                                        <input type="number" class="form-control" name="celular" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="namefather">Nombre del padre</label>
                                        <input type="text" class="form-control" name="namefather" required>
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" value="1" onclick="validar(this)" class="form-check-input" id="terminos">
                                        <label class="form-check-label" for="terminos">Acepto los <a href="https://www.losolivoscartagena.com/tratamiento-de-datos">términos y condiciones </a></label>
                                    </div>
                                    <div class="concurso">
                                        <button type="submit" name="enviar" class="btn btn-primary" disabled>Concursar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center justify-content-md-start">
                <label style="margin: 10px; color: black">&copy;2020 Los Olivos Cartagena</label>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center justify-content-md-end">
                <label style="margin: 10px; color: white"><a href="https://www.facebook.com/Olivos.Ctg/"><img
                        src="img/fb.png" alt="facebook" width="35"></a></label>
                <label style="margin: 10px; color: white"><a href="https://www.instagram.com/olivos.ctg/"><img
                        src="img/ig_logo.png" alt="instagram" width="35"></a></label>
                <label style="margin: 10px; color: white"><a
                        href="https://api.whatsapp.com/send?phone=+573008131043"><img src="img/ws.png"
                                                                                      alt="whatsapp"
                                                                                      width="35"></a></label>
            </div>
        </div>
    </div>
</footer>
<script src="index.js"></script>
<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.4.6/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.4.6/dist/js/uikit-icons.min.js"></script>


</body>

</html>