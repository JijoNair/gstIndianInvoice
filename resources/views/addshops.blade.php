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
      <li class="breadcrumb-item active">My Profile</li>
    </ol>
    <div class="container">
      <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myshops">ADD new Shop</button>
      <div class="modal fade" id="myshops" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="width:50.0em;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Shop Information</h4>
              </div>
              <div class="modal-body">
                <div class="container">
  	{{-- <div class="row"> --}}
    <center>
        <div class="col-md-6 col-md-offset-3" align="left">
          <div class="well well-sm">
            <form class="form-horizontal" action="{{url('/ownerin')}}" method="post">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
            <fieldset>
              <!-- Name input-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="name">Shop Name</label>
                <div class="col-md-9">
                  <input id="name" name="shopname" type="text" placeholder="Shop Name" class="form-control">
                </div>
              </div>

              <!-- Email input-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="email">Owner Name</label>
                <div class="col-md-9">
                  <input id="email" name="ownername" type="text" placeholder="Owner Name" class="form-control">
                </div>
              </div>

              <!-- Message body -->
              <div class="form-group">
                <label class="col-md-3 control-label" for="message">Address 1</label>
                <div class="col-md-9">
                  <textarea class="form-control" id="message" name="shopadd1" placeholder="Please enter your message here..."></textarea>
                </div>
              </div>
              <!-- Message body -->
              <div class="form-group">
                <label class="col-md-3 control-label" for="message">Address 2</label>
                <div class="col-md-9">
                  <textarea class="form-control" id="message" name="shopadd2" placeholder="Please enter your message here..."></textarea>
                </div>
              </div>
              <!-- Message body -->
              <div class="form-group">
                <label class="col-md-3 control-label" for="message">City</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="message" name="shopcity" placeholder="Shop City"></input>
                </div>
              </div>
              <!-- Message body -->
              <div class="form-group">
                <label class="col-md-3 control-label" for="message">Country</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="message" name="shopcountry" placeholder="Shop Country"></input>
                </div>
              </div>
              <!-- Message body -->
              <div class="form-group">
                <label class="col-md-3 control-label" for="message">Email</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="message" name="shopemail" placeholder="Shop Email"></input>
                </div>
              </div>
              <!-- Message body -->
              <div class="form-group">
                <label class="col-md-3 control-label" for="message">Mobile</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="message" name="shopmob" placeholder="Shop Mobile"></input>
                </div>
              </div>
              <!-- Message body -->
              <div class="form-group">
                <label class="col-md-3 control-label" for="message">Pincode</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="message" name="shoppin" placeholder="Shop Pincode"></input>
                </div>
              </div>
              <!-- Message body -->
              <div class="form-group">
                <label class="col-md-3 control-label" for="message">State</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="message" name="shopstate" placeholder="Shop State"></input>
                </div>
              </div>
              <!-- Message body -->
              <div class="form-group">
                <label class="col-md-3 control-label" for="message">GST</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="message" name="shopgst" placeholder="Shop GST"></input>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label" for="message">Place of Supply</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="message" name="placeofsup" placeholder="Place of Supply"></input>
                </div>
              </div>
              <!-- Form actions -->
              <div class="form-group">
                <div class="col-md-12 text-right">
                  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
              </div>
            </fieldset>
            </form>
          </div>
        </div>
  	{{-- </div> --}}
  </div>
</center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
      <p>&nbsp;</p>
    </div>
    <?php $allshops = Session::get('allshops'); ?>
    <div class="row" style="">
      <table id="shopadd" class="table table-striped table-bordered" cellspacing="0">
        <thead>
            <tr>
                <th>Shop Name</th>
                <th>Owner Name</th>
                <th>City</th>
                <th>Mobile</th>
                <th>State</th>
                <th>GST</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
              <th>Shop Name</th>
              <th>Owner Name</th>
              <th>City</th>
              <th>Mobile</th>
              <th>State</th>
              <th>GST</th>
              <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
          @foreach ($allshops as $allshop)
            <tr>
                <td>{{$allshop->shopName}}</td>
                <td>{{$allshop->ownerName}}</td>
                <td>{{$allshop->city}}</td>
                <td>{{$allshop->mob}}</td>
                <td>{{$allshop->state}}</td>
                <td>{{$allshop->gst}}</td>
                <td><a href="{{url('viewshop/'.$allshop->id)}}"><i class="fa fa-search"></i></a> &nbsp; <a href="{{url('deleteshop/'.$allshop->id)}}"><i class="fa fa-trash"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
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
