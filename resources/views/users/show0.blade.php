@extends('principal')
@section('content')
<main class="main">
            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="container-fluid">
                <!-- Ejemplo de tabla Listado -->
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Categorías
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalNuevo">
                            <i class="icon-plus"></i>&nbsp;Nuevo
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select class="form-control col-md-3" id="opcion" name="opcion">
                                    <option value="nombre">Nombre</option>
                                    <option value="descripcion">Descripcion</option>
                                    </select>
                                    <input type="text" id="texto" name="texto" class="form-control" placeholder="Texto a buscar">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                                </div>
                            </div>
                        </div>
                        <!--#################################################################################### -->
                        <!--######cuerpo de la pagina ########################################################## -->
                        <table class="table table-bordered table-striped table-sm">
                            <tbody>

                                @if ($users->isNotEmpty())
                                <tr>

                                    <td>Opciones</td>
                                    <td>Num.</td>
                                    <td>Nombre</td>
                                    <td>Apellido</td>
                                    <td>Correo</td>
                                    <td>Estatus</td>
                                    <td>Detalles</td>
                                </tr>

                                    @foreach($users as $user)
                                    <tr>
                                      <td>
                                          <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                          <i class="icon-pencil"></i>
                                          </button> &nbsp;
                                          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                          <i class="icon-trash"></i>
                                          </button>
                                      </td>
                                      <th scope="row">{{ $user->id}}</th>
                                      <td>{{ $user->name }}</td>
                                      <td>{{ $user->apellidoPaterno}}</td>
                                      <td>{{ $user->email}}</td>
                                      <td>
                                          <span class="badge badge-success">Activo</span>
                                      </td>
                                      <td><a href="{{ route('users.show', ['id' => $user->id]) }}">Ver detalles</a></td>
                                    </tr>
                                    @endforeach

                                @else
                                <tr>
                                  <td>
                                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                      <i class="icon-pencil"></i>
                                      </button> &nbsp;
                                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                      <i class="icon-trash"></i>
                                      </button>
                                  </td>

                                  <p>No hay registros</p>

                                </tr>

                                @endif

                            </tbody>
                        </table>
                      <!--#################################################################################### -->
                        <nav>
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">Ant</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Sig</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Fin ejemplo de tabla Listado -->
            </div>
            <!--Inicio del modal agregar/actualizar-->
            <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Agregar categoría</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                                    <div class="col-md-9">
                                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre de categoría">
                                        <span class="help-block">(*) Ingrese el nombre de la categoría</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="email-input">Descripción</label>
                                    <div class="col-md-9">
                                        <input type="email" id="descripcion" name="descripcion" class="form-control" placeholder="Enter Email">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal-->
            <!-- Inicio del modal Eliminar -->
            <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-danger" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Eliminar Categoría</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Estas seguro de eliminar la categoría?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- Fin del modal Eliminar -->

        </main>

@endsection





@extends('principal')

@section('title',"Usuario {$user->id}")

@section('content')
  <h1>Usuario Id: {{$user->id}}</h1>

<!--
  <p>Nombre del Usuario: {{$user->name}} {{$user->apellidoPaterno}} {{$user->apellidoMaterno}}</p>
  <p>Username: {{$user->username}}</p>
  <p>Correo Electrónico: {{$user->email}}</p>
-->
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">UserName</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <th scope="row">{{ $user->id}}</th>
        <th scope="row">{{ $user->name}}</th>
        <td>{{ $user->apellidoPaterno }}</td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->email}}</td>
      </tr>


  <p>
    <!--<a href={{ action('UserController@index') }}>Volver al listado de usuarios</a>-->
    <a href={{ route('users') }}>Regresar al listado de usuarios</a>
  </p>

@endsection
