@extends('layouts.app')
@section('content')

<!-- EDIT form (profile) -->

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h3 class="display-3">Edit booking</h3>
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
              <label for="service_type">Service Type:</label>
              <input type="text" class="form-control" placeholder="service type" name="service_type"/>
          </div>

          <div class="form-group">
            <label for="location">Location</label>
             <select class="form-control" id="location">
               <option>Alor Gajah</option>
               <option>Jasin</option>
               <option>Merlimau</option>
               <option>Masjid Tanah</option>  
            </select>
         </div>

          <div class="form-group">   <!--select using CALENDAR-->
              <label for="location">Date:</label>
              <input type="text" class="form-control" placeholder="date" name="date"/>
          </div>

          <div class="form-group">
              <label for="booking_status">Status:</label>
              <select class="form-control" id="location" placeholder="status"> 
               <option>Active</option>
               <option>Deactive</option>
              </select>
          </div>
                     
          <button type="submit" class="btn btn-primary-outline"> SUBMIT </button>
      </form>
  </div>
</div>
</div>

@endsection