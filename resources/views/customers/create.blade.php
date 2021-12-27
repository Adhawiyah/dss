@extends('layouts.app')
@section('content')
                           
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Create</h1>
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
              <input type="text" class="form-control" name="service_status"/>
          </div>
                     
          <button type="submit" class="btn btn-primary-outline">CREATE</button>
      </form>
  </div>
</div>
</div>


@endsection