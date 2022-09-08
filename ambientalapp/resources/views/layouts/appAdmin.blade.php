<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') - Ambiental App</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
   <!-- Select2 -->
 <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
 <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
   <!-- DataTables -->
   <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
   <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
   <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
     
 
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      

      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">1</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 elementos de contenido agregados
          </a>
          
        </div>
      </li>
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="{{asset('dist/img/user.jpg')}}" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline">{{auth()->user()->nombre}} {{auth()->user()->apellido}}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="{{asset('dist/img/user.jpg')}}" class="img-circle elevation-2" alt="User Image">

            <p>
              {{auth()->user()->nombre}} {{auth()->user()->apellido}}
              
            </p>
          </li>
          <!-- Menu Body -->
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat">Perfil</a>
            <a href="{{route('login.destroy')}}" class="btn btn-default btn-flat float-right">Cerrar sesión</a>
          </li>
        </ul>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">AmbientalApp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="{{route('admin.index')}}" class="nav-link @yield('inicio')">
              <ion-icon name="home"></ion-icon>
              <p>
                Inicio
              </p>
            </a>
          </li>
          <li class="nav-item @yield('menuContenido')">
            <a href="#" class="nav-link @yield('contenidoSeccion')">
              <ion-icon name="library"></ion-icon>
              <p>
                Contenido
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.createProfesor')}}" class="nav-link @yield('agregarContenido')">
                  <ion-icon name="add-circle"></ion-icon>
                  <p>Agregar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.indexProfesores')}}" class="nav-link @yield('editarContenido')">
                  <ion-icon name="create"></ion-icon>
                  <p>Editar & Consultar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item @yield('menuProfesor')">
            <a href="#" class="nav-link @yield('profesorSeccion')">
              <ion-icon name="nutrition"></ion-icon>
              <p>
                Profesores
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.createProfesor')}}" class="nav-link @yield('agregarProfesor')">
                  <ion-icon name="add-circle"></ion-icon>
                  <p>Agregar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.indexProfesores')}}" class="nav-link @yield('editarProfesor')">
                  <ion-icon name="create"></ion-icon>
                  <p>Editar & Consultar</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item @yield('menuAlumno')">
            <a href="#" class="nav-link @yield('alumnoSeccion')">
              <ion-icon name="school"></ion-icon>
              <p>
                Alumnos
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.createAlumno')}}" class="nav-link @yield('agregarAlumno')">
                  <ion-icon name="add-circle"></ion-icon>
                  <p>Agregar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.indexAlumnos')}}" class="nav-link @yield('editarAlumno')">
                  <ion-icon name="create"></ion-icon>
                  <p>Editar & Consultar</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item @yield('menuCiudadano')">
            <a href="#" class="nav-link @yield('ciudadanoSeccion')">
              <ion-icon name="people"></ion-icon>
              <p>
                Ciudadanos
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.createCiudadano')}}" class="nav-link @yield('agregarCiudadano')">
                  <ion-icon name="add-circle"></ion-icon>
                  <p>Agregar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.indexCiudadanos')}}" class="nav-link @yield('editarCiudadano')">
                  <ion-icon name="create"></ion-icon>
                  <p>Editar & Consultar</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item @yield('menuCategoria')">
            <a href="#" class="nav-link @yield('categoriaSeccion')">
              <ion-icon name="copy"></ion-icon>
              <p>
                Categorías
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../layout/top-nav.html" class="nav-link @yield('agregarCategoria')">
                  <ion-icon name="add-circle"></ion-icon>
                  <p>Agregar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link @yield('editarCategoria')">
                  <ion-icon name="create"></ion-icon>
                  <p>Editar & Consultar</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item @yield('menuEscuela')">
            <a href="#" class="nav-link @yield('escuelaSeccion')">
              <ion-icon name="business"></ion-icon>
              <p>
                Escuelas
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.createEscuela')}}" class="nav-link @yield('agregarEscuela')">
                  <ion-icon name="add-circle"></ion-icon>
                  <p>Agregar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.indexEscuelas')}}" class="nav-link @yield('editarEscuela')">
                  <ion-icon name="create"></ion-icon>
                  <p>Editar & Consultar</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item @yield('menuInsignia')">
            <a href="#" class="nav-link @yield('insigniaSeccion')">
              <ion-icon name="ribbon"></ion-icon>
              <p>
                Insignias
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../layout/top-nav.html" class="nav-link @yield('agregarInsignia')">
                  <ion-icon name="add-circle"></ion-icon>
                  <p>Agregar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link @yield('editarInsignia')">
                  <ion-icon name="create"></ion-icon>
                  <p>Editar & Consultar</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item @yield('menuTest')">
            <a href="#" class="nav-link @yield('testSeccion')">
              <ion-icon name="document-text"></ion-icon>
              <p>
                Test ambiental
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../layout/top-nav.html" class="nav-link @yield('editarFormulario')">
                  <ion-icon name="create"></ion-icon>
                  <p>Editar formulario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link @yield('editarRecomendacion')">
                  <ion-icon name="create"></ion-icon>
                  <p>Editar recomendaciones</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-header">REPORTES</li>
          <li class="nav-item">
            <a href="../calendar.html" class="nav-link @yield('reporte')">
              <ion-icon name="bar-chart"></ion-icon>
              <p>
                Reportes
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../gallery.html" class="nav-link @yield('bitacoraAdmin')">
              <ion-icon name="id-card"></ion-icon>
              <p>
                Bitácora administrador
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../gallery.html" class="nav-link @yield('baseDatos')">
              <ion-icon name="server"></ion-icon>
              <p>
                Base de datos
              </p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <footer class="main-footer" style="background-color: #591e64">
    <div class="float-right d-none d-sm-block" >
      
    </div>
    {{-- <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved. --}}
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
{{-- Iconos --}}
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard3.js')}}"></script>
<!-- jquery-validation -->
<script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>

<script>
  $(function () {
       $('#alumnoNewForm').validate({
           rules: {
           nombre: {
               required: true
               
           },
           apellido: {
               required: true
               
           },
           nivelEducativo: {
               required: true
               
           },
           edad: {
               required: true
               
           },
           sexo: {
               required: true
               
           },
           municipio: {
               required: true
               
           },
           escuela: {
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
           nivelEducativo: {
               required: "Por favor selecciona el nivel educativo",
               
           },
           edad: {
               required: "Por favor ingresa una edad",
               
           },
           sexo: {
               required: "Por favor selecciona un sexo",
               
           },
           municipio: {
               required: "Por favor selecciona un municipio",
               
           },
           escuela: {
               required: "Por favor selecciona una escuela",
               
           },
           email: {
               required: "Por favor ingresa un email",
               email: "Por favor ingresa un email válido"
           },
           password: {
               required: "Por favor ingresa una contraseña",
               minlength: "Tu contraseña debe ser al menos de 3 carateres"
           },
           
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
</script>
<script>
  $(function () {
       $('#profesorNewForm').validate({
           rules: {
           nombre: {
               required: true
               
           },
           apellido: {
               required: true
               
           },
           
           edad: {
               required: true
               
           },
           sexo: {
               required: true
               
           },
           municipio: {
               required: true
               
           },
           escuela: {
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
           
           edad: {
               required: "Por favor ingresa una edad",
               
           },
           sexo: {
               required: "Por favor selecciona un sexo",
               
           },
           municipio: {
               required: "Por favor selecciona un municipio",
               
           },
           escuela: {
               required: "Por favor selecciona una escuela",
               
           },
           email: {
               required: "Por favor ingresa un email",
               email: "Por favor ingresa un email válido"
           },
           password: {
               required: "Por favor ingresa una contraseña",
               minlength: "Tu contraseña debe ser al menos de 3 carateres"
           },
           
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
</script>

<script>
  $(function () {
       $('#alumnoEditForm').validate({
           rules: {
           nombre: {
               required: true
               
           },
           apellido: {
               required: true
               
           },
           nivelEducativo: {
               required: true
               
           },
           edad: {
               required: true
               
           },
           sexo: {
               required: true
               
           },
           municipio: {
               required: true
               
           },
           escuela: {
               required: true
               
           },
           email: {
               required: true,
               email: true,
           },
           
           
           },
           messages: {
           nombre: {
               required: "Por favor ingresa un nombre",
               
           },
           apellido: {
               required: "Por favor ingresa un apellido",
               
           },
           nivelEducativo: {
               required: "Por favor selecciona el nivel educativo",
               
           },
           edad: {
               required: "Por favor ingresa una edad",
               
           },
           sexo: {
               required: "Por favor selecciona un sexo",
               
           },
           municipio: {
               required: "Por favor selecciona un municipio",
               
           },
           escuela: {
               required: "Por favor selecciona una escuela",
               
           },
           email: {
               required: "Por favor ingresa un email",
               email: "Por favor ingresa un email válido"
           },
           
           
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
</script>
<script>
  $(function () {
       $('#profesorEditForm').validate({
           rules: {
           nombre: {
               required: true
               
           },
           apellido: {
               required: true
               
           },
           
           edad: {
               required: true
               
           },
           sexo: {
               required: true
               
           },
           municipio: {
               required: true
               
           },
           escuela: {
               required: true
               
           },
           email: {
               required: true,
               email: true,
           },
           
           
           },
           messages: {
           nombre: {
               required: "Por favor ingresa un nombre",
               
           },
           apellido: {
               required: "Por favor ingresa un apellido",
               
           },
           
           edad: {
               required: "Por favor ingresa una edad",
               
           },
           sexo: {
               required: "Por favor selecciona un sexo",
               
           },
           municipio: {
               required: "Por favor selecciona un municipio",
               
           },
           escuela: {
               required: "Por favor selecciona una escuela",
               
           },
           email: {
               required: "Por favor ingresa un email",
               email: "Por favor ingresa un email válido"
           },
           
           
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
</script>
<script>
  $(function () {
       $('#escuelaEditForm').validate({
           rules: {
           nombre: {
               required: true
               
           },
           
           municipio: {
               required: true
               
           },
           
           
           },
           messages: {
           nombre: {
               required: "Por favor ingresa un nombre",
               
           },
           
           municipio: {
               required: "Por favor selecciona un municipio",
               
           },

           
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
</script>
<script>
    //Initialize Select2 Elements
    $('.select2').select2()

  //Initialize Select2 Elements
  $('.select2bs4').select2({
    theme: 'bootstrap4'
  })
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  // Confirmación de eliminacion de alumno
  function confirmarEliminarAlumnos(frm){
    const confirm = window.confirm("¿Deseas eliminar al alumno?");

    if (confirm){
        

        frm.submit();
    }

    
  }

  // Confirmación de eliminacion de profe
  function confirmarEliminarProfesores(frm){
    const confirm = window.confirm("¿Deseas eliminar al profesor?");

    if (confirm){
        

        frm.submit();
    }

    
  }

   // Confirmación de eliminacion de ciudadano
   function confirmarEliminarCiudadano(frm){
    const confirm = window.confirm("¿Deseas eliminar al ciudadano?");

    if (confirm){
        

        frm.submit();
    }

    
  }

  // Confirmación de eliminacion de escuelas
  function confirmarEliminarEscuelas(frm){
    const confirm = window.confirm("¿Deseas eliminar la escuela?");

    if (confirm){
        

        frm.submit();
    }

    
  }

</script>
<script>
  $(function () {
    bsCustomFileInput.init();
  });
</script>
<script>
  $(function () {
       $('#ciudadanoNewForm').validate({
           rules: {
           nombre: {
               required: true
               
           },
           apellido: {
               required: true
               
           },
           
           edad: {
               required: true
               
           },
           sexo: {
               required: true
               
           },
           municipio: {
               required: true
               
           },
           email: {
               required: true,
               email: true,
           },
           
           },
           messages: {
           nombre: {
               required: "Por favor ingresa un nombre",
               
           },
           apellido: {
               required: "Por favor ingresa un apellido",
               
           },
           
           edad: {
               required: "Por favor ingresa una edad",
               
           },
           sexo: {
               required: "Por favor selecciona un sexo",
               
           },
           municipio: {
               required: "Por favor selecciona un municipio",
               
           },
           
           email: {
               required: "Por favor ingresa un email",
               email: "Por favor ingresa un email válido"
           },
          
           
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
</script>


</body>
</html>
