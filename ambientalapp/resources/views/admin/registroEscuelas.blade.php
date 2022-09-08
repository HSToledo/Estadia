@extends('layouts.appAdmin')

@section('title','Escuelas')
@section('menuEscuela','menu-open')
@section('escuelaSeccion','active')
@section('agregarEscuela','active')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Escuelas</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admin.importEscuelas')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="card-body">

                  <div class="form-group">
                    <label for="cargaMasivaEscuelas">Carga masiva de escuelas Excel</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="cargaMasivaEscuelas" name="cargaMasivaEscuelas" required>
                        <label class="custom-file-label" for="cargaMasivaEscuelas">Carga el archivo Excel</label>
                      </div>
                      <div class="input-group-append">
                        <button class="input-group-text">Importar</button>
                      </div>
                    </div>
                  </div>
                  @if (Session::has('message'))
                  <p class="text-danger">{{Session::get('message')}}</p>
                @endif
                </div>
              </form>
              <form method="post" action="" id="alumnoNewForm">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa un nombre">
                  </div>

                  <div class="form-group">
                    <label>Municipio</label>
                    <select class="form-control select2" style="width: 100%; height:15%;" name="municipio" id="municipio">
                      @foreach ($municipios as $municipio)
                        <option value="{{$municipio->nombre}}">{{$municipio->nombre}}</option>
                      @endforeach
                    </select>
                  </div>
                 
                  
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
              </form>
              <div class="card-footer">
                <a href="{{route('admin.index')}}"><button class="btn btn-danger">Cancelar</button></a>
              </div>
              
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  

@endsection
    