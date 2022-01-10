@extends('layouts.customerTemplate')  
@section('content')

<div>
    <a style="margin: 19px;" href="{{ route('bookings.create') }}" class="btn btn-primary">Create Booking</a>
    </div>  </br>

<div class="row">
<div class="col-sm-12">  
  <h3>List of Bookings</h3><br>
  <table class="table table-striped">
    <thead>
        <tr> 
            <th>Id</th>
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
            <!-- Buttons-->
            <td>
                <a href="{{ route('bookings.edit',$s->id)}}" class="btn btn-primary">Edit</a>
            </td>   
            <td>
                <form method="POST" action="{{ route('bookings.destroy',$booking->id)}}">   
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
