<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>PFF</title>
  <!-- CSS-->
  <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/plantilla.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/vue-select@latest/dist/vue-select.css">
</head>

<body id="page-top">
  <div id="app">
    <!-- Page Wrapper -->
    <div id="wrapper">
      @if (Auth::check())
          <!-- Administrador -->
          @if (Auth::user()->rol_id == 1)
            @include('contenido.sidebar1')
          <!-- Director Proyecto -->
          @elseif(Auth::user()->rol_id == 2)
            @include('contenido.sidebar2')
          <!-- Programador -->
          @elseif(Auth::user()->rol_id == 3)
            @include('contenido.sidebar3')
          <!-- Cliente -->
          @elseif(Auth::user()->rol_id == 4)
            @include('contenido.sidebar4')
          @endif
      @endif
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <div class="topbar-divider d-none d-sm-block"></div>
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->nombre}}</span>
                  <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    @if (Auth::check())
                      <!-- Administrador -->
                      @if (Auth::user()->rol_id == 1)
                      <span class="dropdown-item">&nbsp;&nbsp;Administrador</span>
                      <!-- Director Proyecto -->
                      @elseif(Auth::user()->rol_id == 2)
                      <span class="dropdown-item">&nbsp;&nbsp;D. de Proyecto</span>
                      <!-- Programador -->
                      @elseif(Auth::user()->rol_id == 3)
                      <span class="dropdown-item">&nbsp;&nbsp;Programador</span>
                      <!-- Cliente -->
                      @elseif(Auth::user()->rol_id == 4)
                      <span class="dropdown-item">&nbsp;&nbsp;Cliente</span>
                      @endif
                    @endif
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Cerrar sesión</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                      {{ csrf_field() }}
                    </form>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->
          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  @yield('contenido')
            </div>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; 2019 Todos los derechos reservados.&nbsp;<a href="http://urielroman.me/">ourc</a></span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
  </div>
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- SCRIPTS -->
  <script src="js/app.js"></script>
  <script src="js/plantilla.js"></script>
  <script src="https://unpkg.com/vue-select@latest"></script>
</body>

</html>