@include('layouts.header')
<!-- Navigation -->
  <body class="fixed-nav" id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="#">Eagle Trading</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav">
      <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="#">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">
            Dashboard</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
        <a class="nav-link" href="{{'/profile'}}">
          <i class="fa fa-fw fa-table"></i>
          <span class="nav-link-text">
            My Profile</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents">
          <i class="fa fa-fw fa-wrench"></i>
          <span class="nav-link-text">
            Shops</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
          <li>
            <a href="{{'/addshops'}}">Add Shops</a>
          </li>
          <li>
            <a href="{{'/listshops'}}">List Shops</a>
          </li>
          {{-- <li>
            <a href="#">Blank Page</a>
          </li>
          <li>
            <a href="#">Login Page</a>
          </li> --}}
        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti">
          <i class="fa fa-fw fa-sitemap"></i>
          <span class="nav-link-text">
            Bills</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseMulti">
          <li>
            <a href="{{'/addbills'}}">Add Bills</a>
          </li>
          <li>
            <a href="{{'/listbills'}}">List Bills</a>
          </li>
          {{-- <li>
            <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
            <ul class="sidenav-third-level collapse" id="collapseMulti2">
              <li>
                <a href="#">Third Level Item</a>
              </li>
              <li>
                <a href="#">Third Level Item</a>
              </li>
            </ul>
          </li> --}}
        </ul>
      </li>
    </ul>
    <ul class="navbar-nav sidenav-toggler">
      <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
          <i class="fa fa-fw fa-angle-left"></i>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-fw fa-sign-out"></i>
          Logout</a>
      </li>
    </ul>
  </div>
</nav>

<div class="content-wrapper py-3">

  <div class="container-fluid">

    <!-- Breadcrumbs -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">My Dashboard</li>
    </ol>

    <!-- Icon Cards -->
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-comments"></i>
            </div>
            <div class="mr-5">
              26 Shops in total
            </div>
          </div>
          <a href="#" class="card-footer text-white clearfix small z-1">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-list"></i>
            </div>
            <div class="mr-5">
              100 Bills in total
            </div>
          </div>
          <a href="#" class="card-footer text-white clearfix small z-1">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-shopping-cart"></i>
            </div>
            <div class="mr-5">
              Add New Bill
            </div>
          </div>
          <a href="{{url('/addbills')}}" class="card-footer text-white clearfix small z-1">
            <span class="float-left">Add Here</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-support"></i>
            </div>
            <div class="mr-5">
              Add new Shop
            </div>
          </div>
          <a href="{{url('/addshops')}}" class="card-footer text-white clearfix small z-1">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
    </div>

    <!-- Area Chart Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-area-chart"></i>
        Shops Added by months
      </div>
      <div class="card-body">
        <canvas id="myAreaChart" width="100%" height="30"></canvas>
      </div>
      <div class="card-footer small text-muted">
        Updated yesterday at 11:59 PM
      </div>
    </div>

    <div class="row">

      <div class="col-lg-8">

        <!-- Example Bar Chart Card -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-bar-chart"></i>
            Bar Chart Example
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-8 my-auto">
                <canvas id="myBarChart" width="100" height="50"></canvas>
              </div>
              <div class="col-sm-4 text-center my-auto">
                <div class="h4 mb-0 text-primary">$34,693</div>
                <div class="small text-muted">YTD Revenue</div>
                <hr>
                <div class="h4 mb-0 text-warning">$18,474</div>
                <div class="small text-muted">YTD Expenses</div>
                <hr>
                <div class="h4 mb-0 text-success">$16,219</div>
                <div class="small text-muted">YTD Margin</div>
              </div>
            </div>
          </div>
          <div class="card-footer small text-muted">
            Updated yesterday at 11:59 PM
          </div>
        </div>
            </div>
      <div class="col-lg-4">
        <!-- Example Pie Chart Card -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-pie-chart"></i>
            Pie Chart Example
          </div>
          <div class="card-body">
            <canvas id="myPieChart" width="100%" height="100"></canvas>
          </div>
          <div class="card-footer small text-muted">
            Updated yesterday at 11:59 PM
          </div>
        </div>
        <!-- Example Notifications Card -->
      </div>
    </div><!--

    <!-- Example Tables Card -->
  </div>
  <!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->

<!-- Scroll to Top Button -->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fa fa-angle-up"></i>
</a>

<!-- Logout Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Select "Logout" below if you are ready to end your current session.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="{{'/logout'}}">Logout</a>
      </div>
    </div>
  </div>
</div>
@include('layouts.footer')
