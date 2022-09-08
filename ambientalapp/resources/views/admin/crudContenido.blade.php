@extends('layouts.appAdmin')

@section('title','Contenidos')
@section('menuContenido','menu-open')
@section('contenidoSeccion','active')
@section('editarContenido','active')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contenido</h1>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listado del contenido</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Tipo</th>
                      <th>Tipos Usuario</th>
                      <th>Municipio</th>
                      <th>Nivel educativo</th>
                      <th>Edad</th>
                      <th>Escuela</th>
                      <th>Acciones</th>

                    </tr>
                  </thead>
                  <tbody>
                    
                      @foreach ($alumnos as $alumno)
                        @if ($alumno->rol == 'alumno')
                        <tr>
                            <td>{{$alumno->id}}</td>
                            <td>{{$alumno->nombre}}</td>
                            <td>{{$alumno->apellido}}</td>
                            <td>{{$alumno->email}}</td>
                            <td>{{$alumno->municipio}}</td>
                            <td>{{$alumno->nivelEducativo}}</td>
                            <td>{{$alumno->edad}}</td>
                            <td>
                              @foreach ($escuelas as $escuela)
                                  @if ($escuela->id == $alumno->idEscuela)
                                    {{$escuela->nombre}}
                                  @endif
                              @endforeach
                            </td>
                            <td>
                            <form action="{{route('admin.deleteAlumno',$alumno->id)}}" method="POST" name="frm1">
                                
                              <a href="{{ route('admin.editAlumno',$alumno->id)}}" class="btn btn-block btn-primary btn-sm">Editar</a>
                              @csrf
                              
                              <button type="button"  class="btn btn-block btn-danger btn-sm" onclick="return confirmarEliminarAlumnos(this.form)">Eliminar</button>
                              
                              
                            </form>
                            
                            </td>
                            
                        </tr> 
                        @endif
                      
                      @endforeach
                      
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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
    