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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listado ciudadanos</h3>

                
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
                      <th>Acciones</th>

                    </tr>
                  </thead>
                  <tbody>
                    
                      @foreach ($ciudadanos as $ciudadano)
                        @if ($ciudadano->rol == 'ciudadano')
                        <tr>
                            <td>{{$ciudadano->id}}</td>
                            <td>{{$ciudadano->nombre}}</td>
                            <td>{{$ciudadano->apellido}}</td>
                            <td>{{$ciudadano->email}}</td>
                            <td>{{$ciudadano->municipio}}</td>
                            <td>{{$ciudadano->edad}}</td>
                            <td>
                            <form action="{{route('admin.deleteCiudadano',$ciudadano->id)}}" method="POST" name="frm1">
                                
                              <a href="{{ route('admin.editCiudadano',$ciudadano->id)}}" class="btn btn-block btn-primary btn-sm">Editar</a>
                              @csrf
                              
                              <button type="button"  class="btn btn-block btn-danger btn-sm" onclick="return confirmarEliminarCiudadano(this.form)">Eliminar</button>
                              
                              
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
    