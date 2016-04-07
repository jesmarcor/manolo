@extends ('layout')

@section ('title')
  Departamentos
@stop

@section ('content')
    <h1>Departamentos</h1>
    @foreach ($departamentos as $departamento)
          <div>
          <a href="departamentos/{{ $departamento->id }}">{{ $departamento->nombre }}</a>
          </div>
    @endforeach

@stop
