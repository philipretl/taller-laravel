@extends('plantilla.plantilla')

@section('subtittle')
  <h1>Ingresar una Docente</h1>
@endsection


@section('contenido')
  <div class="">
      <div class="page-title">
          <div class="title_left">
            <h3>Agregar Docente</h3>
          </div>


        <div class="clearfix"></div>

        <div class="row">

          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>A continuación se podrán crear Docentes.

                </h2>

                <ul class="nav navbar-right panel_toolbox">
                  <li>
                    <a class="collapse-link">
                      <i class="fa fa-chevron-up"></i>
                    </a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                      <li>
                        <a href="#">Settings 1</a>
                      </li>
                      <li>
                        <a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a class="close-link">
                      <i class="fa fa-close"></i>
                    </a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>

              <div class="x_content">

                    <div class="x_content">
                      <br />
                      @isset($mensaje)
                        <h4>{{$mensaje}}</h4>
                      @endisset
                      @isset($a)
                        <h4>{{$a}}</h4>
                      @endisset
                      <br>
                      <form action="" method="POST" id="form_x" data-parsley-validate class="form-horizontal form-label-left">
                         {{ csrf_field() }}
                         <div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre Docente<span class="required">*</span>
                           </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12">
                           </div>
                         </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo">tipo<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="tipo">
                              <option value="ocasional">Ocasional</option>
                              <option value="planta">planta</option>
                            </select>
                          </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                            <button type="submit" class="btn btn-success">Agregar Docente</button>
                          </div>
                        </div>

                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection
