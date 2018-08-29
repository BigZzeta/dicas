<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="shortcut icon" href="{{asset('img/icon.png')}}" />
        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->
        <!--Bootstrap 4.1-->
        <link href=" {{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
        <link href=" {{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href=" {{ asset('assets/css/carousel.css') }}" rel="stylesheet" type="text/css">
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('assets/js/jquery.min.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('assets/js/bootstrap.js') }}"  type="text/javascript"></script>
    </head>
    <body style="background: #009688">

        <!--Una barra de navegacion-->
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="index.html#">Tendencias</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#">Informacion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="index.html#">Registrarse</a>
                        </li>
                    </ul>
                    <form class="form-inline mt-2 mt-md-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
                    </form>
                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#loginModal">
                        {{'Login'}}</button>
                </div>
            </nav>
        </header>
        <!--Carrusel-->
        <main role="main">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="first-slide" src="{{ asset('img/car_1.jpg')}}" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h1>Example headline.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p><a class="btn btn-lg btn-primary" href="index.html#" role="button">Aceptar</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="second-slide" src="{{ asset('img/car_2.jpg') }}" alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Another example headline.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p><a class="btn btn-lg btn-primary" href="index.html#" role="button">Aceptar</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="third-slide" src="{{ asset('img/car_3.jpg') }} " alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption text-right">
                                <h1>One more for good measure.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p><a class="btn btn-lg btn-primary" href="index.html#" role="button">Aceptar</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!--Fin carrusel-->

            <!--Avisos-->
            <div class="container marketing">
                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <div class="col-lg-4">
                        <img class="rounded-circle" src="{{asset('img/img1.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">Aceptar &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img class="rounded-circle" src="{{asset('img/img1.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                        <h2>Heading</h2>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">Aceptar &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img  class="rounded-circle" src="{{asset('img/img1.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">Aceptar &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
                <!--Fin Avisos-->

                <!--Aqui vamos a poner una ventana modal de logueo-->
                <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background: yellowgreen;">
                                <h5 class="modal-title" >Login</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form1" action="{{route('validar')}}" method="POST" >
                                <div class="modal-body" >
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-4">Usuario:</div>
                                            <input id="usr" name="usr" type="text" class="col-sm-8 form-control" required placeholder="Su usuario..."/>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 " >Contraseña:</div>
                                            <input id="pass" name="pass" type="password" class="col-sm-8 form-control" required placeholder="*****"/>
                                            <!-- token de laravel-->
                                            {{ csrf_field() }}
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer" >
                                    <button id="est" type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                    <button  id="ajax" type="button" onclick="validaLogueo()" class="btn btn-success">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <a id="logueado" href="#"></a>
                <!--Aqui termina la ventana modal de logueo-->

                <!--Ejecutar ajax de formulario Login-->
                <script type="text/javascript">
                    function validaLogueo() {
                        /*el link*/
                        var link = document.getElementById('logueado');
                        var form = $('#form1');
                        var url = form.attr('action');
                        //alert("la ruta: " + url);
                        var data = form.serialize();
                        $.post(url, data, function (result) {
                            // alert("el msj: " + result.Login);
                            if (result == 'error') {
                                alert("Credenciales incorrectas, Intenta de Nuevo!!! ;)");
                            } else {
                                link.href = result.Login;
                                link.click();
                            }
                        }).fail(function (jqXHR) {
                            alert('sesion vencida, recarga la pagina');
                            //alert(jqXHR.responseText);
                        });

                        /*  var form = $('#form1');
                         var url = form.attr('action');
                         var data = form.serialize();
                         alert(data);
                         $.ajax({
                         url: url,
                         headers: {'X-CSRF-TOKEN': token},
                         type: 'POST',
                         dataType: 'json',
                         data: data,
                         success: function (respuesta) {
                         var a = respuesta.msj;
                         if (a == "Logueado") {
                         var en = document.getElementById("entrada");
                         en.click();
                         } else {
                         alert("Error en el logueo, intente de nuevo");
                         }
                         },
                         error: function () {
                         alert("Recarga la pagina, se ha vencido la sesión");
                         }
                         });*/
                    }
                </script>
                </body>
                </html>
