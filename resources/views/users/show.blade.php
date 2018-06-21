@extends('home')
@section('content')

    <!--#################################################################################### -->
    <!--######cuerpo de la pagina ########################################################## -->
    <table class="table table-bordered table-striped table-sm">
        <tbody>
            <tr>
                <td>Opciones</td>
                <td>Num.</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Correo</td>
                <td>Estatus</td>
            </tr>
                <tr>
                  <td>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                      <i class="icon-pencil"></i>
                      </button> &nbsp;
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                      <i class="icon-trash"></i>
                      </button>

                      <th scope="row">{{ $user->id}}</th>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->apellidoPaterno}}</td>
                      <td>{{ $user->apellidoMaterno}}</td>
                      <td>{{ $user->email}}</td>
                      <td>
                          <span class="badge badge-success">Activo</span>
                      </td>


                  </td>



                </tr>


        </tbody>
    </table>
    <p>
      <a href={{ route('users') }}>Regresar al listado de usuarios</a>
    </p>
  <!--#################################################################################### -->

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

@endsection
