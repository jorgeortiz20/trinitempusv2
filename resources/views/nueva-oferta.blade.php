@extends('partials.app')
@extends('partials.perfil')
@extends('partials.menu')
@extends('partials.footer')

@section('title', 'Nueva oferta')

@section('contenido')
    <div>
        <h1 class="text-center">Nueva Oferta</h1>

        <div class="container">


            <form class="formulario-login" action='{{url("mis-ofertas/$oferta->id")}}' method="POST">
                @csrf
                @if ($oferta->id)
                    <input type="hidden" name="_method" value="PUT">
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <p>Nombre:</p>
                        <input type="text" name="nombreOferta" id="" placeholder="Nombre de la Oferta" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Tiempo diario: (max. 10 horas diarias)</p>
                        <input type="text" name="tiempoDiarioOfrece" id="" placeholder="Tiempo diario" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Categoria:</p>
                        <select id="" name="categoria_id" class="form-control">
                            <option value="1">Cuidados</option>
                            <option value="2">Clases particulares</option>
                            <option value="3">Pequeñas reparaciones</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>SubCategoria:</p>
                        <select name="subcategorias" class="form-control">
                            <option value="1">SubCategoria 1</option>
                            <option value="2">SubCategoria 2</option>
                            <option value="3">SubCategoria 3</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p>Fechas que lo puede realizar:</p>
                        <div class="offset-1 col-10 mb-2">
                            <input type="date" class="form-control" name="fechaPuedeIniciar">
                        </div>

                        <div class="offset-1 col-10 mb-2">
                            <input type="date" class="form-control" name="fechaDebeAcabar">
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        {{--                        @csrf--}}
                        <label for="archivo">Multimedia: </label><br>
                        <input type="file" name="fotoOferta" value="">
                    </div>




                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href=""><input type="button" value="Cancelar" class="btn btn-secondary"></a>
                        <input type="submit" value="Aceptar" class="btn btn-primary">
                    </div>
                </div>
            </form>


            {{--                    Modificado en plan ñapa (Formulario dentro de otro) by Pepe--}}

           {{-- <br>Nombre Imagen:<input type="text" name="fotoOferta" value="{{$oferta->fotoOferta}}">--}}

            <form action="{{url('subir')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <label for="archivo"><b>Seleccionar la foto de tu oferta: </b></label><br>
                <input type="file" name="archivo" required>
                <input class="btn btn-success" type="submit" value="Enviar">
            </form>

            {{--                    Modificado en plan ñapa by Pepe--}}



        </div>
    </div>
@endsection
