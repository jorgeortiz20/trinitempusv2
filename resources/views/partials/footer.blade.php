@section('footer')
<div>
    <a href={{url('/informacion#formulario-contacto')}}""><img src="{{asset('/img/email.png')}}" alt="Logotipo correo"></a>
    <a href="https://www.instagram.com/" target="_blank"><img src="{{asset('/img/instagram.png')}}" alt="Logotipo Instagram"></a>
    <a href="https://www.facebook.com/" target="_blank"><img src="{{asset('/img/facebook.png')}}" alt="Logotipo Facebook"></a>
</div>

<p>· TriniTempus - Copyright®</p>

<div>
    <ul>
        <a href="{{url('/informacion#sobre-nosotros')}}"><li>Sobre Nosotros</li></a>
        <a href="{{url('/informacion#politica-privacidad')}}"><li>Politica de Privacidad</li></a>
    </ul>
</div>
@endsection
