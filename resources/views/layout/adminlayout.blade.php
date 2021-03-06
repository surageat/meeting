<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon -->
    <link rel="icon" type="img/png" sizes="16x16" href="{{ asset('img/logo-icon.png') }}">
    <title>Meet informatic system</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('all/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="{{asset('css/dataTable.bootstrap4.min.css') }}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>


    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('all/datatables/dataTables.bootstrap4.css')}}">

    <script>
        $(document).on('ready', function() {
                    $('.pager a').on('click', function(e) {
                                var page = $(this).attr('href').split('page=')[1];
                                e.preventDefault();
                                var url = '?page=' + page;
                                $.post(url, function(data) {
                                        alert("success" + data);
                                    })
                                    .done(function() {
                                        alert("second success");
                                    })
                                    .fail(function() {
                                        alert("error");
                                    })
                                    .always(function() {
                                        alert("finished");
                                    });
    </script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/adminlayout')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="{{ asset('img/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="meeting" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapse">
                    <i class="fas fa-fw fa-file"></i>
                    <span style="font-size: 135%; line-height: 1.5em;">การประชุม</span>
                </a>
                <div id="collapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="" style="font-size: 125%; line-height: 1.5em;">เชิญประชุม</a>
                        <a class="collapse-item active" href="{{ route('meeting.create') }}" style="font-size: 120%; line-height: 1.5em;">เพิ่มการประชุม</a>
                    </div>
                </div>


                </a>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('room.create') }}">
                    <i class="fas fa-fw fa-file-word"></i>
                    <span style="font-size: 135%; line-height: 1.5em;">ห้องประชุม</span></a>
            </li>


            </a>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('agenda.create') }}">
                    <i class="fas fa-fw fa-file-word"></i>
                    <span style="font-size: 135%; line-height: 1.5em;">วาระการประชุม</span></a>
            </li>
            </a>


            <li class="nav-item">
                <a class="nav-link" href="{{ route('offices.create') }}">
                    <i class="fas fa-fw fa-file-word"></i>
                    <span style="font-size: 135%; line-height: 1.5em;">ผู้ใช้งานระบบ</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="report" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-file-pdf"></i>
                    <span style="font-size: 125%; line-height: 1.5em;">รายงานการประชุม</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item active" href="report" style="font-size: 125%; line-height: 1.5em;">รายงานการประชุม</a>
                        <a class="collapse-item active" href="comment" style="font-size: 125%; line-height: 1.5em;">ข้อคิดเห็น</a>
                        <a class="collapse-item active" href="report_pdf" style="font-size: 125%; line-height: 1.5em;">รายงาน PDF</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="document" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span style="font-size: 135%; line-height: 1.5em;">เอกสารการ</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item active" href="blank.html" style="font-size: 125%; line-height: 1.5em;">การประชุม</a>
                        <a class="collapse-item active" href="blank.html" style="font-size: 125%; line-height: 1.5em;">วาระการประชุม</a>
                        <a class="collapse-item active" href="blank.html" style="font-size: 125%; line-height: 1.5em;">รายงานการประชุม</a>
                    </div>
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

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 ">แม่ใหญ่สี บ่มักบักมี่</span>
                                <img class="img-profile rounded-circle" src="{{ asset('img/user/user1.jpg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    ออกจากระบบ
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <main class="py-4">

                    <!-- Begin Page header -->
                    <div class="container-fluid">

                        @yield('header')

                    </div>
                    <!-- Begin Page content -->
                    <div class="container-fluid">

                        @yield('content')
                        @yield('reportcontent')
                        @include('sweetalert::alert')
                    </div>
                    <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            </main>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Informatic &copy; Meeting System</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('all/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('all/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('js/dataTable.bootstrap4.min.js') }}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('all/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('all/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    
    <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>

</html>