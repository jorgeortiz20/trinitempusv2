@extends('partials.app')
@extends('partials.perfil')
@extends('partials.menu')
@extends('partials.footer')

@section('title', 'Carta Ofertas')

@section('contenido')
    <div>
        <h1>Nombre Oferta{{--Nombre de la oferta--}}</h1>

        <img src="" alt="Imagen de la oferta">
        <p>Precio</p>
        <p>Descripcion</p>
        <p>Categoria: </p>
        <p>Dias disponibles: </p>

        <a href="{{url('/ofertas-disponibles')}}"><button>Volver</button></a>
        <a href="{{--url()--}}"><button>Solicitar</button></a>
    </div>
@endsection

