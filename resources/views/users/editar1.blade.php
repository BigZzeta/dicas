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

                                        <div class="col-lg-9 col-xl-9">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                <div class="form-group">
                                                <label>Full name (required)</label>
                                                <input class="form-control" name="name" type="text" value="Administrator" required />
                                                </div>
                                                </div>

                                                <div class="col-lg-6">
                                                <div class="form-group">
                                                <label>Valid Email (required)</label>
                                                <input class="form-control" name="email" type="email" value="office@website.com" required />
                                                </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                <div class="form-group">
                                                <label>Password (leave empty not to change)</label>
                                                <input class="form-control" name="password" type="password" value="" />
                                                </div>
                                                </div>

                                                <div class="col-lg-6">
                                                <div class="form-group">
                                                <label>Skype</label>
                                                <input class="form-control" name="skype" type="text" value="skypeid" />
                                                </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                <button type="button" class="btn btn-primary">Edit profile</button>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="col-lg-3 col-xl-3 border-left">
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
                                                
                                                <i class="fa fa-trash-o fa-fw"></i> <a class="delete_image" href="#">Eliminar avatar</a>

                                            </div>
                                            <div id="image_deleted_text"></div>


                                            <div class="m-b-10"></div>

                                            <div class="form-group">
                                            <label>Cambiar avatar</label>
                                            <input type="file" name="image" class="form-control">
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
