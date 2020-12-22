@extends('partials.app')
@extends('partials.perfil')
@extends('partials.menu')
@extends('partials.footer')

@section('title', 'Nueva oferta')

@section('contenido')
    <div>
        <h1 class="text-center">Editar Oferta</h1>

        <div class="container">
            <form action="{{url("ofertas/$oferta->id")}}" method="POST">
                @csrf
                @if ($oferta->id)
                    <input type="hidden" name="_method" value="PUT">
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <p>Nombre:</p>
                        <input type="text" name="nombre" id="" placeholder="Nombre" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Tiempo diario: (max. 10 horas diarias)</p>
                        <input type="text" name="tDiario" id="" placeholder="Tiempo diario" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Categoria:</p>
                        <select name="categorias" class="form-control" class="form-control" >
                            <option value="categoria1">Categoria 1</option>
                            <option value="categoria2">Categoria 2</option>
                            <option value="categoria3">Categoria 3</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>SubCategoria:</p>
                        <select name="subcategorias" class="form-control">
                            <option value="subcategoria1">SubCategoria 1</option>
                            <option value="subcategoria2">SubCategoria 2</option>
                            <option value="subcategoria3">SubCategoria 3</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Ciudad:</p>
                        <select name="ciudades" class="form-control">
                            <option value="salamanca">Salamanca</option>
                            <option value="zamora">Zamora</option>
                            <option value="leon">Leon</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @csrf
                        <label for="archivo">Multimedia: </label><br>
                        <input type="file" name="archivo"  >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="" ><input type="button" value="Cancelar" class="btn btn-secondary"></a>
                        <input type="submit" value="Aceptar" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
