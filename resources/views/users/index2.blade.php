@extends('principal')

@section('content')

  <h1>{{$title}}</h1>
    <ul>
      <br>
      @if ($users->isNotEmpty())
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Email</th>
            <th>Detalle</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <th scope="row">{{ $user->id}}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->apellidoPaterno}}</td>
            <td>{{ $user->email}}</td>
            <td><a href="{{ route('users.show', ['id' => $user->id]) }}">Ver detalles</a></td>
          </tr>
          @endforeach

        </tbody>
      </table>
      @else
        <p>No hay registros</p>
      @endif

      <!--
      @forelse ($users as $user)
        <li>

          {{ $user->name }},{{$user->email}}
          <a href="{{ route('users.show',['id' => $user->id]) }}">Ver detalle</a>

        </li>

      @empty
        <li>No hay usuarios registrados</li>
      @endforelse
    -->
    </ul>

@endsection('content')

@section('sidebar')
  @parent
@endsection
