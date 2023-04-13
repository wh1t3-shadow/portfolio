<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin  Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('backend')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('backend')}}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> Admin dashbord</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->


            <!-- Nav Item - Utilities Collapse Menu -->


            <!-- Divider -->


            <!-- Nav Item - Charts -->

            <li class="nav-item">
                <a class="nav-link" href="{{ url('fast') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Fast section</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{ url('about') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Secound section</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('projectpic') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>work photo</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('contact') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>my mail</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{ url('show') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>user</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('logout') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>logout</span></a>
            </li>




            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                    <h1>Secound section add</h1>
                    <br>
                    <br>
                    @if (session('success'))
                    <div class="alert alert-success">
                      {{ session('success') }}
                    </div>
            @endif
                    <br>
                    <br>
                    <form method="post" action="{{ url('abouts')}}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Title</label>
                          <input type="text" name="title" placeholder="Title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">details</label>
                          <input type="text" name="detail" placeholder="Details" class="form-control" id="exampleInputPassword1" >
                        </div>
                        {{-- <td><a href="edit/{{ $user->id }}">edit</a></td> --}}
                        <input type="submit" class="btn btn-primary" value="submit">
                      </form>
                      <br>


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->

    <!-- Logout Modal-->


    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('backend')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('backend')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('backend')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('backend')}}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{asset('backend')}}/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('backend')}}/js/demo/chart-area-demo.js"></script>
    <script src="{{asset('backend')}}/js/demo/chart-pie-demo.js"></script>

</body>

</html>