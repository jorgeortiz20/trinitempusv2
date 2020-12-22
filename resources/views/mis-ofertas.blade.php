@extends('partials.app')
@extends('partials.perfil')
@extends('partials.menu')
@extends('partials.footer')

@section('title', 'Mis Ofertas')

@section('contenido')
    <div>
        <h1 class="text-center">Mis Ofertas</h1>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('img/comida.png')}}" alt="Imagen Oferta">
                    <h3>Nombre de la oferta</h3>
                    <p>Precio</p>
                    <a href=""><button type="button">Ver</button></a>
                </div>

                <div class="col-md-6">
                    <img src="{{asset('img/cuidado.png')}}" alt="Imagen Oferta">
                    <h3>Nombre de la oferta</h3>
                    <p>Precio</p>
                    <a href=""><button type="button">Ver</button></a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('img/carpinteria.png')}}" alt="Imagen Oferta">
                    <h3>Nombre de la oferta</h3>
                    <p>Precio</p>
                    <a href=""><button type="button">Ver</button></a>
                </div>

                <div class="col-md-6">
                    <img src="{{asset('img/informatica.png')}}" alt="Imagen Oferta">
                    <h3>Nombre de la oferta</h3>
                    <p>Precio</p>
                    <a href=""><button type="button">Ver</button></a>
                </div>
            </div>
        </div>

    </div>
@endsection

