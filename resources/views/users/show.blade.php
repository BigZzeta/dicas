@extends('inicio')
@section('content')


<!-- Start content -->
<div class="content">

    <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Perfil</h1>
                        <ol class="breadcrumb float-right">
                            <!--<li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Profile</li>-->
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fa fa-user"></i> Detalle</h3>
                                </div>

                                <div class="card-body">


                                    <form action="#" method="post" enctype="multipart/form-data">

                                    <div class="row">

                                    <div class="col-lg-3 col-xl-3">
                                        <!--
                                        <b>Latest activity</b>: Dec 06 2017, 22:23
                                        <br />
                                        <b>Register date: </b>: Nov 24 2017, 20:32
                                        <br />
                                        <b>Register IP: </b>: 123.456.789-->

                                        <div class="m-b-10"></div>

                                        <div id="avatar_image">
                                            <img style="height: 120px; width: 120px; background-color: #EFEFEFEF;" class="profile-user-img img-responsive rounded-circle mx-auto d-block"
                                            src="../../img/user/{{ $user->foto }}" alt="imagen">

                                            <!--<i class="fa fa-trash-o fa-fw"></i>--> <!--<a class="delete_image" href="#">Eliminar avatar</a>-->

                                        </div>
                                        <!--<div id="image_deleted_text"></div>-->


                                        <div class="m-b-10"></div>

                                        <!--<div class="form-group">
                                        <label>Cambiar avatar</label>
                                        <input type="file" name="image" class="form-control">
                                        </div>-->

                                        <hr>

                                        <h3 class="profile-username text-center">{{ $user->name }} </h3>
                                        <!--<p class="text-muted text-center">Software Engineer</p>
                                        <ul class="list-group list-group-unbordered">
                                        <li class="list-group-item">
                                            <b>Followers</b> <a class="pull-right">1,322</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Following</b> <a class="pull-right">543</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Friends</b> <a class="pull-right">13,287</a>
                                        </li>
                                        </ul>-->

                                    </div>

                                    <div class="col-lg-9 col-xl-9 border-left">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input class="form-control" name="name" type="text" value="{{ $user->name }} {{ $user->apellidoPaterno }} {{ $user->apellidoMaterno }}" readonly />
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                            <div class="form-group">
                                            <label>Correo Electrónico</label>
                                            <input class="form-control" name="email" type="email" value=" {{ $user->email }}" readonly />
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                            <div class="form-group">
                                            <label>Estatus</label>
                                            <input class="form-control" name="status" type="text" value="@if($user->status===1)Activo @else Inactivo @endif" readonly />
                                            </div>
                                            </div>

                                            <div class="col-lg-6">
                                            <div class="form-group">
                                            <label>Telefono</label>
                                            <input class="form-control" name="telefono" type="text" value="" readonly/>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                <p align="right">
                                                <a href="{{ url('/usuarios') }}" class="btn btn-primary">Volver</a>
                                                <a href="{{ route('users.editar', ['username' => $user->username]) }}" class="btn btn-primary">Editar</a>                                                
                                                </p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">

                                        </div>

                                    </div>

                                    </div>

                                    </form>

                    </div>
                    <!-- end card-body -->

                </div>
                <!-- end card -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- END container-fluid -->

</div>
<!-- END content -->

@endsection
