@extends('layouts.appAdmin')

@section('title','Profesores')
@section('menuProfesor','menu-open')
@section('profesorSeccion','active')
@section('editarProfesor','active')

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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listado profesores</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Email</th>
                      <th>Municipio</th>
                      <th>Edad</th>
                      <th>Escuela</th>
                      <th>Acciones</th>

                    </tr>
                  </thead>
                  <tbody>
                    
                      @foreach ($profesores as $profe)
                        @if ($profe->rol == 'profesor')
                        <tr>
                            <td>{{$profe->id}}</td>
                            <td>{{$profe->nombre}}</td>
                            <td>{{$profe->apellido}}</td>
                            <td>{{$profe->email}}</td>
                            <td>{{$profe->municipio}}</td>
                            <td>{{$profe->edad}}</td>
                            <td>
                              @foreach ($escuelas as $escuela)
                                  @if ($escuela->id == $profe->idEscuela)
                                    {{$escuela->nombre}}
                                  @endif
                              @endforeach
                            </td>
                            <td>
                            <form action="{{route('admin.deleteProfesor',$profe->id)}}" method="POST" name="frm1">
                                
                              <a href="{{ route('admin.editProfesor',$profe->id)}}" class="btn btn-block btn-primary btn-sm">Editar</a>
                              @csrf
                              
                              <button type="button"  class="btn btn-block btn-danger btn-sm" onclick="return confirmarEliminarProfesores(this.form)">Eliminar</button>
                              
                              
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
    