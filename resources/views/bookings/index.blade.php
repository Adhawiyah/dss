@extends('layouts.customerTemplate')  
@section('content')

<h3>View list of Bookings</h3><br>
<div class="row" style="background-color: #92A9BD;">
<div class="col-sm-12">   
  <table class="table table-striped" style="background-color: #D3DEDC;">
    <thead>
        <tr> <!-- Services here -->
          <th>Id</th>  
           <th>Service type</th>
           <th>Service location</th>
           <th>Date</th> 
           <th>Service status</th>   
          <th colspan = 6>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookings as $b)
        <tr>
          <td>{{$b->id}}</td>
          <td>{{$b->service_type}}</td>
          <td>{{$b->service_location}}</td>
          <td>{{$b->date}}</td>
          <td>{{$b->booking_status}}</td>  
            <td>
                <a href="{{ route('bookings.edit',$b->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{route('bookings.destroy', $s->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>

@endsection
