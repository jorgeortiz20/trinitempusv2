@extends('partials.app')
@extends('partials.perfil')
@extends('partials.menu')
@extends('partials.footer')

@section('title', 'Carta Ofertas')

@section('contenido')
    <div>
        <h1 class="text-center">¿Por qué cancelas el servicio?</h1>

        <div>
            <p>Motivo:</p>
            <form action="" method="POST">
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <a href=""><button type="button">Volver</button></a>
                <input type="submit" value="Cancelar">
            </form>
        </div>
    </div>
@endsection
