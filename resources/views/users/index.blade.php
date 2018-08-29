@extends('inicio')
@section('content')


<!-- nueva tabla -->
<div class="row">
    <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6"> -->
    <div class="col">
      <div class="card mb-3">
        <div class="card-header">
          <h3><i class="fa fa-table"></i> Lista de usuarios
          <a href="{{ url('/usuarios/nuevo') }}" class="btn btn-primary btn-sm ml-auto pull-right">Nuevo usuario</a>
          </h3>
        </div>

        @if ($users->isNotEmpty())
        <div class="card-body">
          <div class="table-responsive">
          <table id="example1" class="table table-bordered table-hover display">
            <thead>
              <tr>
                <th>Foto</th>
                <th>Num</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Usuario</th>
                <th>Status</th>
                <th>Detalles</th>
              </tr>
            </thead>
            <tbody>

              @foreach($users as $user)
              <tr>
                <td><img style="height: 40px; width: 40px; background-color: #EFEFEFEF;" class="profile-user-img img-responsive rounded-circle mx-auto d-block"
                src="../../img/user/{{ $user->foto }}" alt="imagen"></td>
                <td align="center">{{ $user->id}}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->apellidoPaterno}}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->username}}</td>
                <td>

                <span class="badge badge-success">
                    @if($user->status===1)
                      Activo
                    @else
                      Inactivo
                    @endif
                </span>

                </td>
                  <td><a href="{{ route('users.show', ['username' => $user->username]) }}">Ver detalles</a></td>
                </tr>
              @endforeach

            </tbody>
          </table>
          </div>

        </div>

        <div class="row">
          <div class="col">
            <div class="panel-heading">
              <a href="{{ url('/usuarios/nuevo') }}" class="btn btn-primary btn-sm ml-auto pull-right">Nuevo usuario</a>
            </div>
          </div>
        </div>

        @endif


      </div><!-- end card-->
    </div>
</div>
<!-- fin de nueva tabla -->

@endsection
