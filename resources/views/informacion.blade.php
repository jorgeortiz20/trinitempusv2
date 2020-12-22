<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trinitempus - Información</title>

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<body>

{{--MENU--}}
    <header>
        <nav>
            <img src="" alt="Logotipo TriniTempus">
            <ul>
                <a href="{{url('/informacion#sobre-nosotros')}}"><li>Sobre Nosotros</li></a>
                <a href="{{url('/informacion#politica-privacidad')}}"><li>Politica de Privacidad</li></a>
                <a href="{{url('/informacion#formulario-contacto')}}"><li>Contacta</li></a>
                <a href="{{url('/')}}"><li>Iniciar Sesion</li></a>
            </ul>
        </nav>
    </header>


{{--SECCION SOBRE NOSOTROS--}}
    <section id="sobre-nosotros">
        <h1>Sobre Nosotros</h1>
        <p>Slogan trinitempus</p>

        <div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <img src="" alt="">
        </div>
    </section>


{{--SECCION POLITICA DE PRIVACIDAD--}}
    <section id="politica-privacidad">
        <h1>Politica de Privacidad</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </section>


{{--SECCION FORMULARIO DE CONTACTO--}}
    <section id="formulario-contacto">
        <h1>Contacta con Nosotros</h1>

        <form action="" method="POST">
            <input type="text" name="nombre" placeholder="Nombre...">
            <input type="text" name="Apellidos" placeholder="Apellidos...">
            <input type="text" name="email" placeholder="Correo Electronico...">
            <input type="text" name="telefono" placeholder="Teléfono...">
            <input type="submit" value="Enviar">
            <button type="button">Cancelar</button>
        </form>
    </section>

{{--FOOTER--}}
    <footer>
        @include('partials.footer')
    </footer>

</body>
</html>
