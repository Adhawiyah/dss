@section('content')

<div>
    <a style="margin: 19px;" href="{{ route('bookings.create') }}" class="btn btn-primary">Create Booking</a>
    </div>  

    <!-- Success Notification -->
    @if ($message=Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif
  <!-- End Success Notification -->

<div class="row">
<div class="col-sm-12">  
  <table class="table table-striped">
    <thead>
        <tr> <!-- Booking here-->
          <td>ID</td>
          <td>Date</td>
          <td>Service type</td>
          <td>Location</td>
          <td>Booking status</td>  
          <td colspan = 4>Options</td>
        </tr>
    </thead>
    <tbody>
        @foreach($customers as $customer)
        <tr> <!--bukan attributes customer di sini -->
            <td>{{$booking->id}}</td>
            <td>{{$booking->booking_status}}</td>
            <td>{{$booking->date}}</td>
            <td>{{$booking->location}}</td> 
            <td>
                <a href="{{ route('bookings.edit',$booking->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{route('bookings.destroy', $booking->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit" value="Delete">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>

@endsection