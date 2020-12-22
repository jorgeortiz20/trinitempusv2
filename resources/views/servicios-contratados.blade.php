@extends('partials.app')
@extends('partials.perfil')
@extends('partials.menu')
@extends('partials.footer')

@section('title', 'Carta Ofertas')

@section('contenido')
    <div>
        <h1 class="text-center">Servicios Contratados</h1>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('img/carpinteria.png')}}" alt="Imagen Servicio Contratado">
                    <h3>Nombre de la oferta</h3>
                    <p>Precio</p>
                    <a href="{{url('cancelar-servicio')}}"><button class="btn btn-danger" type="button">Cancelar</button></a>
                </div>

                <div class="col-md-6">
                    <img src="{{asset('img/comida.png')}}" alt="Imagen Servicio Contratado">
                    <h3>Nombre de la oferta</h3>
                    <p>Precio</p>
                    <a href="{{url('cancelar-servicio')}}"><button class="btn btn-danger" type="button">Cancelar</button></a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('img/cuidado.png')}}" alt="Imagen Servicio Contratado">
                    <h3>Nombre de la oferta</h3>
                    <p>Precio</p>
                    <a href=""><button class="btn btn-danger" type="button">Cancelar</button></a>
                </div>

                <div class="col-md-6">
                    <img src="{{asset('img/informatica.png')}}" alt="Imagen Servicio Contratado">
                    <h3>Nombre de la oferta</h3>
                    <p>Precio</p>
                    <a href=""><button class="btn btn-danger" type="button">Cancelar</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
