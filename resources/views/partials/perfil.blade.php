@section('perfil')
<a href=""><img class="offset-md-11 col-md-1" src="{{asset('/img/campana.png')}}" alt="Campana de notificaciones"></a><br>

<div class="text-center">
    <img src="{{asset('/img/profile.png')}}" alt="Imagen de perfil">
</div>

<p>Nickname</p>
<p>Nombre del Usuario</p>
<p>Tiempo</p>

<a href="{{url('/mis-ofertas')}}">Mis Ofertas</a><br>
<a href="{{url('/servicios-contratados')}}">Servicios Contratados</a><br>

<a style="bottom: 100px; position: absolute" href="{{url("editar-perfil")}}">Editar Perfil</a><br>
<a style="bottom: 75px; position: absolute" href="">Cerrar Sesion</a>
@endsection
