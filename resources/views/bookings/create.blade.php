@extends('layouts.app')
@section('content')

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Create Booking</h1>
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
      <form method="post" action="{{ route('bookings.store') }}">
          @csrf
          <div class="form-group">    
              <label for="service_type">Location:</label>
              <input type="text" class="form-control" placeholder="location" name="location"/>
          </div>

          <div class="form-group">
              <label for="location">Date:</label>
              <input type="text" class="form-control" placeholder="date" name="date"/>
          </div>

          <div class="form-group">
              <label for="booking_status">Status:</label>
              <input type="text" class="form-control" placeholder="status" name="booking_status"/>
          </div>
                     
          <button type="submit" class="btn btn-primary-outline">CREATE</button>
      </form>
  </div>
</div>
</div>

@endsection