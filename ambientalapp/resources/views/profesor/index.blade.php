@extends('layouts.appProfe')

@section('title','Home')
@section('inicio','active')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bienvenid@ {{auth()->user()->nombre}}</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Cultura Ambiental</h3>

          
        </div>
        <div class="card-body">
            <center>
                <img  src="https://www.plataformadeinfancia.org/wp-content/uploads/2022/06/dia-mundial-medio-del-ambiente-.svg" alt="First slide" style="width: 30% ">
                <br><br>
                <h5>Enseñanzas para lograr un mundo mejor</h5>
            </center>
            
      
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
    
@endsection