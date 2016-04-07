@extends ('layout')

@section ('title')
  Departamento
@stop

@section ('content')

    <h1>Departamento</h1>
    <p>{{ $departamento->nombre }}</p>

    @unless($departamento->dispositivos->isEmpty() )
        <h2>Dispositivos</h2>
            <ul>
            @foreach($departamento->dispositivos as $dispositivo)
                <li>{{ $dispositivo->name }}</li>
            @endforeach
            </ul>
    @endunless
@stop
