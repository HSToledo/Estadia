<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AmbientalApp | Registro</title>

  
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  {{-- <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}"> --}}

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>
<link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>
<link rel="stylesheet" href="{{asset('dist/css/styleReg.css')}}">

</head>
<body class="hold-transition register-page">
    
    <!-- /.register-box -->
    
    <section class="multi_step_form">  
      <form method="post" action="{{route('registerAlumno.store')}}" id="msform"> 
        @csrf
        <div class="register-logo">
          <a href="{{route('main')}}"><b>Ambiental</b>App</a>
        </div>
        <div style="display:none">
            
          <input type="number" value="{{$user->id}}" id="user" name="user">
        </div>
        <!-- Tittle -->
        <div class="tittle">
          <h2>Registrar un nuevo alumno</h2>
        </div>
        <!-- progressbar -->
        
        <!-- fieldsets -->
        <fieldset>
          <h3>Información</h3>
          <h6>Por favor proporciona tu nivel educativo</h6> 
          
          
          <div class="form-group fg_4">

            <select class="form-control select2" name="nivelEducativo" id="nivelEducativo">
              <option value="">Nivel</option>
              <option value="Primaria">Primaria</option>
              <option value="Secundaria">Secundaria</option>
              <option value="Preparatoria">Preparatoria</option>
              
            </select>
          </div>
          
    
          <button type="button" class="nextNivel action-button" >Siguiente</button>  
        </fieldset>

        <fieldset>
          <h3>Información</h3>
          <h6>Proporcionanos tu edad</h6>
          <div class="form-group fg_3"> 
            <input type="number" class="form-control" placeholder="Edad" id="edad" name="edad" >
          </div>
          
          
            <button type="button" class="action-button previous previous_button" style="margin-bottom: 10%">Atras</button>
          
            <button type="button" class="nextEdad action-button" >Siguiente</button>  
            
        </fieldset> 

        <fieldset>
          <h3>Información</h3>
          <h6>Por favor selecciona tu sexo</h6> 
          <div class="form-group fg_2" id="formSexo"> 
            
            <input class="form-control" type="radio" id="masculino" name="sexo" value="masculino">
            <label for="maculino" class="custom-control-label">Masculino</label>
           
            <input class="form-control" type="radio" id="femenino" name="sexo" value="femenino">
            <label for="femenino" class="custom-control-label">Femenino</label>
          
          </div>
          
          
          <button type="button" class="action-button previous previous_button" style="margin-bottom: 10%" >Atras</button>
          <button type="button" class="nextSexo action-button" >Siguiente</button>  
          
          
        </fieldset> 
        <fieldset>
          <h3>Información</h3>
          <h6>Proporcionanos tu municipio</h6>
          <div class="form-group fg_4">
            <label>Municipio</label>
            <select class="form-control select2"  name="municipio" id="municipio">
              <option value="">Municipio</option>
              @foreach ($municipios as $municipio)
                <option value="{{$municipio->nombre}}">{{$municipio->nombre}}</option>
              @endforeach
            </select>
          </div>
          

          <button type="button" class="action-button previous previous_button">Atras</button>
          <button type="button" class="nextMunicipio action-button" >Siguiente</button>  
        </fieldset> 
        <fieldset>
          <h3>Información</h3>
          <h6>Proporcionanos tu escuela</h6>
          <div class="form-group fg_4">
            <label>Escuela</label>
            <select class="form-control select2"  name="escuela" id="escuela">
              <option value="">Escuela</option>
              @foreach ($escuelas as $escuela)
                <option value="{{$escuela->id}}">{{$escuela->nombre}}</option>
              @endforeach
            </select>
          </div>
          
          <button type="button" class="action-button previous previous_button">Atras</button>
          <button type="submit" class="action-button submit" >Registrar</button>  
        </fieldset>  
      </form> 
      
      
    </section> 
    
    
    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
    

    {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script> --}}
{{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script> --}}
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
{{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script> --}}
{{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script> --}}
{{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js'></script> --}}
<script  src="{{asset('dist/js/script.js')}}"></script>

    <script>
        
          //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
          theme: 'bootstrap4'
        })
    </script>


 
    
    </body>

</html>