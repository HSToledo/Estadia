@extends('layouts.appAdmin')

@section('title','Ciudadanos')
@section('menuCiudadano','menu-open')
@section('ciudadanoSeccion','active')
@section('editarCiudadano','active')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ciudadanos</h1>
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
              <form method="post" action="{{route('admin.updateCiudadano',$ciudadano->id)}}" id="ciudadanoEditForm">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$ciudadano->nombre}}">
                  </div>
                  <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value="{{$ciudadano->apellido}}">
                  </div>
                 
                  <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="number" class="form-control" id="edad" name="edad" value="{{$ciudadano->edad}}">
                  </div>
                  
                  <label >Sexo</label>
                  
                  <div class="input-group mb-3 form-group">
                    
                    <div class="custom-control custom-radio" style="margin-right: 10%">
                      <input class="custom-control-input" type="radio" id="hombre" name="sexo" value="masculino" @if ($ciudadano->sexo == 'masculino') checked='checked' @endif>
                      <label for="hombre" class="custom-control-label">Masculino</label>
                    </div>
                
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="mujer" name="sexo" value="femenino"  @if ($ciudadano->sexo == 'femenino') checked='checked' @endif>
                      <label for="mujer" class="custom-control-label">Femenino</label>
                    </div>
                    
                  </div>
                  <div class="form-group">
                    <label>Municipio</label>
                    <select class="form-control select2" style="width: 100%; height:15%;" name="municipio" id="municipio">
                      @foreach ($municipios as $municipio)
                        <option value="{{$municipio->nombre}}" @if ($ciudadano->municipio == $municipio->nombre) selected='selected' @endif >{{$municipio->nombre}}</option>
                      @endforeach
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$ciudadano->email}}">
                  </div>
            
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
              </form>
              <div class="card-footer">
                <a href="{{route('admin.indexCiudadanos')}}"><button class="btn btn-danger">Cancelar</button></a>
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
    