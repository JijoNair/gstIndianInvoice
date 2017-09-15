@include('layouts.header')
<!-- Navigation -->
<style>
body {
  background: #eeeded;
}

.card {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.2s ease-in-out;
  box-sizing: border-box;
  margin-top:10px;
  margin-bottom:10px;
  background-color:#FFF;
}

.card:hover {
  box-shadow: 0 5px 5px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}
.card > .card-inner {
  padding:10px;
}
.card .header h2, h3 {
  margin-bottom: 0px;
  margin-top:0px;
}
.card .header {
  margin-bottom:5px;
}
.card img{
  width:100%;
}
</style>

  <body class="fixed-nav" id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="#">Eagle Trading</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav">
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="{{'/index'}}">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">
            Dashboard</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profile">
        <a class="nav-link" href="{{'/profile'}}">
          <i class="fa fa-fw fa-table"></i>
          <span class="nav-link-text">
            My Profile</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents">
          <i class="fa fa-fw fa-wrench"></i>
          <span class="nav-link-text active">
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
        <a href="#">Profile</a>
      </li>
      <li class="breadcrumb-item active">Shops</li>
    </ol>
    <?php $getowners = Session::get('owners'); ?>
    <div class="row" style="">
      @foreach($getowners as $getowner)
      <div class="col-sm-4">
  <div class="card">
    <div class="image">
      <img src="{{URL::asset('images/shop.png')}}" style="height:240px;width:360px"/>
    </div>
    <div class="card-inner">
      <div class="header">
        <a href="{{url('shopbills/'.$getowner->id)}}" target="_blank"><h2>{{$getowner->shopName}}</h2>
        <h3>{{$getowner->ownerName}}</h2></a>
    </div>
    <div class="content">
      <p>{{$getowner->city}}</p>
    </div>
      </div>
  </div>
</div>
  @endforeach
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
