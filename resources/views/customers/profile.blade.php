@extends('layouts.customerTemplate')
@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   
<!-- Success Notification -->
@if ($message=Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif
  <!-- End Success Notification -->

   <!--SEARCH section-->

   <div class="panel panel-primary">
    <div class="panel-heading">
        <h2 class="text-center" style=color:white;>Let's find service you need </h2>
    </div>

    <div class="panel-body">
        <div class="col-md-3">
            <select class="form-control" name="service_type" id="service_type">
                <option selected="false">
                    Service type...
                </option>
            </select>
        </div>
        
        <div class="col-md-6">
            <select class="form-control" name="service_location" id="service_location">
                <option selected="false">
                    Location...
                </option>
            </select>
        </div>

        <div class="col-md-3">
            <button class="btn btn-primary rounded" type="submit" id="search" name="search">Search<i class=fa fa-search></i>
            </button>
        </div>
    </div>
</div>
     <!-- END SEARCH section-->

  <section style="background-color:#80ced6;">
  <div class="container py-5" >
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Customer Profile</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body text-center">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::guard('customer')->id()}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::guard('customer')->id()}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::guard('customer')->id()}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Username</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::guard('customer')->id()}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">E-mail</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::guard('customer')->id()}}</p>
              </div>
            </div>
          </div>
        </div>

        <div>
        <center>
            <p><p><button type="button" class="btn btn-primary">Edit Profile</button>
        </center>
        </div> 
      

      </div>
    </div>
  </div>
</section>      



@endsection