@extends('layouts.customerTemplate') 
@section('content')

<form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search'}}">
    <input class="form-control mr-sm-2" name="query" type="search" placeholder="service type">
    <input class="form-control mr-sm-2" name="query" type="search" placeholder="location">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
</form>

<div>
    <a style="margin: 19px;" href="{{ route('bookings.create') }}" class="btn btn-primary">Create Booking</a>
    </div>  

<div class="row">
<div class="col-sm-12">   
  <table class="table table-striped">
    <thead>
        <tr> <!-- display list of service that seller insert in the system-->
          <th>Id</th>  
           <th>Service type</th></br>
           <th>Location</th> 
           <th>Service Status</th>   
          <th colspan = 6>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($services as $s)
        <tr><!-- letak service_type sini-->
            <td>{{$s->id}}</td>  
            <td>{{$s->service_type}}</td>
            <td>{{$s->seller->location}}</td>
            <td>{{$s->service_status}}</td>   
            <td>
                <form action="{{route('bookings.create', $s->id)}}" method="post">
                  @csrf
                  @method('GET')
                  <button class="btn btn-danger" type="submit">BOOK</button> 
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>

@endsection

