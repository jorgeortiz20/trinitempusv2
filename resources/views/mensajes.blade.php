@extends('partials.app')
@extends('partials.perfil')
@extends('partials.menu')
@extends('partials.footer')

@section('title', 'Nueva oferta')

@section('contenido')
    <div>
        <h1 class="text-center">Mensajes</h1>

        <div class="container">
            <table class="table table-sm">
            <div class="row">
                <div class="col-md-12">
                    <tr class="table-active">
                        <th>Nickname</th>
                        <th>Contenido</th>
                        <th>Servicio</th>
                        <td></td>
                    </tr>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <tr class="table-active">
                            <td>Cuidadora</td>
                            <td>Cuido nenes peques</td>
                            <td>Cuidados</td>
                            <td><a href=""><img class="rounded float-left" src="{{asset('/img/borrar.png')}}" alt="Icono basura para borrar"></a></td>
                        </tr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <tr class="table-active">
                            <td>ElRoni</td>
                            <td>Vendo papadeltas y tambien cocacolas 1 eurito</td>
                            <td>Ventas</td>
                            <td><a href=""><img class="rounded float-left" src="{{asset('/img/borrar.png')}}" alt="Icono basura para borrar"></a></td>
                        </tr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <tr class="table-active">
                            <td>ElFollana</td>
                            <td>Actuaciones de cante y baile, ooole</td>
                            <td>Actuaciones</td>
                            <td><a href=""><img class="rounded float-left" src="{{asset('/img/borrar.png')}}" alt="Icono basura para borrar"></a></td>
                        </tr>
                    </div>
                </div>
            </table>
        </div>
    </div>
@endsection
