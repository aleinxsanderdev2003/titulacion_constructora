<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CN constructora</title>
    <link rel="icon" href="{{asset('img/EMPRESA.png')}}">
      <!-- Bootstrap CSS CDN -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
      <!-- Font Awesome CDN -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">


</head>

<!-- Bootstrap JS y jQuery CDN (al final del archivo body para acelerar la carga) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>


<body id="page-top">

    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
<br>
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

                <div class="sidebar-brand-icon">
                    <img class="img-fluid" src="{{asset('img/EMPRESA.png')}}"  alt="">
                </div>

            </a>

            <hr class="sidebar-divider my-0">

            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Control
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Clientes</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Todos:</h6>
                        <a class="collapse-item" href="">Clientes</a>
                        <a class="collapse-item" href="">Ver todos</a>
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVentas"
                    aria-expanded="true" aria-controls="collapseVentas">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Lugares</span>
                </a>
                <div id="collapseVentas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Todos:</h6>
                        <a class="collapse-item" href="buttons.html">Visitados</a>
                        <a class="collapse-item" href="cards.html">Registrar nuevos </a>
                    </div>
                </div>
            </li>





            <div class="sidebar-heading">
                Pagina Web
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecomponents"
                    aria-expanded="true" aria-controls="collapsecomponents">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Componentes</span>
                </a>
                <div id="collapsecomponents" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>



            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Diseño</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>
            <!-- ... tu código existente ... -->

<hr class="sidebar-divider d-none d-md-block">


<!-- Agrega un enlace de logout -->
<!-- Agrega un enlace de logout -->
<li class="nav-item">
    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Logout</span>
    </a>
</li>

<!-- Modal de Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Selecciona "Logout" a continuación si estás listo para cerrar tu sesión actual.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <!-- Modifica el enlace para utilizar la ruta de logout -->
                <a class="btn btn-primary" href="{{ route('admin.logout') }}">Logout</a>
            </div>
        </div>
    </div>
</div>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Addons
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>

                    </div>
                </div>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <div class="container-fluid">

                        <!-- Agrega un yield para el contenido específico de cada página -->
                        @yield('content')
                    </div>
                </div>

                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Desarrollo Web Master 2023</span>
                        </div>
                    </div>
                </footer>
            </div>
    </div>

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




        </div>
    </div>


</body>
</html>
