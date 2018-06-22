    @extends('home')
    @section('content')


<!--#################################################################################### -->
<!--######cuerpo de la pagina ########################################################## -->

<!--<div class="card-body">
    <div class="form-group row">
        <div class="col-md-6">
            <div class="input-group">
                <select class="form-control col-md-3" id="opcion" name="opcion">
                  <option value="nombre">Nombre</option>
                  <option value="descripcion">Descripción</option>
                </select>
                <input type="text" id="texto" name="texto" class="form-control" placeholder="Texto a buscar">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
            </div>
        </div>
    </div>
</div>-->

<!-- crear nuevo usuario -->
<div class="card-body">
  <input type="submit" value="Nuevo Usuario" onclick = "location='/usuarios/nuevo'"/>
</div>

<!-- fin de crear nuevo usuario -->

<table class="table table-bordered table-striped table-sm">
    <tbody>
        @if ($users->isNotEmpty())
        <tr class="">
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
                  <span class="badge badge-success">
                    @if($user->status===1)
                      Activo
                    @else
                      Inactivo
                    @endif
                  </span>
              </td>
              <td><a href="{{ route('users.show', ['id' => $user->id]) }}">Ver detalles</a></td>
            </tr>
            @endforeach

        @else
        <tr>
          <!--
          <td>
              <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
              <i class="icon-pencil"></i>
              </button> &nbsp;
              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
              <i class="icon-trash"></i>
              </button>
          </td> -->

        </tr>

        <p>No hay registros</p>

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
