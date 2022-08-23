<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin dahsboard</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <!-- Custom styles for this template-->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('./assets/css/tailwind.output.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <link rel="icon" href="{{ asset('img/favicon.svg')}}">
    <link href="/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <style>
        * {
            box-sizing: border-box;
         
        }
       body{
        background-color: #2B4865;
       }
        .table {
            width: 100%;
            border-collapse: collapse;
            
        }
  
        .table td,
        .table th {
            text-align: center;
            background-color: #2B4865;
            color: white;
        }
  
        .table th {
            background-color: #256D85;
            color: black;
        }
  
        .table tbody:nth-child(even) {
            background-color: #2B4865;
            color: white;
        }
  
        /* Ini Responsivenya */
        @media (max-width: 768px) {
            .table thead {
                display: none;
            }
  
            .table,
            .table tbody,
            .table tr,
            .table td {
                display: block;
                width: 100%;
                background-color: #2B4865;
            }
  
            .table tr {
                margin-bottom: 15px;
            }
  
            .table td {
                text-align: right;
                position: relative;
            }
  
            .table td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-size: 15px;
                font-weight: bold;
                text-align: left;
            }
  
        }
  
        @media (max-width: 500px) {
            .table thead {
                display: none;
            }
  
            .table,
            .table tbody,
            .table tr,
            .table td {
                display: block;
                width: 100%;
            }
  
            .table tr {
                margin-bottom: 15px;
            }
  
            .table td {
                text-align: right;
                position: relative;
            }
  
            .table td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-size: 15px;
                font-weight: bold;
                text-align: left;
            }
  
        }
  
        /* End Responsive */
  
        .title {
            color: #adadad;
            text-align: center;
  
        }
  
        .subtitle a {
            color: white;
            text-decoration: none;
            float: left;
            padding-top: 1px;
        }
  
        .subtitle a:hover {
            color: #dbd7e6;
            text-decoration: none;
  
        }
  
        .form-control {
            
        }
  
        @media (max-width: 500px) {
            .subtitle a {
                font-size: 15px;
                padding-top: 3px;
            }
  
            .form-control {
              
            }
        }
        
        @media (max-width: 768px) {
            .subtitle a {
                padding-top: 1px;
            }
            
            .form-control {
              
            }
        }
  
        .btn {
            background-color: #256D85;
            color: white
        }

        .dropdown > .collapse > li > .dropdown-item {
            color: white !important;
        }

        .dropdown > .collapse > li > .dropdown-item:hover {
            background-color: #277994;
        }

        body{ margin:0;  background-color: #2B4865; } canvas{ display: block; vertical-align: bottom; } 
        /* ---- particles.js container ---- */ 
        #particles-js{ position:absolute; width: 100%; height: 100%; background-color: #ffffff; background-image: url(""); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%; } /* ---- stats.js ---- */ .count-particles{ background: #000022; position: absolute; top: 48px; left: 0; width: 80px; color: #0078AA; font-size: .8em; text-align: left; text-indent: 4px; line-height: 14px; padding-bottom: 2px; font-family: Helvetica, Arial, sans-serif; font-weight: bold; } .js-count-particles{ font-size: 1.1em; } #stats, .count-particles{ -webkit-user-select: none; margin-top: 5px; margin-left: 5px; } #stats{ border-radius: 3px 3px 0 0; overflow: hidden; } .count-particles{ border-radius: 0 0 3px 3px; }
      </style>
      <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</head>

<body id="page-top" >
    

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #256D85; color: black;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/" style="color: black;">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="bi bi-heart-pulse-fill text-danger"></i>
                </div>
                <div class="sidebar-brand-text mx-3 ">Rakes46</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <div class="user-profile text-center mt-3">
                {{-- <div class="row">
                    <img src="/assets/avatar-7.jpg" alt="" class="avatar-md rounded-circle justify-content-center text-center align-content-center" style="width: 120px; margin-left: 64px;">
                </div> --}}
                <div class="mt-3">
                    <h5 class="font-size-13 mb-1">{{ Auth::user()->name }}</h5>
                    <span class="text-success"><i class="bi bi-person-circle"></i> {{ Auth::user()->id }}</span>
                </div>
            </div>
            <!-- Nav Item - Dashboard -->
            

            <!-- Nav Item - Tables -->
            @if(Auth::user()->level == 2)
            <li class="nav-item">
                <a class="nav-link text-white" href="/dashboardwali">
                    <i class="bi bi-collection"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            @endif
            @if(Auth::user()->level == 3)
            <li class="nav-item">
                <a class="nav-link text-white" href="/dashboardpuskesmas">
                    <i class="bi bi-collection"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            @endif
            @if (Auth::user()->level == 5)
            <li class="nav-item">
                <a class="nav-link text-white" href="/dashboard">
                    <i class="bi bi-collection"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/pertanyaan">
                    <i class="bi bi-collection"></i>
                    <span>Pertanyaan</span>
                </a>
            </li>
            @endif
          

            <li class="nav-item dropdown">
                <a class="nav-link collapsed" href="#" id="navbarDropdownMenuLink" aria-haspopup="true" role="button" data-toggle="collapse" data-target="#submenu1">
                    <i class="bi bi-person-fill"></i>
                    <span>List</span></a>
                </a>
                @if ( Auth::user()->level == 5)
                <ul class="dropdown-menu collapse border-0" style="background-color: #256D85;" id="submenu1" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="/kepala_sekolah">Kepala sekolah</a></li>
                  <li><a class="dropdown-item" href="/puskesmas">Puskesmas</a></li>
                  <li><a class="dropdown-item" href="/wali_kelas">wali kelas</a></li>
            
                  <li><a class="dropdown-item" href="/siswa">siswa</a></li>
                </ul>
              @elseif (Auth::user()->level == 2)
                <ul class="dropdown-menu collapse border-0" style="background-color: #256D85;" id="submenu1" aria-labelledby="navbarDropdownMenuLink">
                    
                    <li><a class="dropdown-item" href="/siswawali">siswa</a></li>
<<<<<<< HEAD
                </ul>
=======
                  </ul>
                @elseif (Auth::user()->level == 3)
                <ul class="dropdown-menu collapse border-0" style="background-color: #256D85;" id="submenu1" aria-labelledby="navbarDropdownMenuLink">
                    
                    <li><a class="dropdown-item" href="/siswapuskesmas">siswa</a></li>
                  </ul>
>>>>>>> 7fadac3c731ee58708bb7841ef8167c62b0f6dad
                @endif
            </li>
                  

                
              </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

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

                    <!-- Topbar Search -->
                   @yield('search')

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                             <i class="bi bi-search"></i>
                                            </button>
                                        </div>  
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        

                        <!-- Nav Item - Messages -->
                       
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="/assets/images/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item" href="/" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Home
                                </a>
                               
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
  
                <div class="container">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                       @yield('button')
                    </div>

                    <div class="table-responsive">
                     @yield("isi")
               
                   </div>
                  
                  
                   @yield("isi2")     

        </div>
        
           
        
        <!-- End of Content Wrapper -->
     
    </div>
 
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
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
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                <div class="modal-body">Yakin mau keluar?.</div>
                <div class="modal-footer">
                   <a class="btn btn-primary" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a>
                    <a class="btn btn-primary" href="/">Kembali ke Home</a>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/chart-area-demo.js"></script>
    <script src="/js/demo/chart-pie-demo.js"></script>

</body>

</html>