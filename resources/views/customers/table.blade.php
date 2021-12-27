@section('content')

<div>
    <a style="margin: 19px;" href="{{ route('bookings.create') }}" class="btn btn-primary">Create Booking</a>
    </div>  </br>


    <!-- Success Notification -->
    @if ($message=Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif
  <!-- End Success Notification -->
<h1>Edit profile </h1>
<!-- EDIT form (profile) -->
<form action="{{ route('customers.store') }}" method="POST">
    @csrf

    <div class="form-group">
      <label>Name : </label>
      <input name="cust_name" type="text"/><br>
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

  <div class="form-group">
    <label> Username : </label>
    <input name="cust_username" type="string"/>
  </div>
    
  <div class="form-group">
    <label>Address : </label>
    <textarea class="form-control" name="cust_address"></textarea>
  </div>
   
  <div class="form-group">
      <label> Phone Number : </label>
      <input name="cust_username" type="string"/><br>
  </div>
    
   
 <div class="form-group">
    <label> Email : </label>
    <input name="cust_email" type="email"/><br>
  </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection