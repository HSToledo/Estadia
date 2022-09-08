<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AmbientalApp | Registro</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}"/>
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
</head>
<body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href="{{route('main')}}"><b>Ambiental</b>App</a>
      </div>
    
      <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg">Registrar un nuevo usuario</p>
    
          <form method="post" action="" id="quickForm">
            @csrf
            <div class="input-group mb-3 form-group">
              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            
            <div class="input-group mb-3 form-group">
              <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            
            <div class="input-group mb-3 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            
            <div class="input-group mb-3 form-group">
              <div class="custom-control custom-radio" style="margin-right: 10%">
                <input class="custom-control-input" type="radio" id="rolAlumno" name="rol" value="alumno">
                <label for="rolAlumno" class="custom-control-label">Alumno</label>
              </div>
          
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="rolProfesor" name="rol" value="profesor">
                <label for="rolProfesor" class="custom-control-label">Profesor</label>
              </div>
              
            </div>
            
            {{-- <div class="input-group mb-3 form-group">
              <label>Municipio</label>
              <select class="form-control select2" style="width: 100%; height:10%;" name="municipio" id="municipio">
                @foreach ($municipios as $municipio)
                        <option value="{{$municipio->nombre}}">{{$municipio->nombre}}</option>
                      @endforeach
              </select>
            </div> --}}
            
            <div class="input-group mb-3 form-group">
              <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            
            <div class="input-group mb-3 form-group">
              <input type="password" class="form-control" placeholder="Confirmación de contraseña" id="password_confirmation" name="password_confirmation">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            @error('password')  
                <p class="text-danger">La contraseña no coincide, por favor verificar</p>
            @enderror
            <div class="row">
              
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Registrar</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
    
          <div class="social-auth-links text-center">
            <p>- O -</p>
            <a href="#" class="btn btn-block btn-primary">
              <i class="fab fa-facebook mr-2"></i>
              Registrarse usando Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
              <i class="fab fa-google-plus mr-2"></i>
              Registrarse usando Google
            </a>
          </div>
    
          <a href="{{route('login.index')}}" class="text-center">¿Ya tiene una cuenta?</a>
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
    
    
    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
    <!-- jquery-validation -->
    <script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
    <script>
        $(function () {
          $('#quickForm').validate({
              rules: {
              nombre: {
                  required: true
                  
              },
              apellido: {
                  required: true
                  
              },
              rol: {
                  required: true
                  
              },
              email: {
                  required: true,
                  email: true,
              },
              password: {
                  required: true,
                  minlength: 3
               
              },
              
              },
              messages: {
              nombre: {
                  required: "Por favor ingresa un nombre",
                  
              },
              apellido: {
                  required: "Por favor ingresa un apellido",
                  
              },
              rol: {
                  required: "Por favor selecciona que tipo de usuario eres",
                  
              },
              email: {
                  required: "Por favor ingresa un email",
                  email: "Por favor ingresa un email válido"
              },
              password: {
                  required: "Por favor ingresa una contraseña",
                  minlength: "Tu contraseña debe ser al menos de 3 carateres"
              },
              terms: "Please accept our terms"
              },
              errorElement: 'span',
              errorPlacement: function (error, element) {
              error.addClass('invalid-feedback');
              element.closest('.form-group').append(error);
              },
              highlight: function (element, errorClass, validClass) {
              $(element).addClass('is-invalid');
              },
              unhighlight: function (element, errorClass, validClass) {
              $(element).removeClass('is-invalid');
              }
          });
        });
          //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
          theme: 'bootstrap4'
        })
    </script>
 
    
    </body>

</html>