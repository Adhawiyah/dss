@extends('layouts.sellerTemplate')
@section('content')

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Create Service</h1>
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
      <form method="post" action="{{ route('services.store') }}">
          @csrf
          <div class="form-group">    
              <label for="service_type">Service Type:</label>
              <input type="text" class="form-control" name="service_type"/>
          </div>

          <div class="form-group">
              <label for="location">Location:</label>
              <input type="text" class="form-control" name="location"/>
          </div>

          <div class="form-group">
              <label for="service_status">status:</label>
              <input type="text" class="form-control" name="service_status"/>
          </div>
                     
          <button type="submit" class="btn btn-primary-outline">CREATE</button>
      </form>
  </div>
</div>
</div>

@endsection