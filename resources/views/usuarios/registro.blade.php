<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TriniTempus - Registro de Usuario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../resources/css/style.css">
</head>
<body id="body-bg" class="container-fluid">
<div class="row position-relative">

    {{--SECCION LOGIN - MENU DESPLEGABLE--}}
    <nav class="burger col-md-9 navbar navbar-expand-md navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <section class="seccion-logeo col-md-3 col-xs-12 position-fixed end-0 top-0 text-center">
                    <img src="{{url('\img\profile.png')}}" alt="Imagen de perfil">

                    <form class="formulario-login" action="{{url('/usuario/registro')}}" method="POST">
                        @csrf
                        <div class="offset-1 col-10 mb-2">
                            <input type="text" class="form-control" name="nombreUsuario" placeholder="Nombre...">
                        </div>
                        <div class="offset-1 col-10 mb-2">
                            <input type="text" class="form-control" name="apellidoUsuario" placeholder="Apellidos...">
                        </div>
                        <div class="offset-1 col-10 mb-2">
                            <input type="text" class="form-control" name="nickname" placeholder="Nick de usuario...">
                        </div>
                        <div class="offset-1 col-10 mb-2">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña...">
                        </div>
                        <div class="offset-1 col-10 mb-2">
                            <input type="email" class="form-control" name="email" placeholder="Email...">
                        </div>
                        <div class="offset-1 col-10 mb-2">
                            <input type="date" class="form-control" name="fechaNacimiento">
                        </div>
                        <div class="offset-1 col-10 mb-2">
                            <input type="number" class="form-control" name="telefonoContacto" placeholder="Teléfono...">
                        </div>
                        <div class="offset-1 col-10 mb-4">
                            <select type="text" class="form-control" name="ciudadResidencia" >
                                <option value="Salamanca">Salamanca</option>
                                <option value="Avila">Ávila</option>
                                <option value="Madrid">Madrid</option>
                            </select>
                        </div>

                        <a href="{{url('/')}}"><button type="button" class="btn btn-secondary">Volver</button></a>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </form>

                    <ul class="informacion-menu-principal" >
                        <a href="{{url('/informacion#sobre-nosotros')}}"><li>Sobre Nosotros</li></a>
                        <a href="{{url('/informacion#politica-privacidad')}}"><li>Politica de Privacidad</li></a>
                        <a href="{{url('/informacion#formulario-contacto')}}"><li>Contactanos</li></a>
                    </ul>
                </section>
            </div>
        </div>
    </nav>


    {{--SECCION PRINCIPAL--}}
    <section class="col-md-9 col-xs-12 text-center">
        <div class="logo-slogan">
            <img src="{{asset('/img/Logo-TriniTempus-Negativo.png')}}" alt="">
            <p>"Contrata los servicios según el tiempo del que dispongas"</p>
        </div>

        <div class="formulario-filtro">
            <h2>Encuentra la mejor oferta</h2>
            <form action="/ofertas/filtro">
                <div class="offset-3 col-6 mb-2">
                    <input type="text" class="form-control" name="ciudad" placeholder="Ciudad...">
                </div>
                <div class="offset-3 col-6 mb-3">
                    <input type="text" class="form-control" name="categoria" placeholder="Categoria...">
                </div>
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </form>
        </div>

        <div class="servicios-top">
            <h2>Servicios mas demandados</h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <a href=""><img src="{{asset('img/carpinteria.png')}}" alt=""></a>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <a href=""><img src="{{asset('img/informatica.png')}}" alt=""></a>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <a href=""><img src="{{asset('img/comida.png')}}" alt=""></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
</body>
</html>
