@extends('layouts.app')
@section('content')

<!-- create service form ni -->
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Create Profile</h1>
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
      <form method="post" action="{{ route('sellers.store') }}">
          @csrf
          <div class="form-group">

                <label for="seller_name"> Name:</label>
                <input type="text" class="form-control" name="seller_name" value={{ $seller->seller_name }} />
            </div>

            <div class="form-group">
                <label for="last_name">Username:</label>
                <input type="text" class="form-control" name="seller_username" value={{ $seller->seller_username }} />
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" class="form-control" name="password" value={{ $seller->password }} />
            </div>

            <div class="form-group">
                <label for="serialNo">Serial No.:</label>
                <input type="text" class="form-control" name="serialNo" value={{ $seller->serialNo }} />
            </div>
            
            <div class="form-group">
                <label for="seller_email">Email:</label>
                <input type="text" class="form-control" name="seller_email" value={{ $seller->seller_email }} />
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" name="location" value={{ $seller->location }} />
            </div>

            <div class="form-group">
                <label for="seller_phoneNo">Phone Number:</label>
                <input type="text" class="form-control" name="seller_phoneNo" value={{ $seller->seller_phoneNo }} />
            </div>

          </div>                         
          <button type="submit" class="btn btn-primary-outline">SUBMIT</button>
      </form>
  </div>
</div>
</div>

@endsection
