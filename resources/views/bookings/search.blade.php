@extends('layouts.customerTemplate')
@section('content')

@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="row">
     <div class="col-md-6">
        <h1>SEARCH PAGE</h1>
    </div>
    
    <div class="col-md-4">   
        <form action="/search" method="get">
         <div class="input-group">
            <input type="search" name="search" class="form-control" placeholder="service type">
            </div>
            <div class="col-lg-5">
                <input  name="finish_date"  class="form-control m-input start_date" autocomplete="off">
             </div>
            <span class="input-group-prepend">
                <button type="submit" class="btn btn-primary">Search</button>
            </span>
         </div>
     </form>
    </div> 
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id.</th>
            <th>Seller Name</th>
            <th>Service type</th>
            <th>Location</th>
            <th>Status</th>
            <th width="250">Action</th>
        </tr>
    </thead>
    <tbody>
         @foreach($services as $s)
         <tr> 
             <td>{{$s->id}}</td>
             <td>{{$s->seller_name}}</td>
             <td>{{$s->service_type}}</td>
             <td>{{$s->service_location}}</td>
             <td>{{$s->service_status}}</td>
             <td>  
                <a href="{{route('bookings.create',['service'=>$s]) }}" class="btn btn-primary">BOOK</a>   
            </td> 
         </tr>
        @endforeach

    </tbody>
   

@endsection
