@extends('layouts.appAdmin')

@section('title','Profesores')
@section('menuProfesor','menu-open')
@section('profesorSeccion','active')
@section('agregarProfesor','active')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profesores</h1>
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
              <form method="post" action="" id="profesorNewForm">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa un nombre">
                  </div>
                  <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingresa un apellido">
                  </div>
                  
                  <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="number" class="form-control" id="edad" name="edad" placeholder="Ingresa la edad">
                  </div>
                  
                  <label >Sexo</label>
                  
                  <div class="input-group mb-3 form-group">
                    
                    <div class="custom-control custom-radio" style="margin-right: 10%">
                      <input class="custom-control-input" type="radio" id="hombre" name="sexo" value="masculino">
                      <label for="hombre" class="custom-control-label">Masculino</label>
                    </div>
                
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="mujer" name="sexo" value="femenino">
                      <label for="mujer" class="custom-control-label">Femenino</label>
                    </div>
                    
                  </div>
                  <div class="form-group">
                    <label>Municipio</label>
                    <select class="form-control select2" style="width: 100%; height:15%;" name="municipio" id="municipio">
                      @foreach ($municipios as $municipio)
                        <option value="{{$municipio->nombre}}">{{$municipio->nombre}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Escuela</label>
                    <select class="form-control select2" style="width: 100%; height:15%;" name="escuela" id="escuela">
                      @foreach ($escuelas as $escuela)
                        <option value="{{$escuela->id}}">{{$escuela->nombre}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Ingresa el email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa la contraseña">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirmación de contraseña</label>
                    <input type="password" class="form-control" placeholder="Confirmación de contraseña" id="password_confirmation" name="password_confirmation">
                    
                  </div>
                  @error('password')  
                      <p class="text-danger">La contraseña no coincide, por favor verificar</p>
                  @enderror

                  
                  
                  
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
    