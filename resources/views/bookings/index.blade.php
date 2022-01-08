@extends('layouts.customerTemplate')  
@section('content')

<div class="row">
<div class="col-sm-12">  
  <h3>List of Bookings</h3><br>
  <table class="table table-striped">
    <thead>
        <tr> 
            <th>ID</th>
            <th>Seller Name</th>
            <th>Service type</th>
            <th>Location</th>
            <th>Date</th> 
            <th>Status</th>  
            <th colspan = 6>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookings as $booking)
        <tr> 
            <td>{{$booking->id}}</td>
            <td>{{$booking->id}}</td>
            <td>{{$booking->date}}</td>
            <td>{{$booking->location}}</td>
            <td>{{$booking->booking_status}}</td>     
            <td>
                <form method="POST" action="{{ route('bookings.destroy',$booking->id)}}">  
                <a class="btn btn-primary" action="{{ route('bookings.show',$booking->id)}}">Show</a>
                  <a class="btn btn-primary" action="{{ route('bookings.edit',$booking->id)}}">Edit</a>
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit" value="delete">Delete</button>
                </form>
            </td>    
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
