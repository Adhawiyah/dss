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

  @endsection