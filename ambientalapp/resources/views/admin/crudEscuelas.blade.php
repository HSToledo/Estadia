@extends('layouts.appAdmin')

@section('title','Escuelas')
@section('menuEscuela','menu-open')
@section('escuelaSeccion','active')
@section('editarEscuela','active')

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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listado Escuelas</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>                     
                      <th>Municipio</th>
                      <th>Acciones</th>

                    </tr>
                  </thead>
                  <tbody>
                    
                      @foreach ($escuelas as $escuela)
                        
                        <tr>
                            <td>{{$escuela->id}}</td>
                            <td>{{$escuela->nombre}}</td>                            
                            <td>{{$escuela->municipio}}</td>
                            
                            <td>
                            <form action="{{route('admin.deleteEscuela',$escuela->id)}}" method="POST" name="frm1">
                                
                              <a href="{{ route('admin.editEscuela',$escuela->id)}}" class="btn btn-block btn-primary btn-sm">Editar</a>
                              @csrf
                              
                              <button type="button"  class="btn btn-block btn-danger btn-sm" onclick="return confirmarEliminarEscuelas(this.form)">Eliminar</button>
                              
                              
                            </form>
                            
                            </td>
                            
                        </tr> 
                        
                      
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
    