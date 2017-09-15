@include('layouts.header')
<!-- Navigation -->
<?php
  $getUser = Session::get('ownerdetail');
?>
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
        <a class="nav-link active" href="{{'/profile'}}">
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-envelope"></i>
          <span class="d-lg-none">Messages
            <span class="badge badge-pill badge-primary">12 New</span>
          </span>
          <span class="new-indicator text-primary d-none d-lg-block">
            <i class="fa fa-fw fa-circle"></i>
            <span class="number">12</span>
          </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="messagesDropdown">
          <h6 class="dropdown-header">New Messages:</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <strong>David Miller</strong>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <strong>Jane Smith</strong>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <strong>John Doe</strong>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item small" href="#">
            View all messages
          </a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-bell"></i>
          <span class="d-lg-none">Alerts
            <span class="badge badge-pill badge-warning">6 New</span>
          </span>
          <span class="new-indicator text-warning d-none d-lg-block">
            <i class="fa fa-fw fa-circle"></i>
            <span class="number">6</span>
          </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="alertsDropdown">
          <h6 class="dropdown-header">New Alerts:</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <span class="text-success">
              <strong>
                <i class="fa fa-long-arrow-up"></i>
                Status Update</strong>
            </span>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <span class="text-danger">
              <strong>
                <i class="fa fa-long-arrow-down"></i>
                Status Update</strong>
            </span>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <span class="text-success">
              <strong>
                <i class="fa fa-long-arrow-up"></i>
                Status Update</strong>
            </span>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item small" href="#">
            View all alerts
          </a>
        </div>
      </li>
      <li class="nav-item">
        <form class="form-inline my-2 my-lg-0 mr-lg-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-primary" type="button">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
      </li>
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
      <li class="breadcrumb-item active">My Profile</li>
    </ol>
    <div class="row" style="width:250%;">
      <div class="col-md-4 col-md-offset-4">
        <form class="form-horizontal" role="form" method="post" action="{{URL('/editowner')}}">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <fieldset>
            <!-- Form Name -->
            <legend>Shop Details</legend>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-sm-2 control-label" for="textinput">Shop Name</label>
              <div class="col-sm-10">
                <input type="text" placeholder="Shop Name"  name="shopName" class="form-control" value="@if(isset($getUser)){{$getUser->shopName}}@endif">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="textinput">Owner Name</label>
              <div class="col-sm-10">
                <input type="text" placeholder="Shop Name"  name="ownername" class="form-control" value="@if(isset($getUser)){{$getUser->ownerName}}@endif">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="textinput">Line 1</label>
              <div class="col-sm-10">
                <input type="text" placeholder="Address Line 1" name="add1" class="form-control" value="@if(isset($getUser)){{$getUser->add1}}@endif">
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-sm-2 control-label" for="textinput">Line 2</label>
              <div class="col-sm-10">
                <input type="text" placeholder="Address Line 2" name="add2" class="form-control" value="@if(isset($getUser)){{$getUser->add2}}@endif">
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-sm-2 control-label" for="textinput">City</label>
              <div class="col-sm-10">
                <input type="text" placeholder="City" class="form-control" name="city" value="@if(isset($getUser)){{$getUser->city}}@endif">
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-sm-2 control-label" for="textinput">State</label>
              <div class="col-sm-4">
                <input type="text" placeholder="State" class="form-control" name="state" value="@if(isset($getUser)){{$getUser->state}}@endif">
              </div>

              <label class="col-sm-2 control-label" for="textinput">Postcode</label>
              <div class="col-sm-4">
                <input type="text" placeholder="Post Code" class="form-control" name="pin" value="@if(isset($getUser)){{$getUser->pin}}@endif">
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-sm-2 control-label" for="textinput">Country</label>
              <div class="col-sm-10">
                <input type="text" placeholder="Country" class="form-control" name="country" value="@if(isset($getUser)){{$getUser->country}}@endif">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="textinput">Mobile Number</label>
              <div class="col-sm-10">
                <input type="text" placeholder="Mobile number" class="form-control"  name="mob" value="@if(isset($getUser)){{$getUser->mob}}@endif">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="textinput">GST IN</label>
              <div class="col-sm-10">
                <input type="text" placeholder="GST No" class="form-control" name="gst" value="@if(isset($getUser)){{$getUser->gst}}@endif">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="textinput">Place of Supply</label>
              <div class="col-sm-10">
                <input type="text" placeholder="Place of Supply" class="form-control" name="placeofsup" value="@if(isset($getUser)){{$getUser->place_of_sup}}@endif">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="textinput">Email id</label>
              <div class="col-sm-10">
                <input type="text" placeholder="Email" class="form-control" name="email" value="@if(isset($getUser)){{$getUser->email}}@endif">
              </div>
            </div>
            <input type="hidden" name="ownerid" value="@if(isset($getUser)){{$getUser->id}}@endif">
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="pull-right">
                  <a href="{{url('/addshops')}}"><button  class="btn btn-default">Cancel</button></a>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </div>
          </fieldset>
        </form>
      </div><!-- /.col-lg-12 -->
  </div><!-- /.row -->

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
