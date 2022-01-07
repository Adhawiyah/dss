@extends('layouts.customerTemplate')
@section('content')

<section style="background-color: #eee;">
  <div class="container py-5">
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
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
          </div>

           <div>
             <center> 
             <p><p> <a style="margin: 19px;" href="{{ route('customers.create') }}" class="btn btn-primary">Edit Profile</a>
             </center>
          </div> 
          
        </div>  
      </div>

      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Johnatan Smith</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">example@example.com</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(097) 234-5678</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(098) 765-4321</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
              </div>
            </div>
          </div>
        </div>
      </div>
 
    </div>
  </div>
</section>

<!--                       
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h6 class="display-4">Create your Profile</h6>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('customers.store') }}">
          @csrf
          <div class="form-group">    
              <label for="cust_name">Name:</label>
              <input type="text" class="form-control" name="cust_name"/>
          </div>

          <div class="form-group">
              <label for="cust_username">Username:</label>
              <input type="text" class="form-control" name="cust_username"/>
          </div>

          <div class="form-group">
              <label for="password">Password:</label>
              <input type="text" class="form-control" name="password"/>
          </div>

          <div class="form-group">    
              <label for="cust_email">Email:</label>
              <input type="email" class="form-control" name="cust_email"/>
          </div>

          <div class="form-group">    
              <label for="cust_phoneNo">Phone Number:</label>
              <input type="text" class="form-control" name="cust_phoneNo"/>
          </div>

          <div class="form-group">    
              <label for="cust_address">Address:</label>
              <input type="textarea" class="form-control" name="cust_address" rows="4" cols="50"/> 
          </div>
                     
          <button type="submit" class="btn btn-primary">CREATE</button>
      </form>
  </div>
</div>
</div>

-->

@endsection