@extends('inicio')

@section('title',"Página no encontrada")

@section('content')


<!-- Main content -->
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Pagina no encontrada.</h3>

          <p>
            No pudimos encontrar la página que busca.
            Quizás Necesita <a href="/">Regresar al inicio</a> o intente de nuevo.
          </p>

          <form class="search-form">
            <div class="input-group">
              <!--<input type="text" name="search" class="form-control" placeholder="Search">-->

              <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->

@endsection
