@extends('layouts.customerTemplate')
@section('content')
                           
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



@endsection