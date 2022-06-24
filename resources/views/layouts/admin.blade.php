
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Filo | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/bs-stepper/css/bs-stepper.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('assets/admin/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('layouts.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.sidebar')
  

  {{-- @include('sweetalert::alert') --}}

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title', 'Dashboard' )</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">@yield('li', 'Dashboard' )</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      @if(View::hasSection('content'))
            @yield('content')
      @else
        <!-- /.row -->
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            {{-- <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>

                  <p>Story</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div> --}}
            <!-- ./col -->
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>AED {{$tblinvoices_paid}}<sup style="font-size: 20px"></h3>

                  <p>Paid Invoices</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>AED {{$tblinvoices_outstanding}}</h3>

                  <p>OutStanding Invoices</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>AED {{$tblinvoices_due}}</h3>

                  <p>Past Due Invoices</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <!-- /.row (main row) -->
        </div>
        <!-- /.row -->


        <!-- Start Tblleads boxes -->
        <div class="container-fluid">
          <h5 class="mb-2">Blleads Data</h5>
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <div class="info-box-content">
                  <div class="progress-group">
                     Blleads Completed 
                    <span class="float-right"><b>{{$tblleads->Completed}}</b>/{{$tblleads->total ?? "0"}}</span>
                    <div class="progress" style="height:20px">
                      <div class="progress-bar bg-success" role="progressbar" style="width: {{$tblleads->total == 0 ? 0 :($tblleads->Completed/ $tblleads->total)* 100}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <div class="info-box-content">
                  <div class="progress-group">
                    Blleads Processing
                    <span class="float-right"><b>{{$tblleads->Processing}}</b>/{{$tblleads->total ?? "0"}}</span>
                    <div class="progress" style="height:20px">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: {{$tblleads->total == 0 ? 0 :($tblleads->Processing/ $tblleads->total)* 100}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <div class="info-box-content">
                  <div class="progress-group">
                      Blleads Cancelled
                    <span class="float-right"><b>{{($tblleads->Cancelled)}}</b>/{{$tblleads->total ?? "0"}}</span>
                    <div class="progress" style="height:20px">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: {{$tblleads->total == 0 ? 0 :($tblleads->Cancelled/ $tblleads->total)* 100}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            {{-- <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <div class="info-box-content">
                  <div class="progress-group">
                    Add tblleads Satus
                    <span class="float-right"><b>20</b>/200</span>
                    <div class="progress" style="height:20px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div> --}}
            <!-- /.col -->
          </div>
        </div> 
        <!-- End Tblleads boxes -->

        <!-- Start tblestimate_requests boxes -->
        <div class="container-fluid">
          <h5 class="mb-2">Estimate Requests Data</h5>
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <div class="info-box-content">
                  <div class="progress-group">
                    Estimate Requests Completed
                    <span class="float-right"><b>{{$tblestimate_requests->Completed}}</b>/{{$tblestimate_requests->total ?? "0"}}</span>
                    <div class="progress" style="height:20px">
                      <div class="progress-bar bg-success" role="progressbar" style="width: {{$tblestimate_requests->total == 0 ? 0 :($tblestimate_requests->Completed/ $tblestimate_requests->total)* 100}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <div class="info-box-content">
                  <div class="progress-group">
                    Estimate Requests Processing
                    <span class="float-right"><b>{{$tblestimate_requests->Processing}}</b>/{{$tblestimate_requests->total ?? "0"}}</span>
                    <div class="progress" style="height:20px">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: {{$tblestimate_requests->total == 0 ? 0 :($tblestimate_requests->Processing/ $tblestimate_requests->total)* 100}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <div class="info-box-content">
                  <div class="progress-group">
                    Estimate Requests Cancelled 
                    <span class="float-right"><b>{{$tblestimate_requests->Cancelled}}</b>/{{$tblestimate_requests->total ?? "0"}}</span>
                    <div class="progress" style="height:20px">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: {{$tblestimate_requests->total == 0 ? 0 :($tblestimate_requests->Cancelled/ $tblestimate_requests->total)* 100}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            {{-- <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <div class="info-box-content">
                  <div class="progress-group">
                    Add tblleads Satus
                    <span class="float-right"><b>20</b>/200</span>
                    <div class="progress" style="height:20px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div> --}}
            <!-- /.col -->
          </div>
        </div>
        <!-- End tblestimate_requests boxes -->

        <!-- Start Projects boxes -->
        <div class="container-fluid">
          <h5 class="mb-2">Projects Data</h5>
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <div class="info-box-content">
                  <div class="progress-group">
                    Projects Completed
                    <span class="float-right"><b>{{$tblprojects->Completed}}</b>/{{$tblprojects->total}}</span>
                    <div class="progress" style="height:20px">
                      <div class="progress-bar bg-success" role="progressbar" style="width:  {{$tblprojects->Completed / $tblprojects->total * 100}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <div class="info-box-content">
                  <div class="progress-group">
                    Projects Processing
                    <span class="float-right"><b>{{$tblprojects->Processing}}</b>/{{$tblprojects->total}}</span>
                    <div class="progress" style="height:20px">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: {{$tblprojects->Processing / $tblprojects->total * 100}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <div class="info-box-content">
                  <div class="progress-group">
                     Projects Cancelled
                    <span class="float-right"><b>{{$tblprojects->Cancelled}}</b>/{{$tblprojects->total}}</span>
                    <div class="progress" style="height:20px">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: {{$tblprojects->Cancelled / $tblestimate_requests->total * 100}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            {{-- <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <div class="info-box-content">
                  <div class="progress-group">
                    Add tblleads Satus
                    <span class="float-right"><b>20</b>/200</span>
                    <div class="progress" style="height:20px">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div> --}}
            <!-- /.col -->
          </div>
        </div>
        <!-- End tblprojects boxes -->

        <!-- Start Proposals boxes -->
        <div class="container-fluid">
          <h5 class="mb-2">Proposals Data</h5>
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <div class="info-box-content">
                  <div class="progress-group">
                    Proposals Completed
                    <span class="float-right"><b>{{$tblproposals->Completed}}</b>/{{$tblproposals->total ?? "0"}}</span>
                    <div class="progress" style="height:20px">
                      <div class="progress-bar bg-success" role="progressbar" style="width: {{$tblproposals->total == 0 ? 0 :($tblproposals->Completed/ $tblproposals->total)* 100}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <div class="info-box-content">
                  <div class="progress-group">
                    Proposals Processing
                    <span class="float-right"><b>{{$tblproposals->Processing}}</b>/{{$tblproposals->total ?? "0"}}</span>
                    <div class="progress" style="height:20px">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: {{$tblproposals->total == 0 ? 0 :($tblproposals->Processing/ $tblproposals->total)* 100}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <div class="info-box-content">
                  <div class="progress-group">
                     Proposals Cancelled
                    <span class="float-right"><b>{{$tblproposals->Cancelled}}</b>/{{$tblproposals->total}}</span>
                    <div class="progress" style="height:20px">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: {{$tblproposals->total == 0 ? 0 :($tblproposals->Cancelled/ $tblproposals->total)* 100}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- /.col -->
          </div>
        </div>
        <!-- End tblproposals boxes -->


        <!-- Start tbltasks boxes -->
        <div class="container-fluid">
          <h5 class="mb-2">Tasks Data</h5>
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <div class="info-box-content">
                  <div class="progress-group">
                    Tasks Completed
                    <span class="float-right"><b>{{$tbltasks->Completed}}</b>/{{$tbltasks->total}}</span>
                    <div class="progress" style="height:20px">
                      <div class="progress-bar bg-success" role="progressbar" style="width: {{$tbltasks->total == 0 ? 0 :($tbltasks->Completed/ $tbltasks->total)* 100}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <div class="info-box-content">
                  <div class="progress-group">
                    Tasks Processing
                    <span class="float-right"><b>{{$tbltasks->Processing}}</b>/{{$tbltasks->total}}</span>
                    <div class="progress" style="height:20px">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: {{$tbltasks->total == 0 ? 0 :($tbltasks->Processing/ $tbltasks->total)* 100}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <div class="info-box-content">
                  <div class="progress-group">
                    Tasks Cancelled
                    <span class="float-right"><b>{{$tbltasks->Cancelled}}</b>/{{$tbltasks->total}}</span>
                    <div class="progress" style="height:20px">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: {{$tbltasks->total == 0 ? 0 :($tbltasks->Cancelled/ $tbltasks->total)* 100}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- /.col -->
          </div>
        </div>
        <!-- End tblproposals boxes -->


        
        <!-- /.Box -->
        {{-- <div class="container-fluid">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box bg-info">
                <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Bookmarks</span>
                  <span class="info-box-number">41,410</span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box bg-success">
                <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Likes</span>
                  <span class="info-box-number">41,410</span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box bg-warning">
                <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Events</span>
                  <span class="info-box-number">41,410</span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box bg-danger">
                <span class="info-box-icon"><i class="fas fa-comments"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Comments</span>
                  <span class="info-box-number">41,410</span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
        </div>  --}}
        <!-- /.Box -->
        {{-- <div class="container-fluid">
           <!-- /.col -->
           <div class="col-md-4">
            <p class="text-center">
              <strong>Goal Completion</strong>
            </p>

            <div class="progress-group">
              Add Products to Cart
              <span class="float-right"><b>160</b>/200</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-primary" style="width: 20%"></div>
              </div>
            </div>
            <!-- /.progress-group -->

            <div class="progress-group">
              Complete Purchase
              <span class="float-right"><b>310</b>/400</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-danger" style="width: 75%"></div>
              </div>
            </div>

            <!-- /.progress-group -->
            <div class="progress-group">
              <span class="progress-text">Visit Premium Page</span>
              <span class="float-right"><b>480</b>/800</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-success" style="width: 10%"></div>
              </div>
            </div>

            <!-- /.progress-group -->
            <div class="progress-group">
              Send Inquiries
              <span class="float-right"><b>250</b>/500</span>
              <div class="progress progress-sm">
                <div class="progress-bar bg-warning" style="width: 50%"></div>
              </div>
            </div>
            <!-- /.progress-group -->
          </div>
          <!-- /.col -->
        </div> --}}
      @endif
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://www.filo.com">Filo Website</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/admin/plugins/chart.js')}}/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('assets/admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('assets/admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('assets/admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('assets/admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- BS-Stepper -->
<script src="{{asset('assets/admin/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/admin/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/admin/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/admin/js/pages/dashboard.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
    //Initialize Select2 Elements
    $('.select2').select2({
      theme: 'bootstrap4'
    })
  });
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })
</script>
</body>
</html>
