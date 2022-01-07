@extends('layouts.sellerTemplate')
@section('content')

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Create Service</h1>
  <div>

   @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  

  <form action="{{ route('services.store') }}" method="POST">
    @csrf
  
    <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong> Username:</strong>
                <input style="text-transform:uppercase" type="text" name="seller_username" class="form-control" placeholder="seller_username" required>
            </div>
          </div>

          <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong> Service Type:</strong>
                <input style="text-transform:uppercase" type="text" name="service_type" class="form-control" placeholder="service type" required>
            </div>
          </div>

        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Location:</strong>
                <input type="text" class="form-control" name="location" placeholder="location" required>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Service Status:</strong>
                 <input type="text" class="form-control" name="service_status" placeholder="service status" required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"onclick="return confirm('Sure want to Submit')" >Submit</button>
        
                <a class="btn btn-primary" href="{{ route('services.index') }}"> Back</a>
        </div>
    </div>
   </form>
  </div>
</div>
</div>

@endsection