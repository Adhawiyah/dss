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
  <!-- End Success Notification  -->


  <section style="background-color:#80ced6;">
  <div class="container py-5" >
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Customer</a></li>
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
                <p class="text-muted mb-0">{{$customer->cust_name}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Username</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$customer->cust_username}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$customer->cust_address}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone Number</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$customer->cust_phoneNo}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
            <hr>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$customer->cust_email}}</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>      



@endsection