@extends('partials.app')
@extends('partials.perfil')
@extends('partials.menu')
@extends('partials.footer')

@section('title', 'Nueva oferta')

@section('contenido')
    <div>
        <h1 class="text-center">Editar Perfil</h1>

        <div class="container">
            <form action="{{url("ofertas")}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <p>Datos personales del usuario</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Nombre: Nombre Actual del Usuario</p>
                        <p>Nuevo: <input type="text" name="nombre" id="" placeholder="Nombre" class="form-control"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Apellidos: Apellidos actuales del Usuario</p>
                        <p>Nuevo: <input type="text" name="apellidos" id="" placeholder="Apellidos" class="form-control"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Ciudad: Ciudad actual del Usuario</p>
                        <select name="ciudades" class="form-control">
                            <option value="salamanca">Salamanca</option>
                            <option value="zamora">Zamora</option>
                            <option value="leon">Leon</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Datos de la cuenta</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>NiackName:  Nick actual del Usuario</p>
                        <p>Nuevo: <input type="text" name="nickname" id="" placeholder="NickName" class="form-control"></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p>Contraseña Actual: <input type="text" name="contraseniaActual" id="" placeholder="Contraseña actual" class="form-control" required></p>
                        <p>Nueva contraseña: <input type="text" name="nuevaContrasenia" id="" placeholder="Nueva Contraseña" class="form-control" ></p>


                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="" ><input type="button" value="Cancelar" class="btn btn-secondary"></a>
                        <input type="submit" value="Guardar Cambios" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

