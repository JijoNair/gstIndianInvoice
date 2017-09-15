@include('layouts.header')
<!-- Navigation -->
<?php
  $userDetail = Session::get('userDetail');
  $branchDetail = Session::get('branchDetail');
  $ownerDetails = Session::get('ownerDetails');
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
    <div class="container" style="width: 50em;">
      <div class="form-group">
        <form action="{{url('/billgenerate')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="itemcounter" id="itemcounter" value="0">
    <label for="sel1">From:</label>
    <select class="form-control" id="sel1" name="branchinfo">
    @foreach($branchDetail as $branchs)
      <option value="{{$branchs->id}}">{{$branchs->shopName}},{{$branchs->add1}},{{$branchs->add2}},{{$branchs->city}},{{$branchs->mob}},{{$branchs->state}}</option>
    @endforeach
    </select>
  <div class="form-group">
<label for="sel1">Select list:</label>
<select class="form-control" id="sel1" name="ownerinfo">
  <option value="">Select Bill Owner</option>
  @foreach($ownerDetails as $ownerDetail)
    <option value="{{$ownerDetail->id}}">{{$ownerDetail->shopName}},{{$ownerDetail->ownerName}}{{$ownerDetail->add1}},{{$ownerDetail->add2}},{{$ownerDetail->city}},{{$ownerDetail->mob}},{{$ownerDetail->state}}</option>
  @endforeach
</select>
</div>
Date:<br/>
<input type="date" name="billdate"><br/>
<br/>
<div class="form-group">
  Invoice No
  <input type="text" name="invoice" class="form-control" />
</div>
<div class="form-group">
items:
<div class="container">
    <table id="myTable" class="table order-list">
    <thead>
        <tr>
            <td>Item Name</td>
            <td>Rate</td>
            <td>Quantity</td>
            <td>HSN/SAC</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="col-sm-4">
                <input type="text" name="item0" class=""  />
            </td>
            <td class="col-sm-3">
                <input type="text" name="rate0"  class=""/>
            </td>
            <td class="col-sm-3">
                <input type="text" name="quantity0"  class=""/>
            </td>
            <td class="col-sm-3">
              <input type="text" name="hsn_sac0" class="" />
            </td>
            <td class="col-sm-2"><a class="deleteRow"></a>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" style="text-align: left;">
                <input type="button" class="btn btn-lg btn-block" name="addrow" id="addrow" value="Add Row" />
            </td>
        </tr>
        <tr>
        </tr>
    </tfoot>
</table>
</div>
  <div class="form-group">
    SCGST:
    <input type="text" name="sgst" class="form-control" />
  </div>
  <div class="form-group">
    CGST:
    <input type="text" name="cgst" class="form-control" />
  </div>
  <div class="form-group">
  Supplier Reference
    <input type="text" name="supref" class="form-control" />
  </div>
  <div class="form-group">
  Other Reference:
    <input type="text" name="oref" class="form-control" />
  </div>
</div>
  <button type="submit" name="billcreate" class="btn btn-primary" value="save">Save Bill</button>
  <button type="submit"  name="billcreate"  class="btn btn-red" value="generate">Generate Bill</button>
</div>
</form>
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
